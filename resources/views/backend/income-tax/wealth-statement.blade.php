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
                                        <div class="col-lg-12 row">
                                            <label class=" col-form-label required fw-semibold mx-0 fs-6">Total Wealth</label>
                                            <div class="col-lg-4">
                                                <input type="number" name="wealth" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " placeholder="Total Wealth" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{route('expense')}}" class="btn btn-primary">Continue</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
