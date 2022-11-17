<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CML Consolidation & Logistics Services Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="{{asset('frontend')}}/css/main.css" rel="stylesheet" type="text/css">
</head>

<body style="font-family: nobel;">
    <div id="preloader"></div>
    <div id="top-section" style="background-color: #131313;" >
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg" style="background-color: #131313; margin-bottom: -15px; margin-top:-15px; ">
                    <div class="container">
                      
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto  mb-lg-0">
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Request A Quote
                                </a>
                                <ul class="dropdown-menu ">
                                  <li><a class="dropdown-item" href="#"> Air Freight Forwarding</a></li>
                                  <li><a class="dropdown-item" href="#">Ocean Freight Forwarding</a></li>
                                  <li><a class="dropdown-item" href="#">Project Shipment</a></li>
                                  <li><a class="dropdown-item" href="#">Cargo Express</a></li>
                                  <li><a class="dropdown-item" href="#">Warehousing</a></li>
                                  <li><a class="dropdown-item" href="#">custom-brokerage</a></li>
                                  <li><a class="dropdown-item" href="#">Corporate Transportation</a></li>
                                  <li><a class="dropdown-item" href="#">Goods Transportation</a></li>
                                </ul>
                              </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Online Tools
                            </a>
                            <ul class="dropdown-menu ">
                              <li><a class="dropdown-item" href="{{url('/login')}}">CML Login</a></li>
                              <li><a class="dropdown-item" href="{{url('/register')}}">CML SignUp</a></li>
                            </ul>
                          </li>
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
</div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>

                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="index.html">
                                    <img src="{{asset('frontend')}}/img/cml-logo.png" alt="" class="logo-1">
                                    <img src="{{asset('frontend')}}/img/cml-logo.png" alt="" class="logo-2">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <nav id="mainmenu-container" class="">
                            <ul id="mainmenu">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{url('/about')}}">About Us</a>
                                    <ul>
                                        <li><a href="#">OUR WORK</a>
                                        <li><a href="#">OUR MISSION</a>
                                        <li><a href="#">OUR APPROCH</a>
                                        <li><a href="{{ url('/executive')}}">EXECUTIVE TEAM</a>
                                        <li><a href="{{ url('/timeline')}}">TIMELINE</a>
                                        <li><a href="#">CARRIERS</a>
                                        <li><a href="{{ url('/gellary')}}">GALLERY</a>
                                        <li><a href="#">AWARDS & CERTIFICATES</a>
                                        <li><a href="{{ url('/testimonials')}}">TESTIMONIALS</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="{{ url('/services')}}">Services</a>
                                    <ul>
                                        <li><a href="{{ url('/ocean-freight')}}">GLOBAL OCEAN FREIGHT</a>
                                            <ul>
                                                <li><a href="{{ url('/ocean-freight/sea-export')}}">SEA EXPORT</a></li>
                                                <li><a href="{{ url('/ocean-freight/sea-import')}}">SEA IMPORT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/air-freight')}}">GLOBAL AIR FREIGHT</a>
                                            <ul>
                                                <li><a href="{{ url('/air-freight/air-export')}}">AIR EXPORT</a></li>
                                                <li><a href="/air-freight/air-import">AIR IMPORT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/consolidation')}}">CONSOLIDATION</a></li>
                                        <li><a href="{{ url('/p.o.management')}} ">P.O MANAGEMENT</a></li>
                                        <li><a href="{{ url('/warehousing')}} ">WAREHOUSING</a></li>
                                        <li><a href="{{ url('/inland-tracking')}}">INLAND TRACKING</a></li>
                                        <li><a href="{{ url('/custom-brokerage')}}">CUSTOM BROKERAGE</a></li>
                                        <li><a href="{{ url('/specialized')}}">SPECIALIZED SERVICES</a>
                                            <ul>
                                                <li><a href="{{ url('/specialized/door-delivery')}}">DOOR DELIVERY</a></li>
                                                <li><a href="{{ url('/specialized/Pharmaceutical')}}">PHARMACEUTICAL</a></li>
                                                <li><a href="{{ url('/specialized/seafood')}}">SEAFOOD</a></li>
                                                <li><a href="{{ url('/specialized/dggoods')}}">DG GOODS</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">E-Services</a>
                                    <ul>
                                        <li><a href="#">WHAT IS E- SERVICES</a></li>
                                        <li><a href="#">EASY</a></li>
                                        <li><a href="#">STAY CONNECTED</a></li>
                                        <li><a href="#">WORKFLOW</a></li>
                                        <li><a href="#">VISVIBILTY</a></li>
                                        <li><a href="#">BUSINESS IQ</a></li>
                                        <li><a href="#">GET STARTED</a>
                                            <ul>
                                                <li><a href="{{url('/login')}}">CUSTOMER LOGIN</a></li>
                                                <li><a href="{{url('/register')}}">CREATE AN A/C</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">Customer Tools</a>
                                    <ul>
                                        <li><a href="services.html">ADVISORIES</a>
                                            <ul>
                                                <li><a href="#">GENERAL ADVISORIES</a></li>
                                                <li><a href="#">INTERNATIONAL ADVISORIES</a></li>
                                                <li><a href="#">HOLIDAY NOTICES</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx">TRACKING CENTER</a></li>
                                        <li><a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx">BOOK A SHIPMENT</a></li>
                                        <li><a href="#">GIVE US FEEDBACK</a></li> 
                                        </li>
                                    </ul>
                                </li>
                               
                                <li><a href="{{ url('/contact')}}">Contact</a></li>
                                <li><a href="#">Resource</a>
                                    <ul>
                                        <li><a href="#">DOWNLOAD</a></li>
                                        <li><a href="#">GLOSSARY</a></li>
                                        <li><a href="{{url('/faq')}}">F.A.Q</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/news')}}">Newsroom</a></li>
                                
                                
                            </ul>
                        </nav>
                        <!-- mainmenu close -->
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>About Us</h1>
                            <div class="crumb">
                                <div>
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li>About Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">

            <!-- section begin -->
            <section id="section-intro-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <img src="{{asset('frontend')}}/img/home/imac.png" alt="" class="wow slideInUp"/>

                        </div>

                        <div class="col-md-6">
                            <h2>The Most Progressive Company</h2>
                            <p class="fw-bolder">CML CONSOLIDATION & LOGISTICS SERVICES LTD</p>
                            <div class="divider-deco"><span></span></div>
                            <p class="text-dark">
                                <h6>CML Consolidation & Logistics Services Ltd’s Ocean Freight and Air Freight services are extended worldwide and equipped to accept any shipment on board whether FCL, LCL, Conventional & Out-Of-Gauge Cargo. The companies are also capable to provide NVOCC services, worldwide forwarding & specially designed logistic services to the remote corner of the world, meeting the requirements of each individual customer. For Cargo receiving, storing, pre-carting and stuffing, we have an agreement with most of the off-dock (CFS operators) at Chittagong. We also handle shipments to/from Mongla Port, Pangoan and Dhaka ICD.</h6>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section class="bg-grey">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Mission &amp; Vision</h2>
                                    <div class="divider-deco"><span></span></div>
                                    <h4>Mission</h4>
                                   <p class="text-dark"> Finding innovative solutions and providing service 24/7 for customer(s) and agent(s) by having our team and setup globally by being part of every mile of customer’s supply chain needs.</p>
							
							<h4>Vision</h4>
                          <p class="text-dark"> To be a reputed and preferred name in the freight forwarding business by providing global logistics service having our own people, offices and infrastructure. </p>
                                </div>

                                <div class="col-md-6" >
                                    <h2>Quality Policy</h2>
                                    <div class="divider-deco"><span></span></div>
                                   <p class="text-dark"> The organizational goal of CML Consolidation & Logistics Services Ltd  (CCLS) is to be regarded as the premier freight forwarding company in Bangladesh providing customers and overseas partners with a reliable and cost effective logistic management services all under one roof.</p>
							<ul class="icon-list arrow" class="text-dark">
                                <li class="text-dark">Consistently provide services that exceed our customers’ needs and requirements.</li>
                                <li class="text-dark">Thoroughly understand the requirements and needs all our customers.</li>
                                <li class="text-dark">Look for new process improvements in all that we do.</li>
                                <li class="text-dark">Provide a safe, rewarding and supportive work environment.</li>
                            </ul>
                                </div>

                                <div class="divider-single"></div>

                                <div class="col-md-6">
                                    <h2>Our Objective</h2>
                                    <div class="divider-deco"><span></span></div>

                                    <ul class="icon-list arrow" >
                                        <li class="text-dark">We provide differentiated services that provide our clients with a competitive edge saving them both time and money.</li>
                                        <li class="text-dark">We value the relationships with our clients and therefore take time to understand their needs and craft innovative logistic solutions.</li>
                                        <li class="text-dark">We strive to provide to each of our clients with customized world class services.</li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h2>Our Values</h2>
                                    <div class="divider-deco"><span></span></div>
                                    <p class="text-dark">A freight forwarder is a full-service provider offering multiple levels of transportation and logistics services. It combines the assets of airlines, steamship lines, and trucking companies around the world to build remarkable service and price solutions for a variety of clients—even for individual customers or shipments.</p>
                                    <p class="text-dark">We aim at ensuring that we are responsible corporate citizens by supporting various sustainable projects.</p>


                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="padding20 light-text">
                                <div class="bg-2 padding30">

                                    <h2 class="id-color">CML Consolidation & Logistics Services Ltd</h2>
                                    <div class="tiny-border"></div>
                                    <p class="lead big">
                                        <i>We are commited to be the leading logistic solutions provider to our customer. We continually improving & implementing  a quality management to achieve it to achieve it</i>
                                    </p>
                                    <!-- <img src="img/about/signature.png" alt=""> -->
                                    <div class="divider-single"></div>
                                    <strong>Ariful Ahsan</strong><strong>, Managing Director</strong><br>
                                   <strong> CML Consolidation & Logistics Services Ltd 	</strong>			
								<br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                <img src="{{asset('frontend')}}/img/about/committment-image.png" class="img-custom-1" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- section begin -->
        <section id="section-bod" data-stellar-background-ratio="0.5" class="light-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Board of Directors</h2>
                        <div class="divider-deco"><span></span></div>
                    </div>

                    <!-- team profile -->
                    <div class="col-md-4 text-center">
                        <div class="bg1111111">
                            <div class="row">
                                <div class="col-md-6 pr0">
                                    <img src="{{asset('frontend')}}/img/collection/profile/Ariful-Ahsan-MD-SCL.jpg" alt="" class="img-fluid img-md-fluid" >
                                </div>
                                <div class="col-md-6">
                                    <div class="p20 pl10 pt30">
                                        <div class="id-color font2"><i>Ariful Ahsan,</i></div>
                                        <div class="font2 mb10 text-white"><i>Managing Director</i></div>
                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.
										
										<!-- social icons -->
                                        <div class="social hspace10 mt10">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <!-- social icons close -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- team profile -->
                    <div class="col-md-4 text-center">
                        <div class="bg1111111">
                            <div class="row">
                                <div class="col-md-6 pr0">
                                    <img src="{{asset('frontend')}}/img/collection/profile/Sororwar-Alam-Director-CCLS-min.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <div class="p20 pl10 pt30">
                                        <div class="id-color font2"><i>Sorowar Alam</i></div>
                                        <div class="font2 mb10 text-white"><i>Director, Sea Freight</i></div>
                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.
										
										<!-- social icons -->
                                        <div class="social hspace10 mt10">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <!-- social icons close -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- team profile -->
                    <div class="col-md-4 text-center">
                        <div class="bg1111111">
                            <div class="row">
                                <div class="col-md-6 pr0">
                                    <img src="{{asset('frontend')}}/img/collection/profile/IMG_7229-web-min.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <div class="p20 pl10 pt30">
                                        <div class="id-color font2"><i>Azmain Bhuiyan,</i></div>
                                        <div class="font2 mb10 text-white"><i>Director, Business Development</i></div>
                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.
										
										<!-- social icons -->
                                        <div class="social hspace10 mt10">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <!-- social icons close -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- section close -->

    </div>
    <!-- content close -->

    <!-- footer begin -->
    <footer class="sticky">
        <div class="container">
                 <div class="row">
                <div class="col-lg-4 text-white">
                    <h3>About Us</h3>
                        <img src="{{asset('frontend')}}/img/cml-logo.png" alt="" class="marginbottom20">
                        <div class="clearfix"></div>
                        CML Consolidation & Logistics Services Ltd’s Ocean Freight and Air Freight services are extended worldwide and equipped to accept any shipment on board whether FCL, LCL, Conventional & Out-Of-Gauge Cargo.
                        <br>
                        <a href="{{ url('/about')}}" class="btn-arrow id-color hover-light"><span class="line"></span><span class="url">View Details</span></a>
                </div>
                <div class="col-lg-3">
                    <h3>Services</h3>
                        <ul class="list-1-col">
                            <li><a href="{{url('/ocean-freight')}}">Global Ocean Freight</a></li>
                            <li><a href="{{url('/air-freight')}}">Global Air Freight</a></li>
                            <li><a href="{{ url('/consolidation')}}">Consolidation</a></li>
                            <li><a href="{{ url('/p.o.management')}}">P.O Management</a></li>
                            <li><a href="{{ url('/warehousing')}}">Warehousing</a></li>
                            <li><a href="{{ url('/inland-tracking')}}">Inland Tracking</a></li>
                            <li><a href="{{ url('/custom-brokerage')}}">Custom Brokerage</a></li>
                            <li><a href="{{ url('/specialized')}}">Specialized Services</a></li>
                        </ul>
                </div>
                <div class="col-lg-3">
                    <h3>E-Services</h3>
                        <ul class="list-1-col">
                            <li><a href="#">Search Schedule</a></li>
                            <li><a href="#">Track Shipment</a></li>
                            <li><a href="#">Request Quote</a></li>
                            <li><a href="#">Book Shipment</a></li>
                        </ul>
                </div>
                <div class="col-lg-2 justify-content-center">
                    <h3>Find Us On</h3>
                    <ul class="">
                        <li><i class="fa fa-facebook-square fs-4" aria-hidden="true"></i><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Facebook</a></li>
                        <li> <i class="fa fa-twitter-square fs-4"  aria-hidden="true"></i><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Twitter</a></li>
                        <li> <i class="fa fa-linkedin-square fs-4"  aria-hidden="true"></i><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="subfooter">
            <div class="row justify-content-center">
                <div class="col-lg-4 text-white text-wrap" style="font-size: 15px;">
                    &copy; Copyright 2022 - CML Consolidation & Logistics Services Ltd
                </div>
                <div class="col-lg-4 text-white" style="font-size: 15px;">
                    <ul class="list-group list-group-horizontal text-wrap">
                        <li>Contact Us</li>
                        <li>Terms of Service</li>
                        <li>Privacy Policy</li>
                        <li>FAQ</li>
                        <li>Quick Quotes</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->
    </div>

    <!-- LOAD JS FILES -->
    <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.isotope.min.js"></script>
    <script src="{{asset('frontend')}}/js/easing.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.ui.totop.js"></script>
    <script src="{{asset('frontend')}}/js/selectnav.html"></script>
    <script src="{{asset('frontend')}}/js/ender.js"></script>
    <script src="{{asset('frontend')}}/js/owl.carousel.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.fitvids.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.plugin.js"></script>
    <script src="{{asset('frontend')}}/js/wow.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend')}}/js/tweecool.js"></script>
    <script src="{{asset('frontend')}}/js/instafeed.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.stellar.js"></script>
    <script src="{{asset('frontend')}}/js/typed.js"></script>

    <!-- theme custom and plugin settings -->
    <script src="{{asset('frontend')}}/js/custom.js"></script>
    <script src="{{asset('frontend')}}/js/custom-tweecool.js"></script>
    <script src="{{asset('frontend')}}/js/custom-instafeed.js"></script>

</body>
</html>
