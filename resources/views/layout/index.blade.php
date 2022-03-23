<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="data/favicon.png" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:site_name" content="site_name" />
<meta property="og:images" content="@yield('img')" />
<meta property="og:image" content="@yield('img')" />
<meta property="og:image:alt" content="@yield('title')" />
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<!-- and twitter -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />
<!-- ================= Style ================== --> 
<link href="frontend/css/plugins.css" rel="stylesheet">
<link href="frontend/css/style.css" rel="stylesheet">
<link href="frontend/toc.css" rel="stylesheet">
<!-- ================= js ================== --> 

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=493898662375038&autoLogAppEvents=1" nonce="KCxZOrDm"></script>

@yield('css')
{!! $head_setting->codeheader !!}
</head>
@include('layout.function')
<body> 
<div class="body-inner">
@yield('content')
@include('layout.footer')
</div>
{!! $head_setting->codebody !!}
@if(session('Alerts'))
	<script> alert('Thành công'); </script>
@endif
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="frontend/js/jquery.js"></script>
<script src="frontend/js/plugins.js"></script>
<script src="frontend/js/functions.js"></script>
<script src="frontend/validate/validate.min.js"></script>
<script src="frontend/validate/valildate-rules.js"></script>
@yield('script')
<script src="frontend/toc.js"></script>



</body>
</html>