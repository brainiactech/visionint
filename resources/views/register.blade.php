<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Registration | Vision Integrated</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
          ================================================== -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <!-- CSS
          ================================================== -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css"> 
        <link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
        <link href="plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen" /> 
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
        <!-- Color Style -->
        <link href="colors/blue.css" rel="stylesheet" type="text/css">
        <!-- SCRIPTS
          ================================================== -->
        <script src="js/modernizr.js"></script><!-- Modernizr -->
    </head>
    <body>
        <!--[if lt IE 7]>
                <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]--> 
        <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Start Body Container -->
        <div class="body footer-style2"> 
            @include('includes.header') 
            <!-- Start Content -->
            <div class="main" role="main">
                <div id="content" class="content page-content full">
                    <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-image:url({{ asset('/images/img4.jpg')}}}})">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Complete Registration</h1>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><strong>Registration</strong></h2>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo.</p>
                                
                                <hr>
                                <div class="col-md-4 col-xs-12">
                                    <a href="{{ url('/houseownershipsignup') }}" class="btn btn-warning font-2x bg-gradient-gold">House Ownership Scheme</a>
                                </div>
                                <div class="col-md-4 col-xs-12 ">
                                    <a href="{{ url('/kekebikeownershipsignup') }}" class="btn btn-primary float-righter font-2x bg-gradient-blue"><span>Keke And Motocycle Empowerment Scheme</span><span class='visible-xs'>&nbsp;&nbsp;</span></a>
                                </div><div class='visible-xs'><br/><br/><br/></div>
                                <div class="col-md-4 col-xs-12">
                                    <a href="{{ url('/financialempowermentsignup') }}" class="btn btn-warning font-2x centralize-e  bg-gradient-gray">Financial Empowerment Scheme </a>
                                </div><div class='visible-xs'><br/><br/><br/></div>
                                
                            </div>
                            <!-- Start Sidebar -->
                            
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.footer')
            <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> </div>
        <!-- End Body Container --> 
        <script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
        <script>if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='js/jquery-2.0.0.min.js' type='text/javascript'%3E%3C/script%3E"));
    }</script> 
        <script src="plugins/prettyphoto/js/prettyphoto.js"></script>
        <script src="plugins/prettyphoto/js/prettyphoto.js"></script>  
        <script src="plugins/owl-carousel/js/owl.carousel.min.js"></script> 
        <script src="plugins/page-scroller/jquery.pagescroller.js"></script> 
        <script src="js/helper-plugins.js"></script> <!-- Plugins --> 
        <script src="js/bootstrap.js"></script> <!-- UI --> 
        <script src="js/init.js"></script> <!-- All Scripts -->   
        <!-- End Js --> 
    </body>
</html>