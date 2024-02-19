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
                                            <label class=" col-form-label required fw-semibold mx-0 fs-6">Annual Salary</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="salary" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " placeholder="Annual Salary" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 row">
                                            <label class=" col-form-label required fw-semibold mx-0 fs-6">Tax Deducted by Employer</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Tax Deducted" value="" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div data-kt-buttons="true" class="row pt-3">
                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">Did you receive any T.A/D.A or per diem?</label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="perdiem" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="perdiem" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>


                                </div>
                                <div data-kt-buttons="true" class="row pt-3">
                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">Are you provided free of cost medical treatment or hospitalization by your employer?</label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="med" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="med" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>


                                </div>
                                <div data-kt-buttons="true" class="row pt-3">
                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">
                                        Do you receive any medical allowance?
                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="all" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="all" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>


                                </div>
                                <div data-kt-buttons="true" class="row pt-3">

                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">
                                        Has your employer established a recognized provident fund?
                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="prov" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="prov" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>



                                </div>
                                <div data-kt-buttons="true" class="row pt-3">

                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">
                                        Are you provided with vehicle by your employer?
                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="veh" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="veh" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>



                                </div>
                                <div data-kt-buttons="true" class="row pt-3">

                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">
                                        Any other allowances / benefits including bonus received during the year?                                                            </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="ben" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="ben" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>



                                </div>
                                <div data-kt-buttons="true" class="row pt-3">

                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">
                                        Did you receive any amount from a recognized provident/gratuity fund on account of permanent withdrawal of funds?
                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="gratuity" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="gratuity" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>



                                </div>
                                <div data-kt-buttons="true" class="row pt-3">

                                    <label class=" col-lg-4 col-form-label required fw-semibold mx-0 fs-6">
                                        Is the tax on your salary borne by your employer?
                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex mx-5 flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center  me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="tos" value="y"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Yes
                                                </h2>

                                            </div>
                                        </div>


                                    </label>

                                    <label class="col-lg-3 btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mx-2  mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="tos" checked="checked" value="n"/>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    No
                                                </h2>

                                            </div>
                                        </div>


                                    </label>



                                </div>
                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{route('tax-deducted')}}" class="btn btn-primary">Continue</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
