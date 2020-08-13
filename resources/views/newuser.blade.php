@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New user</h4></div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Personal Information</h4>

                            <form method="POST" action="{{route('newuser.store')}}">
                                @csrf

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" name="fname" id="fname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Surname</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" name="lname" id="lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Primary Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" name="phone1" id="phone1">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Secondary Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" name="phone2" id="phone2">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">ID Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" name="id_number" id="id_number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Company Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" name="email" id="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Login Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="password" id="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">User Role</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="role" id="role">
                                            <option>Select</option>
                                            <option value="BDO">Business Development Officer</option>
                                            <option value="ADMIN">Administrator</option>
                                            <option value="BM">Branch Manager</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Default Branch</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name = "default_branch_id" id = "default_branch_id">
                                            <option>Select</option>
                                            @foreach($allBranches as $AB)
                                                <option value="{{$AB->id}}">{{$AB->branch_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <h4 class="mt-0 header-title">Attachments</h4>

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
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
