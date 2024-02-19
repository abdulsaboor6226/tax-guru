@extends('backend.layouts.__main')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-9">

                    @include('backend.income-tax.nav-tabs')
                </div>
            </div>
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Tax Return Filing</h3>
                    </div>
                </div>
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <form id="kt_account_profile_details_form" class="form">
                        <div class="card-body border-top p-9">

                            <div class="row mb-6">

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="radio" class="btn-check" name="radio_buttons_2" value="pro"   id="kt_radio_buttons_2_option_1"/>
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5 justify-content-center" for="kt_radio_buttons_2_option_1">
                                                <figure>
                                                    <img src="/assets/media/used/frame85.png">
                                                </figure>

                                                <p class="d-block fw-semibold text-start">

                                                </p>
                                            </label>

                                        </div>


                                        <div class="col-lg-3">
                                            <input type="radio" class="btn-check" name="radio_buttons_2" value="free"   id="kt_radio_buttons_2_option_2"/>
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5 justify-content-center" for="kt_radio_buttons_2_option_2">
                                                <figure>
                                                    <img src="/assets/media/used/frame82.png">
                                                </figure>

                                                <p class="d-block fw-semibold text-start">

                                                </p>
                                            </label>

                                        </div>
                                        <div class="col-lg-3">
                                            <input type="radio" class="btn-check" name="radio_buttons_2" value="free"   id="kt_radio_buttons_2_option_3"/>
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5 justify-content-center" for="kt_radio_buttons_2_option_3">
                                                <figure>
                                                    <img src="/assets/media/used/frame83.png">
                                                </figure>

                                                <p class="d-block fw-semibold text-start">

                                                </p>
                                            </label>

                                        </div>
                                        <div class="col-lg-3">
                                            <input type="radio" class="btn-check" name="radio_buttons_2" value="sal"   id="kt_radio_buttons_2_option_4"/>
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5 justify-content-center" for="kt_radio_buttons_2_option_4">
                                                <figure>
                                                    <img src="/assets/media/used/frame84.png">
                                                </figure>

                                                <p class="d-block fw-semibold text-start">

                                                </p>
                                            </label>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{route('wealth-statement')}}" class="btn btn-primary">Continue</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
