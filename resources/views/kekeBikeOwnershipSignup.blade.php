<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Registration </title>
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
                    <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-image:url({{ url('/images/img4.jpg')}}}})">
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
                            <div class="col-md-7">
                                <h2><strong>Registration</strong></h2>
                                <p class="lead"><span style="color: #3498db; font-weight: 300; ">Keke Napep/ Motorcycle Ownership Package.</span> Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo.</p>
                                <hr>
                                @if ($errors)
                                @foreach ($errors->all() as $error)
                                <span class="help-block" style="color: red;"> {{ $error }}</span>
                                @endforeach
                                @endif

                                @if(session('error'))
                                <span style="color: red">{{ session('error') }}</span>
                                @endif
                                <form method="post" action="{{ url('/register') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name ="schemeId" value ="2" />
                                    <input type="hidden" name ="password" value="default"/>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Select Your Starting Level</label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select id="level" name="startingClassId" class="form-control input-lg">
                                                <option value="1">Classic | Fee = ₦3,000</option>
                                                <option value="2">Premium | Fee = ₦5,000</option>
                                                
                                            </select>
                                        </div>

                                    </div><br/>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="name"  class="form-control input-lg" placeholder="Full Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="phone"  class="form-control input-lg" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="email"  class="form-control input-lg" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="referalId"  class="form-control input-lg" placeholder="Referal Id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Date of birth</label>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <select name="day" class="form-control input-lg">
                                                    <option value="0" selected>Day</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <select name="month" class="form-control input-lg">
                                                    <option value="0" selected>Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Mar</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">May</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-4">
                                                <select name="year" class="form-control input-lg">
                                                    <option selected>Year</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1985">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <input type="radio" name="gender" value="male" checked="checked"/> &nbsp;Male
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <input type="radio" name="gender" value="female"/> &nbsp;Female
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="location" class="form-control input-lg">
                                                <option value="Abia State">Abia State</option>
                                                <option value="Adamawa State">Adamawa State</option>
                                                <option value="Akwa Ibom State">Akwa Ibom State</option>
                                                <option value="Anambra State">Anambra State</option>
                                                <option value="Bauchi State">Bauchi State</option>
                                                <option value="Bayelsa State">Bayelsa State</option>
                                                <option value="Benue State">Benue State</option>
                                                <option value="Borno State">Borno State</option>
                                                <option value="Cross River State">Cross River State</option>
                                                <option value="Delta State">Delta State</option>
                                                <option value="Ebonyi State">Ebonyi State</option>
                                                <option value="Edo State">Edo State</option>
                                                <option value="Ekiti State">Ekiti State</option>
                                                <option value="Enugu State">Enugu State</option>
                                                <option value="Gombe State">Gombe State</option>
                                                <option value="Imo State">Imo State</option>
                                                <option value="Jigawa State">Jigawa State</option>
                                                <option value="Kaduna State">Kaduna State</option>
                                                <option value="Kano State">Kano State</option>
                                                <option value="Katsina State">Katsina State</option>
                                                <option value="Kebbi State">Kebbi State</option>
                                                <option value="Kogi State">Kogi State</option>
                                                <option value="Kwara State">Kwara State</option>
                                                <option value="Lagos State">Lagos State</option>
                                                <option value="Nasarawa State">Nasarawa State</option>
                                                <option value="Niger State">Niger State</option>
                                                <option value="Ogun State">Ogun State</option>
                                                <option value="Ondo State">Ondo State</option>
                                                <option value="Osun State">Osun State</option>
                                                <option value="Oyo State">Oyo State</option>
                                                <option value="Plateau State">Plateau State</option>
                                                <option value="Rivers State">Rivers State</option>
                                                <option value="Sokoto State">Sokoto State</option>
                                                <option value="Taraba State">Taraba State</option>
                                                <option value="Yobe State">Yobe State</option>
                                                <option value="Zamfara State">Zamfara State</option>
                                                <option value="Abuja FCT">Abuja FCT</option>
                                            </select>
                                        </div>

                                    </div><br/>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label><strong>For Bank Deposit(Enter Teller Id)</strong></label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="tellerId"  class="form-control input-lg" placeholder="Teller Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label><strong>For Bank Transfer(Enter Transaction Id)</strong></label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="transactionId"  class="form-control input-lg" placeholder="Transaction Id">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label><strong>Bank Paid Into</strong></label>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <select name="bankPaidInto" class="form-control input-lg">
                                                    <option value="0" selected>Select Bank</option>
                                                    <option value="GT Bank PLC">GT Bank PLC</option>
                                                    <option value="Zenith Bank PLC">Zenith Bank PLC</option>
                                                    <option value="Fidelity Bank PLC">Fidelity Bank PLC</option>
                                                    <option value="Diamond Bank PLC">Diamond Bank PLC</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" class="btn btn-primary btn-lg " value="Complete Registration">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Sidebar -->
                            <aside class="col-md-5 sidebar right-sidebar ">
                                <div class="widget sidebar-widget recent-posts">

                                    <img id="banner" src="{{ asset('/images/pyramid.png') }}" alt=""/>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.footer')

            @if(session('success'))
            <?php 
                $scheme = "";
                $schemeId = session('scheme');
                if ($schemeId == App\Schemes::$KEKEANDMOTOCYCLEOWNERSHIPSCHEME){
                    $scheme = "Keke And Motocycle Ownership Scheme";
                }
                if ($schemeId == App\Schemes::$HOUSEOWNERSHIPSCHEME){
                    $scheme = "House Ownership Scheme";
                }
                if($schemeId == App\Schemes::$FINANCIALEMPOWERMENTSCHEME){
                    $scheme = "Financial Empowerment Scheme";
                }
                   
                $startingClass = "";
                $startingClassId = session('startingClass');
                if($startingClassId == \App\StartingClasses::$CLASSIC){
                    $startingClass = "Classic Starting Class";
                }
                if($startingClassId == \App\StartingClasses::$PREMIUM){
                    $startingClass = "Premium Starting Class";
                }
                
            ?>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Successful</h4>
                        </div>
                        <div class="modal-body">
                            <p>You successfully registered for the <strong>{{ $scheme }}</strong> at <strong>{{ $startingClass }}</strong>.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            @endif


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
        @if(session('success'))
        <script>
$(document).ready(function () {
    $('#myModal').modal('show');
});
<?php session(['success' => false]); ?>
        </script>
        @endif
        <script>
            $('#level').change(function () {
                var selection = this.value;

                if (selection == "1") {
                    $('#banner').attr('src', '/images/keke.png');
                }
                if (selection == "2") {
                    $('#banner').attr('src', '/images/bike.jpg');
                }
                if (selection == "3") {
                    $('#banner').attr('src', '/images/housing.jpg');
                }

            });


        </script>
    </body>
</html>