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
				<br><small id="hidden">{{session('Success')}}</small>
			</div>
		</div>
	</div>
</div>

<form id="form1" action="admin/login" class="form-grey-fields form-validate" method="post"><input type="hidden" name="_token" value="{{csrf_token()}}" />
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

<div class="form-group">
	<label class="sr-only">Tài khoản</label>
	<input name="name" placeholder="Tài khoản" class="form-control" type="text" required>
</div>
<div class="form-group m-b-5">
	<label class="sr-only">Mật khẩu</label>
	<input name="password" placeholder="Mật khẩu" class="form-control" type="password">
</div>
<div class="form-group form-inline text-left m-b-10 ">
	<a class="right" href="resetpassword">
	<p><small>Lấy lại tài khoản hoặc mật khẩu?</small></p>
</a>
</div>

</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-b" data-dismiss="modal">Thoát</button>
<button type="submit" class="btn btn-b">Đăng nhập</button>

<p class="text-left">Bạn chưa có tài khoản? <a href="signup">Đăng ký ngay</a> </p>
</div>
</div>
</div>
</div>
</form>

<style type="text/css">
	#hidden{color: #fff; font-size: 1.1rem;}
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    setTimeout(function() {
	    $('#hidden').fadeOut('fast');
	}, 9000);
</script>

@endsection
