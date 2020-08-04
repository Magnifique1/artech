@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New Business Development Officer</h4></div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Personal Information</h4>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Primary Phone Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="tel" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Secondary Phone Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="tel" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">ID Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Company Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" value="" id="example-email-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Default Branch</label>
                                <div class="col-sm-10">
                                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <option value="NRB">Nairobi CBD</option>
                                        <option value="NG">Ngong</option>
                                        <option value="RN">Rongai</option>
                                        <option value="TH">Thika</option>

                                    </select>
                                </div>
                            </div>

                            <br>
                            <br>
                            <h4 class="mt-0 header-title">Banking Information</h4>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Bank Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Branch Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Account Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body"><h4 class="mt-0 header-title">Attach Copy of ID</h4>
                                            <p class="text-muted m-b-30 font-14">Make sure both side of ID are on a single document</p>
                                            <input type="file" id="input-file-now" class="dropify"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Attach Copy of KRA PIN</h4>
                                            <p class="text-muted m-b-30 font-14">Make sure both side of KRA are on a single document</p>
                                            <input type="file" id="input-file-now" class="dropify"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-b-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
