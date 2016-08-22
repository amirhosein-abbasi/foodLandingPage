<!DOCTYPE html>
<html>
<head>
    <title>سرآشپز پاپیون</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="source/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="source/js/bootstrap.min.js">
    <link href="source/js/bootstrap.rtl.min.js">
    <link href="https://fonts.googleapis.com/css?family=Harmattan|Lato" rel="stylesheet">

    <link href="css/page.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="mynav navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header pull-right">
            <a class="navbar-brand" href="#" ></a>
        </div>
        <div class="nav navbar-nav pull-right ">
            <img src="uploads/logo.png" class="img-responsive">
        </div>
        <div class="navbar-header pull-left" >
            <a class="navbar-brand" href="#"></a>
        </div>
        <ul class="nav navbar-nav pull-left">
            <li><a href="#">امکانات</a></li>
            <li><a href="#">تماس با ما</a></li>
            <li><a href="#">گالری عکس</a></li>
            <li><a href="#">درباره برنامه</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="content">
        @include('landingViews.intro')
        @include('landingViews.info')
        @include('landingViews.others')
        @include('landingViews.app')
        {{--@yield('landingViews.QR')--}}
        {{--@yield('landingViews.gallery')--}}
        {{--@yield('landingViews.sign')--}}
    </div>
</div>
</body>
</html>
