<!DOCTYPE HTML>
<html class="no-js">
<head>
    <title>Produce A Health Care Production Category Flat Bootstarp Resposive Website Template | Blog ::
        w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Produce Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" media="all" href="{{asset('css/style2.css')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->

    <!-- JS -->
    <script src="{{asset('js/jquery-1.7.1.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/tabs.js')}}"></script>
    <script src="{{asset('js/css3-mediaqueries.js')}}"></script>
    <script src="{{asset('js/jquery.columnizer.min.js')}}"></script>

    <!-- Isotope -->
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>

    <!-- Lof slider -->
    <script src="{{asset('js/jquery.easing.js')}}"></script>
    <script src="{{asset('js/lof-slider.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/lof-slider.css')}}" media="all"/>
    <!-- ENDS slider -->

    <!-- Tweet -->
    <link rel="stylesheet" href="{{asset('css/jquery.tweet.css')}}" media="all"/>
    <script src="{{asset('js/tweet/jquery.tweet.js')}}"></script>
    <!-- ENDS Tweet -->

    <!-- superfish -->
    <link rel="stylesheet" media="screen" href="{{asset('css/superfish.css')}}"/>
    <script src="{{asset('js/superfish-1.4.8/js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish-1.4.8/js/superfish.js')}}"></script>
    <script src="{{asset('js/superfish-1.4.8/js/supersubs.js')}}"></script>
    <!-- ENDS superfish -->

    <!-- prettyPhoto -->
    <script src="{{asset('js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
    <link rel="stylesheet" href="{{asset('js/prettyPhoto/css/prettyPhoto.css')}}" media="screen"/>
    <!-- ENDS prettyPhoto -->

    <!-- poshytip -->
    <link rel="stylesheet" href="{{asset('js/poshytip-1.1/src/tip-twitter/tip-twitter.css')}}"/>
    <link rel="stylesheet" href="{{asset('js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css')}}"/>
    <script src="{{asset('js/poshytip-1.1/src/jquery.poshytip.min.js')}}"></script>
    <!-- ENDS poshytip -->

    <!-- JCarousel -->
    <script type="text/javascript" src="{{asset('js/jquery.jcarousel.min.js')}}"></script>
    <link rel="stylesheet" media="screen" href="{{asset('css/carousel.css')}}"/>
    <!-- ENDS JCarousel -->

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

    <!-- modernizr -->
    <script src="{{asset('js/modernizr.js')}}"></script>

    <!-- SKIN -->
    <link rel="stylesheet" media="all" href="{{asset('css/skin.css')}}"/>

    <!-- Less framework -->
    <link rel="stylesheet" media="all" href="{{asset('css/lessframework.css')}}"/>

    <!-- jplayer -->
    <link href="{{asset('player-skin/jplayer-black-and-yellow.css')}}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{{asset('js/jquery.jplayer.min.js')}}"></script>

    <!-- flexslider -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <script src="{{asset('js/jquery.flexslider.js')}}"></script>

    <!-- reply move form -->
    <script src="{{asset('js/moveform.js')}}"></script>

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>

    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>

    <!-- Custom Theme files -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
</head>
<body>
@section('header')
    <div class="header blog_header">
        <div class="logo"><a href="index.html"><img src="{{asset('images/logo.png')}}" alt=""/></a></div>
        <div class="header-home">
            <div class="fixed-header">
                <div class="h_menu4"><!-- start h_menu4 -->
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="nav">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('catalog')}}">Catalog</a></li>
                        <li class="actie"><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contacts')}}">Contact</a></li>
                        <li><a href="{{route('search')}}">Search</a></li>
                    </ul>
                    <script type="text/javascript" src="{{asset('js/nav.js')}}"></script>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $(".scroll").click(function (event) {
                                event.preventDefault();
                                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                            });
                        });
                    </script>
                    <!--script-->
                    <script>
                        $(document).ready(function () {
                            $(".nav li a").click(function () {
                                $(this).parent().addClass("active");
                                $(this).parent().siblings().removeClass("active");
                            });
                        });
                    </script>
                    <!-- script-for sticky-nav -->
                    <script>
                        $(document).ready(function () {
                            var navoffeset = $(".header-home").offset().top;
                            $(window).scroll(function () {
                                var scrollpos = $(window).scrollTop();
                                if (scrollpos >= navoffeset) {
                                    $(".header-home").addClass("fixed");
                                } else {
                                    $(".header-home").removeClass("fixed");
                                }
                            });

                        });
                    </script>
                    <!-- /script-for sticky-nav -->
                </div><!-- end h_menu4 -->
            </div>
        </div>
    </div>
@show

@yield('content')

@section('footer')
    <div class="footer">
        <div class="container">
            <div class="copy">
                <img src="{{asset('images/logo.png')}}" alt=""/>
                <p>&copy;2015 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
            </div>
            <ul class="footer_social">
                <li><a href="#"> <i class="fb"> </i> </a></li>
                <li><a href="#"> <i class="pin"> </i> </a></li>
                <li><a href="#"> <i class="linkedin"> </i> </a></li>
                <li><a href="#"> <i class="google"> </i> </a></li>
                <li><a href="#"> <i class="tw"> </i> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
@show
</body>
</html>		