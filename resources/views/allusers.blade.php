@extends('layouts.mainlayout')

@section('content')


    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Users</h4></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-body table-responsive">
                            <h5 class="header-title">Select BDO To View Profile</h5>
                            <div class="">
                                <table id="datatable2" class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Branch</th>
                                        <th>Role</th>
                                        <th>Date Started</th>
                                        <th>Total Active Members</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Ngong</td>
                                        <td>Admin</td>
                                        <td>01/07/2020</td>
                                        <td>0</td>
                                        <td>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">View
                                                Profile
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Grace Joyce</td>
                                        <td>Rongai</td>
                                        <td>BDO</td>
                                        <td>01/07/2020</td>
                                        <td>20</td>
                                        <td>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">View
                                                Profile
                                            </button>
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
