<!DOCTYPE html>
<html lang="en">
    <!-- START Head -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <!-- Enable responsiveness on mobile devices-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <title>
            SKARLA | Financial 
        </title>

        <!--START Loader -->
        <style>
            #initial-loader{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;width:100%;background:#212121;position:fixed;z-index:10000;top:0;left:0;bottom:0;right:0;transition:opacity .2s ease-out}#initial-loader .initial-loader-top{display:flex;align-items:center;justify-content:space-between;width:200px;border-bottom:1px solid #2d2d2d;padding-bottom:5px}#initial-loader .initial-loader-top > *{display:block;flex-shrink:0;flex-grow:0}#initial-loader .initial-loader-bottom{padding-top:10px;color:#5C5C5C;font-family:-apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;font-size:12px}@keyframes spin{100%{transform:rotate(360deg)}}#initial-loader .loader g{transform-origin:50% 50%;animation:spin .5s linear infinite}body.loading {overflow: hidden !important} body.loaded #initial-loader{opacity:0}
        </style>
        <!--END Loader-->

        <!-- SCSS Output -->
        <link rel="stylesheet" href="{{skarla_url("/assets/stylesheets/app.min.e7c8016f.css")}}">

        <!-- START Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{skarla_url("/assets/images/favicons/apple-touch-icon.png")}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{skarla_url("/assets/images/favicons/android-chrome-192x192.png")}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{skarla_url("/assets/images/favicons/android-chrome-256x256.png")}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{skarla_url("/assets/images/favicons/favicon-32x32.png")}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{skarla_url("/assets/images/favicons/favicon-16x16.png")}}">
        <link rel="mask-icon" href="{{skarla_url("/assets/images/favicons/safari-pinned-tab.svg")}}" color="#f85d4c">
        <meta name="theme-color" content="#ffffff">
        <!-- END Favicon -->

        <!-- RSS -->
        <link rel="alternate" type="application/rss+xml" title="RSS" href="{{skarla_url("/atom.xml")}}">

        <!-- jekyll settings -->
        <script>
            var ASSET_PATH_BASE = '{{skarla_url("/asset/")}}';
        </script>
    </head>
    <!-- END Head -->

    <body class="sidebar-full-height  ">

        <!-- Bower Libraries Scripts -->
        <script src="{{skarla_url("/assets/vendor/js/lib.min.js")}}"></script>

        <div class="main-wrap">
            <nav class="navigation">
                @include('layouts.skarla.partials.nav.top')
                @include('layouts.skarla.partials.nav.left')
            </nav>

            <div class="content">                
                <div class="container">
                    <div class="m-t-2"></div>
                    @yield('content')
                </div>
            </div>

            @include('layouts.skarla.partials.footer')            

        </div>

        <!-- Bower Libraries Styles -->
        <link rel="stylesheet" href="{{skarla_url("/assets/vendor/css/lib.min.css")}}">

        <script src="{{skarla_url("/assets/javascript/app.min.e05f769f.js")}}"></script>

        <script src="{{skarla_url("/assets/javascript/plugins-init.js")}}"></script>
        <script src="{{skarla_url("/assets/javascript/switchery-settings.js")}}"></script>
    </body>

</html>
