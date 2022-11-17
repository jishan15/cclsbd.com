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
        <section id="subheader" class="page-news no-bottom">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>News</h1>
                            <div class="crumb">
                                <div>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>News</li>
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
                <div class="row">
                    <div class="col-md-8">
                        <div id="newslist" class="news-list row">
                            <div class="news-item style-2 item">
								
								<figure class="pic-hover">
									<span class="center-xy">
										<a class="popup-youtube" href="https://www.youtube.com/watch?v=OGgWneUreb0"><i class="fa fa-play btn-action btn-play"></i></a>
									</span>
									<span class="bg-overlay"></span>
									<img src="{{asset('frontend')}}/img/news/news_1.jpg" class="img-fluid" alt="">
								</figure>
								
                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_2.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_3.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_4.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_5.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_6.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_7.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>

                            <div class="news-item style-2 item">

                                <figure class="pic-hover">
                                        <span class="center-xy"></span>
                                        <span class="bg-overlay"></span>
                                        <img src="{{asset('frontend')}}/img/news/news_8.jpg" class="img-fluid" alt="">
                                    </figure>

                                <div class="inner">
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>

                                    <div class="desc">
                                        <a href="#">
                                            <h4>CML Consolidation & Logistics Services Ltd Says Happy New Years</h4>
                                        </a>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue... [read more]
											<br>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="clearfix"></div>

                        <div class="text-center ">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>
                        </div>

                    </div>



                    <div id="sidebar" class="col-md-4">
                        <div class="widget">
                            <input type="text" name="search" id="search" placeholder="search" class="form-control">
                        </div>

                        <div class="widget">
                            <h3>Categories</h3>

                            <ul class="cat-list">
                                <li><a href="#"><i class="fa fa-bookmark"></i>Company News</a></li>
                                <li><a href="#"><i class="fa fa-diamond"></i>Achievment</a></li>
                                <!-- <li><a href="#"><i class="fa fa-globe"></i>Trends</a></li> -->
                            </ul>
                        </div>

                        <div class="widget">
                            <h3>Latest Post</h3>

                            <ul class="news-list">
                                <li><a href="#"><i class="fa fa-newspaper-o"></i>CML Consolidation & Logistics Services Ltd Participates at The 4th Annual</a></li>
                                <li><a href="#"><i class="fa fa-newspaper-o"></i>CML Consolidation & Logistics Services Ltd Participates at The 4th Annual</a></li>
                                <li><a href="#"><i class="fa fa-newspaper-o"></i>CML Consolidation & Logistics Services Ltd Participates at The 4th Annual</a></li>
                            </ul>
                        </div>

                        <!-- widget tags -->
                        <div class="widget widget_tags">
                            <h3><span>Tags</span></h3>
                            <ul>
                                <li><a href="#link">business</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h3>Testimonials</h3>

                            <div id="testi-carousel-2" class="testi-slider wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <div class="item">
                                    <blockquote>
                                        CML Consolidation & Logistics Services Ltd people professional and courteous attitude, expert knowledge and patience handling our specific issues are very important to our customer

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="{{asset('frontend')}}/img/collection/profile/Ariful-Ahsan-MD-SCL.jpg" class="img-circle" alt="">
                                        <span class="name"><strong>Ariful Islam</strong>, Managing Director<br>
                                            CEO</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        Your representatives have very helpful attitude and their attention to detail help us to move our work smoothly without any delay...good job guys

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="{{asset('frontend')}}/img/collection/profile/Sororwar-Alam-Director-CCLS-min.jpg" class="img-circle rounded" alt="">
                                        <span class="name"><strong>Sorowar Alam</strong>, Director<br>
                                            Sea Freight</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        I'm really impressed by the professionalism that the CML Consolidation & Logistics Services Ltd relocation. Now we stay with our new studio at Metro city thanks CML Consolidation & Logistics Services Ltd

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="{{asset('frontend')}}/img/collection/profile/IMG_7229-web-min.jpg" class="img-circle" alt="">
                                        <span class="name"><strong>Azmain Bhuiyan</strong>, Director<br>
                                            Business Development</span>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
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
