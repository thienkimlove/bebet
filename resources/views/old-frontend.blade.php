<!DOCTYPE html>
<html lang="vi">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="{{url('frontend/favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/cagaileo.css')}}" type="text/css"/>
    <meta content='GCL' name='generator'/>
    <title>{{$meta_title}}</title>

    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="Tiền Liệt Vương">
	<meta property="fb:app_id" content="1571372846430003"/>

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
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
    <meta name="AUTHOR" content="Tiền Liệt Vương"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>
    <!--[if lte IE 8]>
    <script src="{{url('frontend/js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('frontend/css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	
	<script type="text/javascript">
            (function () {
                        var _eclickq = window._eclickq || (window._eclickq = []);
                        if (!_eclickq.loaded) {
                        var eclickTracking = document.createElement('script');
                             eclickTracking.async = true;
                             eclickTracking.src = ('https:'==document.location.protocol?'https:':'http:')+'//s.eclick.vn/delivery/retargeting.js';
                             var s = document.getElementsByTagName('script')[0];
                             s.parentNode.insertBefore(eclickTracking, s);
                             _eclickq.loaded = true;                                                           
                        }
                        _eclickq.push(['addPixelId', 12624]);
            })();
            window._eclickq = window._eclickq || [];
            window._eclickq.push(['track', 'PixelInitialized', {}]);
</script>
	
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570f69bb385fe2f2"></script>
	<!-- Facebook Conversion Code for Tiền liệt vương -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6059229771751', {'value':'0.00','currency':'VND'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6059229771751&amp;cd[value]=0.00&amp;cd[currency]=VND&amp;noscript=1" /></noscript>
</head>
<body class="home">
<div class="wrapper" id="wrapper">
    @include('old-frontend.header')

    @yield('content')

    @include('old-frontend.footer')
    <div class="overlay" id="overlay"></div>
    @include('old-frontend.mobile_menu')
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1571372846430003',
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66374353-1', 'auto');
  ga('send', 'pageview');

</script>

<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",13099]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>

<script type="text/javascript" src="{{url('frontend/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/ScrollToFixed/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/common.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/fixedsidebar.js')}}"></script>

</body>
</html>