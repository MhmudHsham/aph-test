<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APH</title>

    <!--    Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!--Fontawesom-->
    <link rel="stylesheet" href="{{ url('/public/front/css/font-awesome.min.css') }}">

    <!--Animated CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/front/css/animate.min.css') }}">

    <!-- Bootstrap -->
    <link href="{{ url('/public/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Bootstrap Carousel-->
    <link type="text/css" rel="stylesheet" href="{{ url('/public/front/css/carousel.css') }}" />

    <link rel="stylesheet" href="{{ url('/public/front/css/isotope/style.css') }}">

    <!--Main Stylesheet-->
    <link href="{{ url('/public/front/css/style.css') }}" rel="stylesheet">
    <!--Responsive Framework-->
    <link href="{{ url('/public/front/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#header">

<!--Start Hedaer Section-->
<section id="header">
    <div class="header-area">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 ">
                        <div class="social_icon text-left">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                            <a href="" style="color: #000;"><i class="fa fa-phone"></i>+123456789</a>
                        </div>
                        <!--<div class="address">-->
                            <!--<i class="fa fa-phone floatleft"></i>-->
                            <!--<p>+123456789</p>-->
                        <!--</div>-->
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-6">
                        <div class="social_icon text-right">
                            <a href="{{ url('sign-in') }}" style="color: #000;">Login</a> /
                            <a href="{{ url('sign-up') }}" style="color: #000;">Register</a>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
        <!--End of top header-->
        <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav" style="background-color: #222;">
            <div class="container">
                <nav class="navbar navbar-default zero_mp ">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand custom_navbar-brand" href="#">
                            <img src="assets/img/logo.jpeg" style="width: 100px;" alt="">
                        </a>
                    </div>
                    <!--End of navbar-header-->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right main_menu" style="margin-right: 200px!important;">
                            <li class="active"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="{{ url('journals') }}">Journals</a></li>
                            <li><a href="{{ url('books') }}">Books</a></li>
                            <li><a href="{{ url('conferences') }}">Conferences</a></li>
                            <li><a href="{{ url('news') }}">News</a></li>
                            <li><a href="{{ url('about-us') }}">About us</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <!--End of nav-->
            </div>
            <!--End of container-->
        </div>
        <!--End of header menu-->
    </div>
    <!--end of header area-->
</section>
<!--End of Hedaer Section-->



@yield("content")


<footer id="contact" class="footer action-lage bg-black p-top-80">
    <!--<div class="action-lage"></div>-->
    <div class="container">
        <div class="row">
            <div class="widget_area">
                <div class="col-md-4">
                    <div class="widget_item widget_about" style="color: #aaaaaa;">
                        <h5 class="text-white">About Us</h5>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">Location</h6>
                                <p>
                                    123 suscipit ipsum nam auctor
                                    mauris dui, ac sollicitudin mauris,
                                    Bandung</p>
                            </div>
                        </div>
                        <div class="widget_ab_item m-top-20">
                            <div class="item_icon"><i class="fa fa-phone"></i></div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">Phone :</h6>
                                <p>+1 2345 6789</p>
                            </div>
                        </div>
                        <div class="widget_ab_item m-bottom-30 m-top-20">
                            <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">Email Address :</h6>
                                <p>youremail@mail.com</p>
                            </div>
                        </div>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

                <!--<div class="col-md-3">-->
                    <!--<div class="widget_item widget_latest sm-m-top-50">-->
                        <!--<h5 class="text-white">Latest News</h5>-->
                        <!--<div class="widget_latst_item m-top-30">-->
                            <!--<div class="item_icon"><img src="assets/img/ltst-img-1.jpg" alt="" /></div>-->
                            <!--<div class="widget_latst_item_text">-->
                                <!--<p>Lorem ipsum dolor sit amet, consectetur</p>-->
                                <!--<a href="">21<sup>th</sup> July 2016</a>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="widget_latst_item m-top-30">-->
                            <!--<div class="item_icon"><img src="assets/img/ltst-img-2.jpg" alt="" /></div>-->
                            <!--<div class="widget_latst_item_text">-->
                                <!--<p>Lorem ipsum dolor sit amet, consectetur</p>-->
                                <!--<a href="">21<sup>th</sup> July 2016</a>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="widget_latst_item m-top-30">-->
                            <!--<div class="item_icon"><img src="assets/img/ltst-img-3.jpg" alt="" /></div>-->
                            <!--<div class="widget_latst_item_text">-->
                                <!--<p>Lorem ipsum dolor sit amet, consectetur</p>-->
                                <!--<a href="">21<sup>th</sup> July 2016</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>&lt;!&ndash; End off widget item &ndash;&gt;-->
                <!--</div>&lt;!&ndash; End off col-md-3 &ndash;&gt;-->

                <div class="col-md-4">
                    <div class="widget_item widget_service sm-m-top-50">
                        <h5 class="text-white">Your pages</h5>
                        <ul class="m-top-20 text-left">
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Home</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> About us</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Journals</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> News</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Contact us</a></li>
                        </ul>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

                <div class="col-md-4">
                    <div class="widget_item widget_newsletter sm-m-top-50">
                        <h5 class="text-white">Newsletter</h5>
                        <form class="form-inline m-top-30">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter you Email">
                                <button style="margin-top: -20px;" type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                            </div>

                        </form>
                        <div class="widget_brand m-top-40">
                            <a href="" class="text-uppercase">Your Logo</a>
                            <p>Lorem ipsum dolor sit amet consec tetur
                                adipiscing elit nulla aliquet pretium nisi in</p>
                        </div>
                        <ul class="list-inline m-top-20">
                            <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-behance"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                        </ul>

                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->
            </div>
        </div>
    </div>

</footer>





<!--Scroll to top-->
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
<!--End of Scroll to top-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
<script src="{{ url('/public/front/js/jquery-1.12.3.min.js') }}"></script>

<!--Counter UP Waypoint-->
<script src="{{ url('/public/front/js/waypoints.min.js') }}"></script>
<!--Counter UP-->
<script src="{{ url('/public/front/js/jquery.counterup.min.js') }}"></script>

<script>
    //for counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
</script>


<!--Isotope-->
<script src="{{ url('/public/front/js/isotope/min/scripts-min.js') }}"></script>
<script src="{{ url('/public/front/js/isotope/cells-by-row.js') }}"></script>
<script src="{{ url('/public/front/js/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('/public/front/js/isotope/packery-mode.pkgd.min.js') }}"></script>
<script src="{{ url('/public/front/js/isotope/scripts.js') }}"></script>


<!--Back To Top-->
<script src="{{ url('/public/front/js/backtotop.js') }}"></script>


<!--JQuery Click to Scroll down with Menu-->
<script src="{{ url('/public/front/js/jquery.localScroll.min.js') }}"></script>
<script src="{{ url('/public/front/js/jquery.scrollTo.min.js') }}"></script>
<!--WOW With Animation-->
<script src="{{ url('/public/front/js/wow.min.js') }}"></script>
<!--WOW Activated-->
<script>
    new WOW().init();
</script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('/public/front/js/bootstrap.min.js') }}"></script>
<!-- Custom JavaScript-->
<script src="{{ url('/public/front/js/main.js') }}"></script>
</body>

</html>
