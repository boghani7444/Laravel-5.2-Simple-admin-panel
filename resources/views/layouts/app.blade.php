<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from envato.megadrupal.com/html/megacourse/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 07 Nov 2016 10:19:54 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web') }}/css/library/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web') }}/css/library/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web') }}/css/library/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web') }}/css/md-font.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/web') }}/css/style.css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <title>Mega Course - Learning and Courses HTML5 Template</title>
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','../../../connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1031554816897182');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1031554816897182&amp;ev=PageView&amp;noscript=1"
        /></noscript>
</head>
<body id="page-top" class="home">

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="pre-icon">
            <div class="pre-item pre-item-1"></div>
            <div class="pre-item pre-item-2"></div>
            <div class="pre-item pre-item-3"></div>
            <div class="pre-item pre-item-4"></div>
        </div>
    </div>
    <!-- END / PRELOADER -->

    <!-- HEADER -->
    @include('layouts.header')
            <!-- END / HEADER -->

    @yield('container')



            <!-- FOOTER -->
    @include('layouts.footer')
            <!-- END / FOOTER -->





</div>
<!-- END / PAGE WRAP -->

<!-- Load jQuery -->
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/library/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/library/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/library/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/library/jquery.appear.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/library/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/library/jquery.easing.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/web') }}/js/scripts.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-20585382-5', 'megadrupal.com');
    ga('send', 'pageview');
</script>
</body>

<!-- Mirrored from envato.megadrupal.com/html/megacourse/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 07 Nov 2016 10:20:19 GMT -->
</html>