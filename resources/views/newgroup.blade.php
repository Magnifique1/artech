@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New Group</h4></div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Group Information</h4>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Group Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Group Location</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Default Group Branch</label>
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

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Groups</h4></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-body table-responsive">
                            <h5 class="header-title">Select Group To View Members</h5>
                            <div class="">
                                <table id="datatable2" class="table">
                                    <thead>
                                    <tr>
                                        <th>Group Name</th>
                                        <th>Group Branch</th>
                                        <th>Group BDO</th>
                                        <th>Number of Members</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Ngong</td>
                                        <td>Beth Warimu</td>
                                        <td>12</td>
                                        <td>
                                            <a href="/allmembers" class="btn btn-primary waves-effect waves-light">View Members</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
