<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CML Consolidation & Logistics Services Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="https://fonts.cdnfonts.com/css/nobel" rel="stylesheet">
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
               
                <div class="row mx-auto" style="margin-top:-10px;">
                    
                    <div class="col-lg-3">

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

                    <div class="col-lg-9">

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
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-padding ">

            <!-- section begin -->
            <section id="section-welcome" class="no-padding autoheight light-white">
                <div class="center-y">
                    <div class="inner">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <h1 class="text-ultra-big wow fadeInRight" data-wow-duration="1.5s">
                                        <span class="id-color">We are the leading</span><br>
                                        WORLDWIDE<br>
                                        FREIGHT FORWARD</h1>
                                        
                                        <a href="http://www.cclsbd.freightquotesglb.online/" class="btn btn-custom wow fadeInUp rounded" data-wow-duration="5s">Get Instant Quote</a>
                                </div>
                                <div class="divider-double"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <section class="no-padding mt-90 height90px bg111111 " aria-label="info-box" >
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 info-box paddind20 p-3">
                            <i class="fa fa-clock-o"></i>
                                <div class="info-box_text">
                                    <div class="info-box_title">Opening Times</div>
                                    <div class="info-box_subtite">24/7</div>
                                </div>
                        </div>
                        <div class="col-lg-6 info-box paddind20 p-3">
                            <i class="fa fa-home"></i>
                                <div class="info-box_text">
                                    <div class="info-box_title">Our Location</div>
                                    <div class="info-box_subtite">69/1,Bir Uttam Qazi Nuruzzaman Road Panthapath,11B,Chandrashila Suvastu Tower,Dhaka-1205</div>
                                </div>
                        </div>
                        <div class="col-lg-3 info-box paddind20 p-3">
                            <i class="fa fa-phone"></i>
                                <div class="info-box_text">
                                    <div class="info-box_title">Our Phone</div>
                                    <div class="info-box_subtite">+880 1813 333458<br>
                                        02-333317430
                                    </div>
                                       
                                   </div>
                                </div>
                        </div>
                    </div>
                    </div>
            </section>

            <!-- section begin -->
            <section class="no-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>Ocean Freight</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/services/1.png" class="img-fluid margintop20 marginbottom20 wow fadeInRight" alt="" style="height: 90px; width:100%;"/>
                                <p class="" style="font-size: 18px;">Ocean freight is the method of transporting goods through the sea. It is an important part of cross-border trade that lets people move massive amounts of goods between countries.</p>
                                <a href="{{ url('/ocean-freight')}}" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>Air Freight</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}/img/collection/air/Air-Freightone-removebg-preview.png" class="img-fluid margintop20 marginbottom20 wow fadeInRight" data-wow-delay=".3s" alt="" style="height: 90px; width:100%;"/>
                            <p style="font-size: 18px;">Air freight parcel delivery is the transfer and shipment of goods via an air carrier, which may be charter or commercial. Such shipments travel out of commercial and passenger aviation gateways to anywhere planes can fly and land.</p>
                            <a href="{{ url('/air-freight')}}" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>Project Shipment</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}/img/services/3.png" class="img-fluid margintop20 marginbottom20 wow fadeInRight" data-wow-delay=".6s" alt="" style="height: 90px; width:100%;"/>
                            <p style="font-size: 18px;">Project shipment The request of the owner of the goods to transport cargo that is based on the weight, volume,size and time of transfer by special trucks of transport companies and receiving a special pass is called project load.</p>
                            <a href="{{ url('project-shipment')}}" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>Cargo Express</h3>
                                <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/services/4.png" class="img-fluid margintop20 marginbottom20 wow fadeInRight" data-wow-delay=".9s" alt="" style="height: 90px; width:100%;"/>
                                <p style="font-size: 18px;">Cargo Express Trailers, we are focused on being the best rather than the biggest.It’s easy to see why Cargo Express makes the best value-driven, high-quality cargo utility trailers.</p>
                                <a href="{{ url('/cargo-express')}}" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-intro-bg" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="light-text">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3s">
                                        <h2>The Most Progressive Company</h2>
                                        <div class="divider-deco"><span></span></div>
                                        <p class="lead">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3><span class="id-color">Vision</span></h3>
                                                <p>
                                                    To be a reputed and preferred name in the freight forwarding business by providing global logistics service having our own people, offices and infrastructure<br><br>
                                                    <a href="#" class="btn btn-custom">Read More</a>
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h3><span class="id-color">Mission</span></h3>
                                                <p>
                                                    Finding innovative solutions and providing service 24/7 for customer(s) and agent(s) by having our team and setup globally by being part of every mile of customer’s supply chain needs<br><br>
                                                     <a href="#" class="btn btn-custom">Read More</a>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- section close -->



            <!-- section begin -->
            <section id="section-track" class="no-padding light-text alt">
                <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-4  bg-color-fx padding-5 text-center">
                            <h3>TRACK A SHIPMENT</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}/img/online-tracking-01-min.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight " data-wow-delay=".3s" alt=""  style="height: 150px;  width: 100%;"/>
                            <p>Finding your freight fast</p>
                            <a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx" class="btn-arrow hover-light"><span class="line"></span><span class="url">TRACK A SHIPMENT</span></a>
                        </div>
                        <div class="col-lg-4   bg-color-fx padding-5 text-center">
                            <h3>BOOK YOUR SHIPMENT</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}/img/air-sea.png" class="img-fluid margintop20 marginbottom20 wow fadeInRight " data-wow-delay=".6s" alt=""  style="height: 150px;  width: 100%;"/>
                            <p>Book your shipments today</p>
                            <a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx" class="btn-arrow hover-light"><span class="line"></span><span class="url">BOOK NOW</span></a>
                        </div>
                        <div class="col-lg-4  bg-color-fx padding-5 text-center">
                            <h3>BERTHING REPORT</h3>
                                <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/dominik-luckmann-SInhLTQouEk-unsplash-resize-min-1024x660.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight " data-wow-delay=".9s" alt="" style="height: 150px;  width: 100%;" />
                                <p>Get your vessel berthing report</p>
                                <a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx" class="btn-arrow hover-light"><span class="line"></span><span class="url">BERTHING REPORT</span></a>
                        </div>
                       
                    </div>


                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="" class="">
                <!-- section-tracking-result -->
                <!-- light-text no-margin -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 justify-content-center">
                            <h2 class="text-center glow1">Our Services</h2>
                           <div class="line mx-auto" style="height:4px; width:150px; background-color:#d21362;"></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>AIR FREIGHT</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/AIR FREIGHT.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" alt="" style="height: 150px; width: 100%;"/>
                                <a href="{{ url('/air-freight')}}" class="btn btn-outline-info "><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>SEA FREIGHT</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}/img/SEA FREIGHT.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" data-wow-delay=".3s" alt="" style="height: 150px;  width: 100%;"/>
                            <a href="{{url('/ocean-freight')}}" class="btn btn-outline-info "><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>CONSOLIDATION</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}/img/collection/consolidation/ICTSI_-MICT-1-1-1024x576.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" data-wow-delay=".6s" alt=""  style="height: 150px; width: 100%;"/>
                            <a href="{{ url('/consolidation')}}" class="btn btn-outline-info"><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>P. O. MANAGEMENT</h3>
                                <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/collection/purchase order managment/bigstock-Businessman-Manager-Using-Tabl-256679902-e1552510417779.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" data-wow-delay=".9s" alt="" style="height: 150px;  width: 100%;"/>
                               
                                <a href="{{ url('/p.o.management')}}" class="btn btn-outline-info"><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                       
                    </div>  
                    <div class="row mt-3">
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>WAREHOUSING</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/collection/warehousing/one.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" alt="" style="height: 150px;  width: 100%;"/>
                                <a href="{{ url('/warehousing')}} " class="btn btn-outline-info"><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>INLAND TRACKING</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}\img\collection\INLAND TRACKING\semi-trailers-534577_1280-1080x675.jpeg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" data-wow-delay=".3s" alt="" style="height: 150px; width: 100%;"/>
                            <a href="{{url('/inland-tracking')}}" class="btn btn-outline-info"><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>CUSTOMS BROKERAGE</h3>
                            <div class="tiny-border margintop10 marginbottom10"></div>
                            <img src="{{asset('frontend')}}\img\collection\Custom Brokerage\Need-Custom-Broker-1.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" data-wow-delay=".6s" alt="" style="height: 150px;  width: 100%;"/>
                            <a href="{{ url('/custom-brokerage')}}" class="btn btn-outline-info"><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-md-6 bg-color-fx padding-5 text-center">
                            <h3>24/7 ONLINE TRACKING</h3>
                                <div class="tiny-border margintop10 marginbottom10"></div>
                                <img src="{{asset('frontend')}}/img/online-tracking-01-min.jpg" class="img-fluid margintop20 marginbottom20 wow fadeInRight rounded-3" data-wow-delay=".9s" alt="" style="height: 150px;  width: 100%;"/>
                               
                                <a href="" class="btn btn-outline-info"><span class="line"></span><span class="url">Read More</span></a>
                        </div>
                       
                    </div>  
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-center info-box1 p-2">
                                <i class="fa fa-laptop"></i>
                                <div class="card-body">
                                    <h2>LATEST TECHNOLOGY</h2>
                                    <p class="text-wrap">The Logistics industry makes good use of innovative technology for a better future. Faced with the challenges and opportunities of the digital age, it is imperative for enterprises, especially small and medium-sized enterprises, to make good use of innovation and technology.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center info-box1 p-2">
                                <i class="fa fa-umbrella"></i>
                                
                                <div class="card-body">
                                    <h2>SAFE IN INSURED</h2>
                                    <p class="text-wrap">The Logistics industry makes good use of innovative technology for a better future. Faced with the challenges and opportunities of the digital age, it is imperative for enterprises, especially small and medium-sized enterprises, to make good use of innovation and technology.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center info-box1 p-2">
                                <i class="fa fa-laptop"></i>
                                <div class="card-body">
                                    <h2>TIMELY DELIVERY</h2>
                                    <p class="text-wrap">The Logistics industry makes good use of innovative technology for a better future. Faced with the challenges and opportunities of the digital age, it is imperative for enterprises, especially small and medium-sized enterprises, to make good use of innovation and technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            
            <!-- section begin -->
            <section id="" class="">
                <div class="container">
                   <div class="row mb-4">
                        <div class="col-lg-12">
                            <h2 class="text-center">TRACKING FREIGHT</h2>
                                <div class="line mx-auto" style="height:4px; width:300px; background-color:#d21362;"></div>
                        </div>
                   </div>
                   <div class="row mt-3">
                    <div class="col-lg-6 p-3">
                        <img src="{{asset('frontend')}}/img/tracking freight.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 p-2 mt-3 p-sm-3">
                       <p> A Track & Trace solution provides a web based tracking functionality that allows for easy tracking of the status of goods, orders or shipments in real time. Irrespective of whether you are an overseas agent, freight forwarder or warehouse operator, a track & trace module gives you & your client access to the information required whenever & wherever it’s required.</p>

                       <h4>CargoWise One</h4>
                       <p>CargoWise One developed by WiseTech Global has a robust web-based tracking facility that allows you to track the status of shipments or orders quickly with ease in real time.</p>
                       <a href="https://scddac.webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx" class="btn btn-lg btn-primary mt-3" style="background-color: #d21362;">
                        TRACK NOW</a>
                    </div>
                   </div>
                </div>
            </section>
            <!-- section close -->

             
            <!-- section begin -->
            <section id="" class="">
                <div class="container-fluid bg-light ">
                   <div class="row mb-4">
                        <div class="col-lg-12">
                            <h2 class="text-center">OUR CLIENTS</h2>
                                <div class="line mx-auto" style="height:4px; width:150px; background-color:#d21362;"></div>
                        </div>
                   </div>
                   <div class="row mt-3 justify-content-center ">
                  <div class="col-lg-2 col-sm-4">
                        <img src="{{asset('frontend')}}/img/clients/Logo-BG-Products-min.png" alt="" class="img-fluid rounded bg-info" >
                  </div>
                  <div class="col-lg-2 col-sm-4">
                    <img src="{{asset('frontend')}}/img/clients/Logo-JCPenny-min.png" alt="" class="img-fluid rounded"  >
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <img src="{{asset('frontend')}}/img/clients/Logo-Kmart-min.png" alt="" class="img-fluid rounded" >
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <img src="{{asset('frontend')}}/img/clients/Logo-Latoplast-min.png" alt="" class="img-fluid rounded" >
                     </div>
                    <div class="col-lg-2 col-sm-4">
                        <img src="{{asset('frontend')}}/img/clients/logo-McCordick-min.png" alt="" class="img-fluid rounded" >
                    </div>
                     </div>
                     
                     <div class="row mt-3 justify-content-center">
                        <div class="col-lg-2 col-sm-4">
                              <img src="{{asset('frontend')}}/img/clients/Logo-Tesco-min.png" alt="" class="img-fluid rounded" >
                        </div>
                        <div class="col-lg-2 col-sm-4">
                          <img src="{{asset('frontend')}}/img/clients/Logo-VF-min.png" alt="" class="img-fluid rounded" >
                          </div>
                          <div class="col-lg-2 col-sm-4">
                              <img src="{{asset('frontend')}}/img/clients/Logo-Walmart-min.png" alt="" class="img-fluid rounded" >
                          </div>
                          <div class="col-lg-2 col-sm-4">
                              <img src="{{asset('frontend')}}/img/clients/Logo-youngone-min.png" alt="" class="img-fluid rounded" >
                           </div>
                          <div class="col-lg-2 col-sm-4">
                              <img src="{{asset('frontend')}}/img/clients/Logo-zara-min.png" alt="" class="img-fluid rounded" >
                          </div>
                           </div>
                           
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-news" class="side-bg">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                            <h2>Company News</h2>
                            <div class="divider-deco"><span></span></div>

                            <div class="row">
                                <div class="col-md-4 news-item style-2">

                                    <figure class="pic-hover">
                                        <span class="center-xy">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=dyRn-XQLzm4"><i class="fa fa-play btn-action btn-play"></i></a>
                                        </span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_1.jpg" class="img-fluid" alt="">
                                    </figure>

                                    <div class="inner">
                                        <div class="date">
                                            <span class="day">20</span>
                                            <span class="month">Aug</span>
                                        </div>

                                        <div class="desc">
                                            <a href="#">
                                                <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                            </a>
                                            Etiam pharetra, erat sed fermentum feugiat, velit mauris egest...
											<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 news-item style-2">

                                    <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_2.jpg" class="img-fluid" alt="">
                                    </figure>

                                    <div class="inner">
                                        <div class="date">
                                            <span class="day">18</span>
                                            <span class="month">Aug</span>
                                        </div>

                                        <div class="desc">
                                            <a href="#">
                                                <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                            </a>
                                            Etiam pharetra, erat sed fermentum feugiat, velit mauris egest...
											<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 news-item style-2">

                                    <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_3.jpg" class="img-fluid" alt="">
                                    </figure>

                                    <div class="inner">
                                        <div class="date">
                                            <span class="day">10</span>
                                            <span class="month">Aug</span>
                                        </div>

                                        <div class="desc">
                                            <a href="#">
                                                <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                            </a>
                                            Etiam pharetra, erat sed fermentum feugiat, velit mauris egest...
											<br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="clearfix"></div>

                </div>
            </section>

            <!-- section begin -->
            <section id="section-cta-2" class="cta light-text" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="padding30 overlaydark80 wow fadeIn">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h2 class="mb0 mt10">Contact us now to get quote for all your global shipping needs</h2>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <a href="{{ url('/contact')}}" class="btn btn-custom">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

        </div>
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
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.js"></script>
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
    <script src="{{asset('frontend')}}/js/jquery.stellar.js"></script>
    <script src="{{asset('frontend')}}/js/typed.js"></script>

    <!-- theme custom and plugin settings -->
    <script src="{{asset('frontend')}}/js/custom.js"></script>
    <script src="{{asset('frontend')}}/js/custom-tweecool.js"></script>
</body>
</html>
