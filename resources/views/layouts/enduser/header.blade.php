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
                                         <li><a href="{{ route('enduser.allJobs') }}">Jobs</a></li>
                                         <li><a href="{{ route('enduser.jobByCategories') }}">Job Categories</a></li>
                                         <li><a href="{{ route('enduser.companies') }}">Companies</a></li>
                                     </ul>
                                 </nav>
                             </div>          
                             <!-- Header-btn -->
                             <div class="header-btn d-none f-right d-lg-block">
                                @auth('applicant')
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::guard('applicant')->user()->name }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Profile</a>
                                      <a type="button" href="javascript::void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown-item">
                                            Logout
                                      </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                  </div>
                                @endauth
                                @guest('applicant')
                                    <a href="{{ route('enduser.register') }}" class="btn head-btn1">Register</a>
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