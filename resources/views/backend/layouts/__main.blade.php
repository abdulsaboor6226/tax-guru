<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tax Guru</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
</head>
<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="false" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        @include('backend.layouts.__header')

        <!--begin::Wrapper-->
        <div class="app-wrapper d-flex" id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container container-fluid d-flex">
                @include('backend.layouts.__sidebar')
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    @yield('content')
                    @include('backend.layouts.__footer')
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<script>var hostUrl = "assets/";</script>
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
</body>
</html>
