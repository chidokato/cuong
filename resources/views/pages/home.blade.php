@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')

@include('layout.header')

<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
	<div class="slide kenburns" data-bg-image="images/slider/notgeneric_bg3.jpg">
		<div class="bg-overlay"></div>
		<div class="container">
			<div class="slide-captions text-center text-light">
				<h1>PHÒNG KINH DOANH 9</h1>
				<!-- <p>Hãy là “người tiêu dùng thông thái” ... Đó là thông điệp xuyên suốt mà các chuyên gia, các nhà quản lý cùng nhà báo muốn chuyển tải tới độc giả của Nhân Dân ...</p> -->
				<a class="btn" data-target="#modal" data-toggle="modal" href="#">THAM GIA NGAY</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="modal-label">Chào mừng bạn</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-12">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium atque architecto
quae ullam rem labore veritatis temporibus asperiores, ad eaque odit commodi
inventore dolore perspiciatis, nam dicta est eos id quod excepturi.</p>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-b" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-b">Save Changes</button>
</div>
</div>
</div>
</div>

@endsection
