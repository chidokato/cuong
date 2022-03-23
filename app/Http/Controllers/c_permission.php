<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\seo;
use App\permission;
use Image;
use File;

class c_permission extends Controller
{
    public function getlist()
    {
        $permission = permission::orderBy('id','desc')->get();
        return view('admin.permission.list',[
            'permission'=>$permission,
        ]);
    }

    public function search(Request $Request)
    {
        $datefilter[] = '';
        $permission = permission::orderBy('id','desc')->where('id','!=' , 0);
        if($Request->key){
            $permission->where('name','like',"%$Request->key%");
        }
        if(isset($Request->datefilter)){
            $datefilter = explode(" - ", $Request->datefilter);
            $day1 = date('Y-m-d',strtotime($datefilter[0]));
            $day2 = date('Y-m-d',strtotime($datefilter[1]));
            // $permission->whereBetween('created_at', [$day1, $day2]);
            $permission->whereDate('created_at','>=', $day1)->whereDate('created_at','<=', $day2);
        }
        $permission = $permission->paginate($Request->paginate);

        return view('admin.permission.list',[
            'permission'=>$permission,
            'key'=>$Request->key,
            'datefilter'=>$Request->datefilter,
            'paginate'=>$Request->paginate,
        ]);
    }

    public function getadd()
    {
        return view('admin.permission.addedit');
    }

    public function postadd(Request $Request)
    {
        $permission = new permission;
        $permission->name = $Request->name;
        $permission->sku = $Request->sku;
        $permission->save();
        return redirect('admin/permission/list')->with('Success','Thành công');
    }

    public function getedit($id)
    {
        $data = permission::findOrFail($id);
        return view('admin.permission.addedit',['data'=>$data]);
    }

    public function double($id)
    {
        $data = permission::findOrFail($id);
        $permission = permission::select('id','name','parent')->get();
        return view('admin.permission.double',['data'=>$data, 'permission'=>$permission]);
    }

    public function postedit(Request $Request,$id)
    {
        $permission = permission::find($id);
        $permission->name = $Request->name;
        $permission->sku = $Request->sku;
        $permission->save();
       
        return redirect('admin/permission/list')->with('Success','Thành công');
    }

    public function getdelete($id)
    {
        $permission = permission::find($id);
        $permission->delete();
        return redirect('admin/permission/list')->with('Success','Success');
    }
}
