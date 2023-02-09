<!--<![endif]-->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1,
            initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Blood Donation Society Pakistan</title>
    {{-- <link rel="icon" type="images/x-icon"   href="https://www.w3docs.com/favicon.ico"/> --}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="new/assets/img/icon.png">
    @include('layout2.head')
</head>

<body class="layout-wide color-seven">
    <!--Start Preloader Eight-->
    <div class="site-preloader eight">
        <div class="spinner"></div>
    </div>
    <!--End Preloader Eight-->
    <!--Start Body Wrap-->
    <div id="body-wrap">
        @include('layout2.top_nav')
        @include('layout2.navbar')
        @yield('content')
        @include('layout2.footer')
        @include('layout2.js_script')
    </div>
</body>
