
<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <div class="app-header-logo d-flex align-items-center me-lg-9">
            <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n2 me-2 d-flex d-lg-none" id="kt_app_header_menu_toggle">
                <i class="ki-outline ki-abstract-14 fs-1"></i>
            </div>
            <a href="index.html">
                <img alt="Logo" src="assets/media/logos/demo44.svg" class="h-25px theme-light-show" />
                <img alt="Logo" src="assets/media/logos/demo44-dark.svg" class="h-25px theme-dark-show" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-600 menu-state-gray-900 menu-arrow-gray-500 fw-semibold fw-semibold fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0" id="#kt_app_header_menu" data-kt-menu="true">
                        <div  data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                            <span class="menu-link">
                                <a href="{{route('dashboard')}}">
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-navbar flex-shrink-0">

                <div class="app-navbar-item ms-1 ms-lg-4" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img class="symbol symbol-35px symbol-md-40px" src="assets/media/avatars/300-5.jpg" alt="user" />
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="assets/media/avatars/300-5.jpg" />
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                        </div>

                        <div class="menu-item px-5">
                            <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                        </div>

                        <div class="menu-item px-5">
                            <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item d-flex align-items-center d-lg-none ms-1 me-n2">
                    <a href="#" class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-outline ki-burger-menu-2 fs-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
