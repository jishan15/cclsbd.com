<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('backend')}}/images\Logo_CCLS-4.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('backend')}}/images\Logo_CCLS-4.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                   <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li><!-- .nk-menu-item -->
                    
                    <!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Newsroom</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('newsroom.index')}}" class="nk-menu-link"><span class="nk-menu-text">All news</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('newsroom.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create News</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Contact</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('contact.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Contact</span></a>
                            </li>
                           
                           
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Timeline</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('timeline.index')}}" class="nk-menu-link"><span class="nk-menu-text">All timeline</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('timeline.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create timeline</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Testominals</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('testimonal.index')}}" class="nk-menu-link"><span class="nk-menu-text">All  Testominals</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('testimonal.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create Testominals</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">News for executive</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('executive.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Latest News</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('executive.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create Latest News</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">News for Timeline</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('newstimeline.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Latest News</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('newstimeline.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create Latest News</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">News for Testominals</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('newtestimonals.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Latest News</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('newtestimonals.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create Latest News</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">General Advisories</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('generalAdvisories.index')}}" class="nk-menu-link"><span class="nk-menu-text">All General Advisories</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('generalAdvisories.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create General Advisories</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">International Advisories</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('internationalAdvisories.index')}}" class="nk-menu-link"><span class="nk-menu-text">All International Advisories</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('internationalAdvisories.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create International Advisories</span></a>
                            </li>
                           
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    
                    
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>