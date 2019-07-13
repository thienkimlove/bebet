<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="stylesheet" href="{{url('frontend/css/colorbox.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('frontend/css/bebirth.css')}}" type="text/css"/>
    <title>{{$meta_title}}</title>

    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="bebirth.vn">
    <meta property="og:url" content="http://www.bebirth.vn">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="{{env('SITE_NAME')}}">
    <meta property="fb:app_id" content="{{env('FB_ID')}}"/>

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="http://www.bebirth.vn/">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">

    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="{{env('SITE_NAME')}}"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>

    <!--[if lte IE 9]>
    <script src="{{url('frontend/js/html5.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="css/ie9.css" type="text/css"/>
    <![endif]-->
    <script src="{{url('frontend/js/modernizr.js')}}" type="text/javascript"></script>
</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '{{env('FB_ID')}}',
            xfbml      : true,
            version    : 'v2.7'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@if ($page == 'index')
    <div class="menuIcon pc">
        <div class="listIcons">
            <ul>
                <li>
                    <a href="#" class="iSearch">Search</a>
                    <div class="box-find" id="box-find">
                        <form method="GET" action="{{url('search')}}">
                            <input type="text" placeholder="Từ khóa tìm kiếm" name="q" class="txt"/>
                            <input type="submit" value="" name="submit" class="btn-find"/>
                        </form>
                    </div>
                </li>
                <li><a href="{{env('SOCIAL_YOUTUBE')}}" class="iYou">Youtube</a></li>
                <li><a href="{{env('SOCIAL_SKYPE')}}" class="iSkype">Skype</a></li>
                <li><a href="{{env('SOCIAL_GOOGLE_PLUS')}}" class="iGoogle">Google</a></li>
            </ul>
        </div>
    </div>
    <div class="hotLine sp">
        <img src="{{url('frontend/imgs/hot.png')}}" alt="Hot">
    </div>
@else
    <section class="menuIcon">
        <div class="listIcons">
            <ul>
                <li><a href="#" class="iSearch">Search</a></li>
                <li><a href="{{env('SOCIAL_YOUTUBE')}}" class="iYou">Youtube</a></li>
                <li><a href="{{env('SOCIAL_SKYPE')}}" class="iSkype">Skype</a></li>
                <li><a href="{{env('SOCIAL_GOOGLE_PLUS')}}" class="iGoogle">Google</a></li>
            </ul>
        </div>
    </section>
    @include('frontend.left_banner')
@endif
@include('frontend.header')
<!-- /endHeader -->

<!-- /endBanner -->
@yield('content')
<!-- /endSection -->
@include('frontend.footer')
<a id="callNowButton" href="tel:0914222131" class="ft-btn">&nbsp;</a>
<style>
    @media (max-width: 640px) {
        #callNowButton{
            display: block;
            height: 80px;
            position: fixed;
            left: 0;
            border-bottom-right-radius: 40px;
            border-top-right-radius: 40px;
            width: 100px;
            bottom: 90px;
            background: url("http://vietsoftgroup.com/uploads/callbutton.png") center 10px no-repeat #00c2ef;
            text-decoration: none;
            z-index: 9999;
        }
    }
</style>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '{{env('GOOGLE_GA')}}', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript" src="{{url('frontend/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/scrollReveal.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.colorbox-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/videoView.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/slideAdvs.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/common.js')}}"></script>
@yield('footer_script')

<div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <style>#cfacebook{position:fixed;bottom:0px;right:20px;z-index:999999999999999;width:250px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>
  <script>
  jQuery(document).ready(function () {
  jQuery(".chat_fb").click(function() {
jQuery('.fchat').toggle('slow');
  });
  });
  </script>
  <div id="cfacebook">
  <a href="javascript:;" class="chat_fb" onClick="return:false;"><i class="fa fa-facebook-square"></i> Chat với chúng tôi</a>
  <div class="fchat">
  <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/BeBirth.sanphamchuyenbiet" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </div>
  </div>
@yield('frontend_script')
</body>
</html>