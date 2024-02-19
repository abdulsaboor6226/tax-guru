@extends('backend.layouts.__main')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
                            <a href="index.html" class="text-hover-primary">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-7 text-gray-700"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">Account</li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-7 text-gray-700"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-500 mx-n1">Overview</li>
                    </ul>
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-3 m-0"> Dashboard</h1>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <div class="col-xl-4">
                    <div class="card h-md-100" dir="ltr">
                        <div class="card-body d-flex flex-column flex-center">
                            <div class="mb-2">
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
                                    <br />new
                                    <span class="fw-bolder">Mobile Application ?</span></h1>
                                <div class="py-10 text-center">
                                    <img src="assets/media/svg/illustrations/easy/1.svg" class="theme-light-show w-200px" alt="" />
                                    <img src="assets/media/svg/illustrations/easy/1-dark.svg" class="theme-dark-show w-200px" alt="" />
                                </div>
                            </div>
                            <div class="text-center mb-1">
                                <a class="btn btn-sm btn-dark me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Try now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <div class="d-flex flex-center">
                                <h3 class="card-title align-items-start">
                                    <span class="card-label fw-bold text-gray-800">Instagram Subscribers</span>
                                </h3>
                                <div class="d-flex align-items-center px-5">
                                    <div class="d-flex align-items-center me-6">
                                        <span class="rounded-1 bg-gray-800 me-2 h-10px w-10px"></span>
                                        <span class="fw-semibold fs-6 text-gray-600">Gained</span>
                                    </div>
                                    <!--ed::Item-->
                                    <div class="d-flex align-items-center">
                                        <span class="rounded-1 bg-gray-500 me-2 h-10px w-10px"></span>
                                        <span class="fw-semibold fs-6 text-gray-600">Lost</span>
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Info-->
                            </div>
                            <div class="card-toolbar">
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <div class="separator mb-3 opacity-75"></div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <div class="separator mt-3 opacity-75"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 px-0">
                            <div id="kt_charts_widget_46" class="min-h-auto ps-4 pe-6 mb-3" style="height: 350px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <div class="col-xl-4">
                    <div class="card card-flush h-xl-100 mb-xl-8">
                        <div class="card-header pt-5">
                            <h3 class="card-title fw-bold text-gray-900">Trends</h3>
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																	<i class="ki-outline ki-information fs-6"></i>
																</span></a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between flex-column pt-0">
                            <div class="m-0" id="kt_charts_widget_45" data-kt-chart-color="dark" style="height: 90px"></div>
                            <div class="m-0">
                                <div class="d-flex flex-stack mb-9">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="symbol symbol-50px me-5">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">Successful Fellas</div>
                                        </div>
                                    </div>
                                    <div class="badge badge-light badge-lg fw-bold p-2 text-gray-600">+82$</div>
                                </div>
                                <div class="d-flex flex-stack mb-9">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="symbol symbol-50px me-5">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/telegram-2.svg" class="h-50" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Binford Ltd.</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">Most Successful</div>
                                        </div>
                                    </div>
                                    <div class="badge badge-light badge-lg fw-bold p-2 text-gray-600">+280$</div>
                                </div>
                                <div class="d-flex flex-stack">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="symbol symbol-50px me-5">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Biffco Enterprises</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">Most Successful Fellas</div>
                                        </div>
                                    </div>
                                    <div class="badge badge-light badge-lg fw-bold p-2 text-gray-600">+4500$</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card h-xl-100">
                        <div class="card-header position-relative py-0 border-bottom-2">
                            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3">
                                <li class="nav-item p-0 ms-0 me-8">
                                    <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_1">
                                        <span class="nav-text fw-semibold fs-4 mb-3">Monday</span>
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    </a>
                                </li>
                                <li class="nav-item p-0 ms-0 me-8">
                                    <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_2">
                                        <span class="nav-text fw-semibold fs-4 mb-3">Tuesday</span>
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    </a>
                                </li>
                                <li class="nav-item p-0 ms-0 me-8">
                                    <a class="nav-link btn btn-color-muted px-0 show active" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_3">
                                        <span class="nav-text fw-semibold fs-4 mb-3">Wednesday</span>
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    </a>
                                </li>
                                <li class="nav-item p-0 ms-0 me-8">
                                    <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_4">
                                        <span class="nav-text fw-semibold fs-4 mb-3">Thursday</span>
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    </a>
                                </li>
                                <li class="nav-item p-0 ms-0 me-8">
                                    <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_5">
                                        <span class="nav-text fw-semibold fs-4 mb-3">Friday</span>
                                        <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="card-toolbar">
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <div class="text-gray-600 fw-bold">Loading date range...</div>
                                    <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content mb-2">
                                <div class="tab-pane fade" id="kt_table_widget_7_tab_content_1">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th class="min-w-150px p-0"></th>
                                                <th class="min-w-200px p-0"></th>
                                                <th class="min-w-100px p-0"></th>
                                                <th class="min-w-80px p-0"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">11:43-09:43am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 1:
                                                    <span class="text-gray-800">French class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">5</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 205min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">09:40-11:20am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 2:
                                                    <span class="text-gray-800">Physics class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">13</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 25min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">10:35-43:09am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 3:
                                                    <span class="text-gray-800">Chemistry class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Court:
                                                    <span class="text-gray-800">Main</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 15min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">15:30-12:23pm</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 4:
                                                    <span class="text-gray-800">Biology class</span>
                                                    <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Held by Dr. Ana">
																				<i class="ki-outline ki-information fs-1 text-warning"></i>
																			</span>

                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">23</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_table_widget_7_tab_content_2">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th class="min-w-150px p-0"></th>
                                                <th class="min-w-200px p-0"></th>
                                                <th class="min-w-100px p-0"></th>
                                                <th class="min-w-80px p-0"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">09:15-12:23am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 1:
                                                    <span class="text-gray-800">Geography class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">45</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 20min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">08:30-09:30am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 2:
                                                    <span class="text-gray-800">English class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">9</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 20min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">11:15-12:13am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 3:
                                                    <span class="text-gray-800">Sports class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Court:
                                                    <span class="text-gray-800">Main</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 25min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">14:10-15:35pm</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 4:
                                                    <span class="text-gray-800">Picture class</span>
                                                    <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Held by Dr. Lebron">
																				<i class="ki-outline ki-information fs-1 text-warning"></i>
																			</span>

                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">12</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="kt_table_widget_7_tab_content_3">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th class="min-w-150px p-0"></th>
                                                <th class="min-w-200px p-0"></th>
                                                <th class="min-w-100px p-0"></th>
                                                <th class="min-w-80px p-0"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">08:30-09:12am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 1:
                                                    <span class="text-gray-800">Math class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">45</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 15min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">09:30-10:50am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 2:
                                                    <span class="text-gray-800">History class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">12</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 20min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">10:35-11:20am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 3:
                                                    <span class="text-gray-800">Sports class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Court:
                                                    <span class="text-gray-800">Main</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 15min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">12:40-13:25pm</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 4:
                                                    <span class="text-gray-800">Chemistry class</span>
                                                    <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Held by Dr. Natali">
																				<i class="ki-outline ki-information fs-1 text-warning"></i>
																			</span>

                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">19</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_table_widget_7_tab_content_4">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th class="min-w-150px p-0"></th>
                                                <th class="min-w-200px p-0"></th>
                                                <th class="min-w-100px p-0"></th>
                                                <th class="min-w-80px p-0"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">11:25-14:13am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 1:
                                                    <span class="text-gray-800">Geography class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">15</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 25min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">08:30-09:30am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 2:
                                                    <span class="text-gray-800">English class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">9</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 20min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">11:15-12:13am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 3:
                                                    <span class="text-gray-800">Sports class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Court:
                                                    <span class="text-gray-800">Main</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 25min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">14:10-15:35pm</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 4:
                                                    <span class="text-gray-800">Picture class</span>
                                                    <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Held by Dr. Kevin">
																				<i class="ki-outline ki-information fs-1 text-warning"></i>
																			</span>

                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">12</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_table_widget_7_tab_content_5">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th class="min-w-150px p-0"></th>
                                                <th class="min-w-200px p-0"></th>
                                                <th class="min-w-100px p-0"></th>
                                                <th class="min-w-80px p-0"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">11:43-09:43am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 1:
                                                    <span class="text-gray-800">French class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">5</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 205min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">09:40-11:20am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 2:
                                                    <span class="text-gray-800">Physics class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">13</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 25min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">10:35-43:09am</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 3:
                                                    <span class="text-gray-800">Chemistry class</span></td>
                                                <td class="fs-6 fw-bold text-gray-500">Court:
                                                    <span class="text-gray-800">Main</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2" colspan="4">Break 15min</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6 fw-bold text-gray-800">15:30-12:23pm</td>
                                                <td class="fs-6 fw-bold text-gray-500">lesson 4:
                                                    <span class="text-gray-800">Biology class</span>
                                                    <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Held by Dr. Emma">
																				<i class="ki-outline ki-information fs-1 text-warning"></i>
																			</span>

                                                <td class="fs-6 fw-bold text-gray-500">Cabinet:
                                                    <span class="text-gray-800">23</span></td>
                                                <td class="pe-0 text-end">
                                                    <button class="btn btn-sm btn-light">Skip</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="float-end">
                                <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                            </div>
                        </div>
                        <!--end: Card Body-->
                    </div>
                </div>
            </div>
            <div class="row g-5 g-xl-10 g-xl-10">
                <div class="col-xl-4">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header pt-7 mb-3">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Our Fleet Tonnage</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 1,247 vehicles</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">Review Fleet</a>
                            </div>
                        </div>
                        <div class="card-body pt-4">
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center me-5">
                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label">
																	<i class="ki-outline ki-ship text-gray-600 fs-1"></i>
																</span>
                                    </div>
                                    <div class="me-5">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Ships</a>
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">234 Ships</span>
                                    </div>
                                </div>
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <span class="text-gray-800 fw-bold fs-6 d-block">2,345,500</span>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center me-5">
                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label">
																	<i class="ki-outline ki-truck text-gray-600 fs-1"></i>
																</span>
                                    </div>
                                    <div class="me-5">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Trucks</a>
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">1,460 Trucks</span>
                                    </div>
                                </div>
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <span class="text-gray-800 fw-bold fs-6 d-block">457,200</span>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center me-5">
                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label">
																	<i class="ki-outline ki-airplane-square text-gray-600 fs-1"></i>
																</span>
                                    </div>
                                    <div class="me-5">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Planes</a>
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">8 Aircrafts</span>
                                    </div>
                                </div>
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <span class="text-gray-800 fw-bold fs-6 d-block">1,240</span>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center me-5">
                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label">
																	<i class="ki-outline ki-bus text-gray-600 fs-1"></i>
																</span>
                                    </div>
                                    <div class="me-5">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Trains</a>
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">36 Trains</span>
                                    </div>
                                </div>
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <span class="text-gray-800 fw-bold fs-6 d-block">804,300</span>
                            </div>
                            <div class="text-center pt-9">
                                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Vehicle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 mb-5 mb-xl-10">
                    <div class="card card-flush h-md-100">
                        <div class="card-header pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">World Sales</span>
                                <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Countries</span>
                            </h3>
                            <div class="card-toolbar">
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																	<i class="ki-outline ki-information fs-6"></i>
																</span></a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-center">
                            <div id="kt_maps_widget_1_map" class="w-100 h-350px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
