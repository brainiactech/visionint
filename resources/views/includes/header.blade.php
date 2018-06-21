<!-- Start Header -->
            <div class="topbar hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <nav class="secondary-menu">
                                <ul class="pull-left">
                                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <nav class="secondary-menu">
                                <ul class="pull-right">
                                    <li><a href="{{ url('/signup') }}">Registration</a></li>
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="">Locations</a></li>
                                    <li><a href="">FAQS</a></li>
                                    <li class="dropdown pull-right"><a data-toggle="dropdown"><img src="images/flag-icon-us.png" alt="us"> English US <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"><a href="#"><img src="images/flag-icon-us.png" alt="us"> English US</a></li>
                                            <li class="dropdown"><a href="#"><img src="images/flag-icon-uk.png" alt="us"> English UK</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <header class="site-header" id="sticky-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h1 class="logo"> <a href="{{ url('/') }}"> <img src="{{ asset('/images/vision.png')}}" alt="Site Logo"> </a> </h1>
                        </div>
                        <div class="col-md-9">
                            <button class="mmenu-toggle"><i class="fa fa-bars fa-lg"></i></button>
                            <nav class="main-menu">
                                <ul class="sf-menu" id="main-menu">
                                    <li><a href="{{ url('/') }}">Home <i class=""></i></a>

                                    </li>
                                    <li><a href="{{ url('/about') }}">About Us <i class=""></i></a>

                                    </li>
                                    <li><a href="{{ url('/opportunity') }}">The Opportunity <i class=""></i></a>

                                    </li>
                                    <li><a href="{{ url('/gallery') }}">Our People <i class=""></i></a>

                                    </li>
                                    <li><a href="{{ url('/process') }}">How It Works <i class=""></i></a>

                                    </li>
                                    <li><a href="{{ url('/contact') }}">Contact Us <i class=""></i></a>

                                    </li>
                                    <li class="visible-xs"><a href="{{ url('/signup') }}">Registration</a></li>
                                    <li class="visible-xs"><a href="{{ url('/login') }}">Login</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Start Search Box -->
                <nav class="mobile-menu">
                    <div class="container">
                        <div class="row"></div>
                    </div>
                </nav>
            </header>
            <!-- End Header -->
