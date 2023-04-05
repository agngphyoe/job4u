<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="@if (Route::is('dashboard')) mm-active @endif">
                    <a href="{{ route('dashboard') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>Dashboard
                    </a>
                </li>
                
                <li class="app-sidebar__heading">Companies</li>
                <li class="@if (Route::is('companies.index')) mm-active @endif">
                    <a href="{{ route('companies.index') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>Registered Companies
                    </a>
                </li>
                <li class="@if (Route::is('companies.create')) mm-active @endif">
                    <a href="{{ route('companies.create') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>Create Company
                    </a>
                </li>

                <li class="app-sidebar__heading">Job Categories</li>
                <li class="@if (Route::is('categories.index')) mm-active @endif">
                    <a href="{{ route('categories.index') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>List
                    </a>
                </li>
                <li class="@if (Route::is('categories.create')) mm-active @endif">
                    <a href="{{ route('categories.create') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>Create
                    </a>
                </li>

                <li class="app-sidebar__heading">Job Posts</li>
                <li class="@if (Route::is('jobposts.index')) mm-active @endif">
                    <a href="{{ route('jobposts.index') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>List
                    </a>
                </li>
                <li class="@if (Route::is('jobposts.create')) mm-active @endif">
                    <a href="{{ route('jobposts.create') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>Create
                    </a>
                </li>

                <li class="app-sidebar__heading">Applicants</li>
                <li class="@if (Route::is('applicants.index')) mm-active @endif">
                    <a href="{{ route("applicants.index") }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>List
                    </a>
                </li>

                <li class="app-sidebar__heading">Users</li>
                <li class="@if (Route::is('users.index')) mm-active @endif">
                    <a href="{{ route('users.index') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>List
                    </a>
                </li>
                <li class="@if (Route::is('users.create')) mm-active @endif">
                    <a href="{{ route('users.create') }}">
                        <i class="metismenu-icon pe-7s-graph">
                        </i>Create
                    </a>
                </li>
            <ul>
        </div>
    </div>
</div> 