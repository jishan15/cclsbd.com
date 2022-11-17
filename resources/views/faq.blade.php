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
                            <h1>FAQ</h1>
                            <div class="crumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">Resource</a></li>
                                    <li>FAQ</li>
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
                <div class="row mb-4">
                    <div class="col-lg-12 justify-content-center">
                        <h2 class="text-center glow">Frequently Asked Questions</h2>
                       <div class="line mx-auto" style="height:4px; width:250px; background-color:#a7b716;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="divider-single"></div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHAT IS A FREIGHT FORWARDER OR FREIGHT FORWARDING COMPANY?</h4>
                            </div>

                            <div class="hide-content">
                                CML Consolidation and Logistics LTD is a freight forwarder or freight forwarding company used by businesses to arrange and handle the movement of domestic and international Air, Ocean or Ground shipments from point of origin to point of destination, as well as, to assist importers and exporters to transport their commercial goods from one international location to another. CML Consolidation and Logistics LTD ensures that goods arrive at the right location, on-time and on budget, by acting as an intermediary to ensure cooperation between the customer and all involved airlines and carriers. Core responsibilities are to identify the best routes, advise on various modes of transport, as well as, to negotiate freight rates with the airlines and carriers to move cargo economically, via the best shipment points.
                            </div>
                        </div>
                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHAT ARE THE ADVANTAGES OF USING A FREIGHT FORWARDER?</h4>
                            </div>

                            <div class="hide-content">
                                <p>A Freight Forwarder handles ancillary services that are part of the international shipping business</p>
                                <ul>
                                    <li> Insurance</li>
                                    <li> Customs Documentation</li>
                                    <li>  etc…</li>
                                </ul>
                                A Freight Forwarder provides to consolidators as well as individual shippers:
                                <ul>
                                    <li> Non-Vessel Operating  Common Carrier documentation</li>
                                    <li>  Bills of Lading</li>
                                    <li>  Warehousing</li>
                                    <li> Risk Assessment and Management</li>
                                    <li> Methods of International Payment</li>
                                </ul>
                                <p>A Freight Forwarder insists on personal communication and great customer service.</p>
                                <p> A good freight forwarding service can save the client untold time and potential headaches while providing reliable transportation of products at competitive rates. A freight forwarding service is an asset to almost any company dealing in international transportation of goods, and is especially helpful when in-house resources are not versed in international shipping procedures.</p>
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHAT ARE DANGEROUS GOODS?</h4>
                            </div>

                            <div class="hide-content">
                                Dangerous goods are solids, liquids or gases that are flammable, explosive or toxic to people, other living organisms, property or the environment. Manufacturers, shippers and transporters MUST know what they are shipping and properly identify, classify, pack, mark, label and document according to Transport Canada’s dangerous goods regulations. 
                                <p>The 9 dangerous goods classes are: </p>
                                <ol>
                                    <li>Explosives</li>
                                    <li>Gases</li>
                                    <li>Flammable Liquids</li>
                                    <li>Flammable Solids</li>
                                    <li>Oxidizing Substances and Organic Peroxides</li>
                                    <li>Poisonous and Infectious Substances</li>
                                    <li>Radioactive Materials</li>
                                    <li>Corrosives</li>
                                    <li>Miscellaneous Products or Substances</li>
                                </ol>
                                Contact Cargo Spectrum for more information on Dangerous Goods.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHAT IS THE VERIFIED GROSS MASS (VGM) CONTAINER WEIGHT REQUIREMENT?</h4>
                            </div>

                            <div class="hide-content">
                                <p>The International Maritime Organization (IMO), announced the Verified Gross Mass (VGM) requirements under the amendments to chapter VI of the International Convention for the Safety of Life at Sea (SOLAS), will become mandatory on July 1st, 2016.</p>

                               <p> SOLAS is an IMO (a United Nations specialized agency) treaty & generally regarded as the most important of all international maritime treaties concerning the safety & security of shipping & the prevention of marine pollution.</p>
                                
                                <p>Effective from July 1st, 2016, ocean carrier vessel operators & port terminal representatives in approximately 170 countries, will be prohibited from loading cargo shipping containers aboard a vessel for export, if the container’s gross mass has not been verified.</p>
                                
                                <p>Shippers are responsible for providing mandatory verification of the VGM for all packed cargo shipping containers, prior to tendering cargo & loading on a vessel. IMO guidelines state the Shipper is the entity or person named on the bill of lading or sea waybill. The Shipper is responsible for accurately recording, duly signing & authorizing the VGM data on the shipment documents & providing to ocean carrier vessel operators & port terminal representatives, for use in the ship stowage plans. The weighing must be done after stuffing & securing of containerized cargo in one of two approved ways as follows:</p>
                                
                               <ul>
                                <li> Method #1: After packing & sealing a container, the Shipper may weigh or arrange a third party to weigh the packed container using calibrated & certified equipment.</li>
                                <li>Method #2: The shipper or a third party may weigh all packages & cargo items, including the mass of pallets & other packing material securing the cargo in the shipping container, by adding the tare mass of the container to the mass sum of the cargo, using a certified method as outlined by the IMO. Any third party that has performed some or all of the packing of the container should inform the Shipper of the mass of the cargo items & packing materials that the party has packed into the container in order to facilitate the Shipper’s verification of the gross mass of the packed container.
                                </li>
                               </ul>
                               <p>  Estimating weights of the contents of the container & adding those weights to the container’s tare weight is not permitted. Shippers cannot use weights for any cargo in a container that someone else has provided, with the exception of original, sealed packages printed with the accurate mass of the cargo items, marked by the manufacturer directly on the original packaging.</p>
                                
                               
                               <p> Ocean carriers have advised to use the weight given on the container, unless they have provided another method for Shippers to verify the actual tare weight for each container. It is important to note that some empty container tare weights printed on the side of the container could be incorrect, due to containers often having to be repaired or reinforced using metal.</p>   
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHO IS RESPONSIBLE TO PROVIDE A VERIFIED GROSS MASS?</h4>
                            </div>

                            <div class="hide-content">
                                The regulation clearly stipulates that the shipper is responsible, being further defined as the shipper noted on the Bill of Lading (B/L). Since this can also be the freight forwarder, clear agreements as to the responsibility should be made between the parties involved. In the case of a consolidation, only the consolidator, which is not the original shipper, is in the position to provide the final weight.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHEN IS AN ORIGINAL BILL OF LADING (B/L) SURRENDERED?</h4>
                            </div>

                            <div class="hide-content">
                                In most cases an OB/L is required to be surrendered on arrival and prior to shipment release. The seller has the option of requesting an “express bill of lading” which will allow for the release of the cargo without the original bill of lading. All parties involved, i.e. buyer, seller and carrier should have a copy of the OB/L. The only way to release the shipment is to present the OB/L or have the OB/L express released.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>WHAT DOES ‘INCOTERMS’ MEAN?</h4>
                            </div>

                            <div class="hide-content">
                                Incoterms, short for ‘International Commercial Terms’, is a set of sales terms defined by the International Chamber of Commerce (ICC). They are widely used as a standard for international trade because they clarify the responsibilities between buyer and seller.
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
</html>
