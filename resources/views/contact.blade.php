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
        <section id="subheader" class="page-contact no-bottom" data-stellar-background-ratio="0.5">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contact</h1>
                            <div class="crumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ url('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->



        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section>

                <div class="container mb-5">
                  <div class="expand-box location">
                        <div class="inner">
                            <div class="row">
                                <div class="col-lg-2">
                                    Head Office
                                <h3>Dhaka-1205,<br>
                                    BANGLADESH</h3>
                                </div>
                                <div class="col-lg-4">
                                    <h5>Address</h5>
                                    69/1,Bir Uttam Qazi Nuruzzaman Road Panthapath,11B,Chandrashila Suvastu Tower,Dhaka-1205<br>
                                    <span class="btn-arrow btn-open-map"><span class="line"></span><span class="url" >View on Map</span></span>
                                </div>
                                <div class="col-lg-2">
                                    <h5>Phone</h5>
                                        +88 01813 333 458<br>
                                        02-333317430
                                </div>
                                <div class="col-md-2">
                                    <h5>Email</h5>
                                    support@cclsbd.com
                                </div>
                                <div class="col-lg-2">
                                    <h5>Social Media</h5>
                                    <!-- social icons-->
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </div>
                                    <!-- social icons close -->
                                </div>
        
                                <div class="map-container">
                                    <div id="map-1 ">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.913021456129!2d90.38548571478408!3d23.750480884589294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a4cd517069%3A0x53d156af30dafcc0!2se.Gen%20Consultants%20Ltd.!5e0!3m2!1sen!2sbd!4v1666762142133!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>

                  <div class="exoand-box location">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-2">
                                CHATTOGRAM OFFICE
                                <h3>Chattogram- 4100<br>
                                    BANGLADESH</h3>
                            </div>
                            <div class="col-lg-4">
                                <h5>Address</h5>
                                      Shafi Bhaban (2nd Floor) 1216/A, SK. Mujib Road Chattogram- 4100, Bangladesh<br>
                                     <span class="btn-arrow btn-open-map"><span class="line"></span><span class="url">View on Map</span><span>
                            </div>
                            <div class="col-lg-2">
                                <h5>Phone</h5>
                                +880 1711 360 311
                            </div>
                            <div class="col-md-2">
                                <h5>Email</h5>
                                operation@cclsbd.com
                            </div>
                            <div class="col-lg-2">
                                <h5>Social Media</h5>
                                <!-- social icons-->
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                                <!-- social icons close -->
                            </div>
    
                            <div class="map-container">
                                <div id="map-2 ">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.8178097253917!2d91.8097249147557!3d22.322729085311884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdf9dc8691c3f%3A0x4e977b541ad2ff5e!2sDahNAY%20Logistics%20Bangladesh!5e0!3m2!1sen!2sbd!4v1666768055973!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                    </div>
                    </div>
                  </div>
                    

            </section>

            <section id="section-contact-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="light-text">
                                <div class="bg-2 padding30">

                                    <h2 class="id-color">CML Consolidation & Logistics Services Ltd Commitment</h2>
                                    <div class="tiny-border"></div>
                                    <p class="lead big">
                                        <i>Fell free to asking about <span style="color: #eabb49;">CML Consolidation & Logistics Services Ltd</span> or Just say hello to us </i>
                                    </p>
                                    <div class="text-center">
                                        <img src="{{ asset('frontend')}}/img/contact/truck.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <form  class="row form-transparent"  method="POST" action="{{Route('contact')}}">
                                @if ($errors->any())
                              <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                        @endforeach
                                 </ul>
                                </div>
                                @endif
                                @csrf
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name"  placeholder="First Name*" /></div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name"  placeholder="Last Name*" /></div>

                                <div class="col-md-6">
                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="email"  placeholder="Email*" />
                                </div>

                                <div class="col-md-6">
                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="phone"  placeholder="Phone*" />
                                </div>

                                <div class="col-md-12">
                                    <div id="error_message" class="error">Please check your message</div>
                                    <textarea cols="10" rows="10" name="message"  class="form-control" placeholder="Your message"></textarea>
                                </div>

                                <div id="mail_success" class="col-md-12 success">Thank you. Your message has been sent.</div>
                                <div id="mail_failed" class="col-md-12 error">Error, email not sent</div>

                                <div class="col-md-12">
                                    <p id="btnsubmit">
                                        <input type="submit"  value="Send" class="btn btn-custom fullwidth"/>
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>

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
    <script src="{{asset('frontend')}}/js/contact.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="{{asset('frontend')}}/js/map-1.js"></script>
    <script src="{{asset('frontend')}}/js/map-2.js"></script>
    <script src="{{asset('frontend')}}/js/map-3.js"></script>

</body>
</html>
