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
                                        <li><a href="">ADVISORIES</a>
                                            <ul>
                                                <li><a href="{{ url('/general-advisories')}}">GENERAL ADVISORIES</a></li>
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
        <section id="subheader" class="page-news no-bottom">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> International ADVISORIES</h1>
                            <div class="crumb">
                                <div>
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li class="active"><a href="{{ url('/international-advisories')}}">International Advisories</a></li>
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
        <div id="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2>International Advisories</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($internationalAdvisories as $internationalAdvisories)
                    <div class="col-lg-4">
                        <div class="card"  style="height: 500px;">
                            <img src="{{asset('uploads/international/'.$internationalAdvisories->image)}}" alt="" srcset="">
                            <div class="card-body">
                                <h4>{{$internationalAdvisories->title}}</h4>
                                <p>{{$internationalAdvisories->sub_title}}</p>
                            </div>
                            <div class="card-footer">
                                <p>{{$internationalAdvisories->created_at}}</p>
                            </div>
                        </div>
                       </div>
                    @endforeach
                   
                   
                </div>

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

<!-- Mirrored from www.exotheme.com/gocargo-recharge/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Sep 2022 07:46:38 GMT -->
</html>