<!DOCTYPE html>
<html>
<head>
    <link href="{{url('assets/libs/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('assets/libs/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('assets/libs/css/ken-burns.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('assets/libs/css/animate.min.css')}}" type="text/css" media="all" />
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Computer Engineering- Fpe" />
    <title>{{ env("APP_NAME") }}</title>
    <!--js-->
    <script src="{{url('assets/libs/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/libs/js/bootstrap.min.js')}}"></script>
    <!--js-->
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/css/custom.css')}}">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">
            <img src="{{url('assets/images/logo.png')}}" class="logo img-responsive" width="250px">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav navbar-rights">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('about')}}">About Developers</a></li>
            <li><a href="{{url('recruitment')}}">Recruitment</a></li>
            <li><a href="{{url('status')}}">Recruitment Status</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

@yield('content')

<!--footer-->
<div class="footer-w3">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-grid">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{url('/')}}"> Home</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-grid">
                <h4>About Us</h4>
                <p>Design and implementation of recruitment managment system system |  A Case Study of Federal Polytechnic Academic Staff
                    <br> Developed by
                </p>
                <ul>
                    <li>
                        Ojo Pamilerin David  - CS20180202668
                    </li>
                    <li>
                        Olawole Precious Ifeoluwa - CS20180200092
                    </li>
                    <li>

                    </li>
                </ul>


                <p>
                    Project Supervised by Mr. Ramon T.A / Mrs Oluwatosin
                </p>
            </div>

            <div class="col-md-4 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>The Federal Polytechnic, Ede , Osun State</li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="#">info@federalpolyede.edu.ng</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-->
<!---copy--->
{{--<div class="copy-section">--}}
    {{--<div class="container">--}}
        {{--<div class="social-icons">--}}
            {{--<a href="#"><i class="icon1"></i></a>--}}
            {{--<a href="#"><i class="icon2"></i></a>--}}
            {{--<a href="#"><i class="icon3"></i></a>--}}
            {{--<a href="#"><i class="icon4"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!---copy--->
</body>
</html>