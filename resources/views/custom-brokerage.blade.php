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
                                    <li><a class="dropdown-item" href="{{ url('/air')}}"> Air Freight Forwarding</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/ocean')}}">Ocean Freight Forwarding</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/project-shipment')}}">Project Shipment</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/cargo-express')}}">Cargo Express</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/warehousing')}}">Warehousing</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/custom-brokerage')}}">custom-brokerage</a></li>
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
                                <a href="/">
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
                                        <li><a href="{{ url('/work')}}">OUR WORK</a>
                                        <li><a href="{{ url('/mission')}}">OUR MISSION</a>
                                        <li><a href="{{ url('/approch')}}">OUR APPROCH</a>
                                        <li><a href="{{ url('/executive')}}">EXECUTIVE TEAM</a>
                                        <li><a href="{{ url('/timeline')}}">TIMELINE</a>
                                        <li><a href="{{ url('/carriers')}}">CARRIERS</a>
                                        <li><a href="{{ url('/gellary')}}">GALLERY</a>
                                        <li><a href="{{ url('/awards')}}">AWARDS & CERTIFICATES</a>
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
                                        <li><a href="{{ url('/e_services') }}">WHAT IS E- SERVICES</a></li>
                                        <li><a href="{{ url('/easy')}}">EASY</a></li>
                                        <li><a href="{{ url('/connected')}}">STAY CONNECTED</a></li>
                                        <li><a href="{{ url('/workflow')}}">WORKFLOW</a></li>
                                        <li><a href="{{url('/visibility')}}">VISIBILITY</a></li>
                                        <li><a href="{{url('/business')}}">BUSINESS IQ</a></li>
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
                                        <li><a href="">ADVISORIES</a>
                                            <ul>
                                                <li><a href="{{ url('/general-advisories')}}">GENERAL ADVISORIES</a></li>
                                                <li><a href="{{ url('/international-advisories')}}">INTERNATIONAL ADVISORIES</a></li>
                                                <li><a href="{{ url('/holiday')}}">HOLIDAY NOTICES</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx">TRACKING CENTER</a></li>
                                        <li><a href="https://ccls.cargoaim.com/">BOOK A SHIPMENT</a></li>
                                        <li><a href="{{ url('/feedback')}}">GIVE US FEEDBACK</a></li> 
                                        </li>
                                    </ul>
                                </li>
                               
                                <li><a href="{{ url('/contact')}}">Contact</a></li>
                                <li><a href="#">Resource</a>
                                    <ul>
                                        <li><a href="{{ url('/dowonload')}}">DOWNLOAD</a></li>
                                        <li><a href="{{ url('/glossary')}}">GLOSSARY</a></li>
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
        <section id="subheader" class="page-service-6 no-bottom" data-stellar-background-ratio="0.5">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Custom Brokerage</h1>
                            <div class="crumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ url('/services')}}">Services</a></li>
                                    <li>Custom Brokerage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row text-dark">
                    <div class="col-md-8">

                        <h2>Custom Brokerage</h2>
                        <div class="divider-deco"><span></span></div>
                        <p><strong><i>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus</i></strong></p>
                        <p>
                            One of the most critical factors of any shipment is Customs Clearance. We have thorough and up to date knowledge of customs rules and regulations. This gives us an edge in helping Shippers, as well as consignees, receive their cargo at hand in the shortest possible time. 
                        </p>
                        <p>We have expert professionals who can help you with proper documentation, calculation of due Duties and Taxes, tracking the liquidation process, and be a proper bridge between you and the customs authority.</p>

                        <h4>Build a strong, predictable supply chain backed by Consolidation & Logistics Services Ltd???s years of experience in international Ocean Freight shipping</h4>
                        <ul>
                            <li>Put your time-sensitive cargo on the next available Ocean Freight.</li>
                            <li>Influence better rates by combining your shipments with others</li>
                            <li>Save money with conceded dispatching alternatives on your lower-need orders than can hold up a couple of days</li>
                            <li>Limit dealing with and potential harm for delicate shipments</li>
                            <li>Lessen stockroom stockpiling costs</li>
                            <li>Increase start to finish control and permeability over your flexible chain</li>
                        </ul>

                        <div class="divider"></div>
                    </div>
					
					<div class="col-md-4">
                        <div class="widget">
                            <ul class="side-nav">
                                <li><a href="{{ url('/services')}}">All Services</a></li>
                                <li ><a href="{{ url('/ocean-freight')}}">Ocean Freight</a></li>
                                <li><a href="{{ url('/air-freight')}}">Air Freight</a></li>
                                <li><a href="{{ url('/consolidation')}}">Consolidation</a></li>
                                <li><a href="{{ url('/p.o.management')}}">P.O.Management</a></li>
                                <li><a href="{{ url('/cargo-express')}}">Cargo Express</a></li>
                                <li><a href="{{ url('/project-shipment')}}">Project Shipment</a></li>
                                <li><a href="{{ url('/warehousing')}}">Warehousing</a></li>
                                <li class="active"><a href="{{ url('/custom-brokerage')}}">Custom Brokerage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>What services do freight forwarders provide and how can I find one?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Do I need an export license when making a private shipment?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>What can I do to prevent delays and ensure a smooth process of the shipment?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Any advice for a first time shipper?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Can you ship my vehicle internationally?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Do you have warehouse where I can drop off the cargo?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
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
                            CML Consolidation & Logistics Services Ltd???s Ocean Freight and Air Freight services are extended worldwide and equipped to accept any shipment on board whether FCL, LCL, Conventional & Out-Of-Gauge Cargo.
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
                                <li><a href="{{ url('/inland')}}">Inland Tracking</a></li>
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

<!-- Mirrored from www.exotheme.com/gocargo-recharge/service-details-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Sep 2022 07:54:29 GMT -->
</html>
