<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Vi Limited - Responsive HTML5 Vision</title>
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
                <div id="content" class="content full">
                    <div class="rev-slider-container">
                        <div class="tp-banner-container">
                            <div class="tp-banner" >
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-delay="4000" data-masterspeed="600" data-slotamount="7" data-transition="scaledownfromtop"> 
                                        <!-- MAIN IMAGE --> 
                                        <img src="{{ asset('/images/visionintegrated.jpg') }}" alt=""> 

                                        <!-- LAYER NR. 1 -->
                                        
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-delay="4000" data-masterspeed="600" data-slotamount="7" data-transition="fade"> 
                                        <!-- MAIN IMAGE --> 
                                        <img src="{{ asset('/images/slide2.jpg') }}" alt="">
                                       <!-- LAYER NR. 1 -->
                                        <div class="tp-caption with_white_background skewfromleft tp-resizeme"
                                             data-x="65"
                                             data-y="61" 
                                             data-speed="1000"
                                             data-start="300"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 5"> </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption with_colored_background skewfromleft tp-resizeme"
                                             data-x="63"
                                             data-y="118" 
                                             data-speed="1000"
                                             data-start="600"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 6"> </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption with_white_background skewfromleft tp-resizeme"
                                             data-x="63"
                                             data-y="176" 
                                             data-speed="1000"
                                             data-start="900"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 7"><span class='font-xs-2x'>Unlimited &amp; Opportunities</span>  </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption with_colored_background skewfromleft tp-resizeme"
                                             data-x="64"
                                             data-y="233" 
                                             data-speed="1000"
                                             data-start="1200"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 8"><span class='font-xs-2x '>Opportunity For Everyone</span> </div>
                                             
                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption with_white_background skewfromleft tp-resizeme "
                                             data-x="63"
                                             data-y="290" 
                                             data-speed="1000"
                                             data-start="1500"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 9"><div class="tp-caption with_colored_background skewfromleft tp-resizeme"
                                             data-x="64"
                                             data-y="233" 
                                             data-speed="1000"
                                             data-start="1200"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 8"> </div>
</div>

                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption with_colored_background skewfromleft tp-resizeme"
                                             data-x="65"
                                             data-y="348" 
                                             data-speed="1000"
                                             data-start="1800"
                                             data-easing="Power3.easeInOut"
                                             data-endspeed="300"
                                             style="z-index: 10"> </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="padding-tb45 lgray-color text-align-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12" data-appear-animation="fadeIn" data-appear-animation-delay=".2">
                                    <h1 class="no-strong"><span class="accent-color-text">Vi Limited:</span> Everything you need to build a unique Life</h1>
                                    <p>Aliquam enim enim, pharetra in sodales at, interdum sit amet dui. Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum.</p>
                                    <a href="{{ url('/signup') }}" class="btn btn-lg btn-primary">REGISTER NOW!</a> </div>
                            </div>
                        </div>
                    </div>
                    <hr class="fw margin-0">

                    <br/>

                    <div class="pages" id="features">

                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-align-center" data-appear-animation="fadeInLeftBig" data-appear-animation-delay=".2"> <img src="images/packages.jpg"  alt=""> </div>
                                    <div class="col-md-4 col-md-offset-1" data-appear-animation="fadeInRightBig" data-appear-animation-delay="200">
                                        <h2>Keke Napep & Motocycle Ownership Scheme.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                                        <a href="{{ url('/kekebikeownershipsignup') }}" class="btn btn-primary btn-lg">Register For This Scheme</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pages visible-xs" id="features">

                        <div class="padding-tb75">
                            <div class="container">
                                <div class="row">
                                     <div class="col-md-6 text-align-center" data-appear-animation="fadeInLeftBig" data-appear-animation-delay=".2"> <img src="images/bike.jpg" alt=""> </div>

                                    <div class="col-md-4 col-md-offset-1 inverse-margin" data-appear-animation="fadeInRightBig" data-appear-animation-delay="200">
                                        <h2>Financial Empowerment Scheme.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                                        <a href="{{ url('/financialempowermentsignup') }}" class="btn btn-primary btn-lg">Register For This Scheme</a> </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pages hidden-xs" id="features">

                        <div class="padding-tb75">
                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-md-4 col-md-offset-1 inverse-margin" data-appear-animation="fadeInRightBig" data-appear-animation-delay="200">
                                        <h2>Financial Empowerment Scheme.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                                        <a href="{{ url('/financialempowermentsignup') }}" class="btn btn-primary btn-lg">Register For This Scheme</a> </div>
                         
                                     <div class="col-md-6 text-align-center" data-appear-animation="fadeInLeftBig" data-appear-animation-delay=".2"> <img src="images/bike.jpg" alt=""> </div>
          
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="pages" id="features">

                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-align-center" data-appear-animation="fadeInLeftBig" data-appear-animation-delay=".2"> <img src="images/housing.jpg" alt=""> </div>
                                    <div class="col-md-4 col-md-offset-1" data-appear-animation="fadeInRightBig" data-appear-animation-delay="200">
                                        <h2>House Ownership Scheme.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                                        <a href="{{ url('/houseownershipsignup') }}" class="btn btn-primary btn-lg">Register For This Scheme</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container margin-40 padding-tb75">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="heading-hr margin-60"><span>Loved by over <span class="accent-color-text">30000</span> families</span></h4>
                        </div>
                        <div class="col-md-12 margin-50">
                            <ul class="owl-carousel" data-columns="2" data-autoplay="no" data-pagination="yes" data-arrows="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>Phasellus blandit mattis ipsum, ac laoreet Morlem lacinia et. Cras et ligula libero. ac laoreet Morlem lacinia et. Cras et ligula libero.</p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>Phasellus blandit mattis ipsum, ac laoreet Morlem lacinia et. Cras et ligula libero. ac laoreet Morlem lacinia et. Cras et ligula libero.</p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>Phasellus blandit mattis ipsum, ac laoreet Morlem lacinia et. Cras et ligula libero. ac laoreet Morlem lacinia et. Cras et ligula libero.</p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>Phasellus blandit mattis ipsum, ac laoreet Morlem lacinia et. Cras et ligula libero. ac laoreet Morlem lacinia et. Cras et ligula libero.</p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul class="client-logos owl-carousel" data-columns="6" data-autoplay="yes" data-pagination="no" data-arrows="no" data-items-desktop="5" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="2">
                                <li class="item"><img src="" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                                <li class="item"><img src="http://placehold.it/126x30&amp;text=IMAGE+PLACEHOLDER" alt="Valentine"></li>
                            </ul>
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
        <script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
        <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
        <script src="js/revolution-slider-init.js"></script> <!-- Revolutions Slider Intialization -->   
        <!-- End Js --> 
    </body>
</html>