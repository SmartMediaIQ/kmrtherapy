<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <div class="navbar-brand-box">
                <a href="/dashboard" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/smartinsuranceiq_favicon.png') }}" alt="" height="18">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="40">
                    </span>
                </a>

                <a href="/dashboard" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/smartinsuranceiq_favicon.png') }}" alt="" height="18">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="d-flex liveInfo live-s">
                <div class="d-inline-block pt-3">
                    <span class="d-xl-inline-block" key="t-henry">{{ auth()->user()->name }}</span>
                    <p>NFI. <span>14049001</span></p>
                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    @if(Auth::user()->image)
                    <img class="rounded-circle header-profile-user" src="{{ asset('storage/photos/' . auth()->user()->image ?? '') }}" alt="{{ auth()->user()->name }}">
                    @else
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle">{{ Auth::user()->getInitials() }} </span>
                    </div>
                    @endif
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth()->user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
            </div> --}}

        </div>

        <div class="d-flex rht-navbar">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item btn-link btn-rounded waves-effect"><b>Start Application</b></button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item btn-link btn-rounded waves-effect"><b>Search Marketplace</b></button>
            </div>
            <div class="dropdown d-inline-block pt-3">
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-primary hs-btn2">
                        Quote On-Ex
                    </button>
                    <button type="button" class="btn btn-primary dropdown-toggle hs-btn2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Test</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Test 2</a>
                    </div>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="">
                    <i class="bx bx-info-circle"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-cog"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</span></a>
                    <a class="dropdown-item" href="">Carriers</span></a>
                    <a class="dropdown-item" href="">Support</span></a>
                    <a class="dropdown-item" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
            </div>
        </div>
    </div>
</header>
