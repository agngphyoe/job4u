<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-3 col-md-2">
                         <!-- Logo -->
                         <div class="logo">
                             <a href="index.html"><img src="{{ asset('assets2/img/logo/logo.png') }}" alt=""></a>
                         </div>  
                     </div>
                     <div class="col-lg-9 col-md-9">
                         <div class="menu-wrapper">
                             <!-- Main-menu -->
                             <div class="main-menu">
                                 <nav class="d-none d-lg-block">
                                     <ul id="navigation">
                                         <li><a href="{{ route('enduser.home') }}">Home</a></li>
                                         <li><a href="job_listing.html">Jobs </a></li>
                                         <li><a href="about.html">Job Categories</a></li>
                                         <li><a href="contact.html">Companies</a></li>
                                     </ul>
                                 </nav>
                             </div>          
                             <!-- Header-btn -->
                             <div class="header-btn d-none f-right d-lg-block">
                                @auth
                                    <h2>{{ Auth::guard('applicant')->user()}}</h2>
                                @endauth
                                @guest
                                    <a href="{{ route('enduser.register') }}" class="btn head-btn1">{{ Auth::guard('applicant')->user()->name }}</a>
                                    <a href="{{ route('enduser.login') }}" class="btn head-btn2">Login</a>
                                @endguest
                                 
                             </div>
                         </div>
                     </div>
                     <!-- Mobile Menu -->
                     <div class="col-12">
                         <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
    <!-- Header End -->
</header>