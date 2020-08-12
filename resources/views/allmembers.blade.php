@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Group Members</h4></div>
                    <a href="/newmember" class="btn btn-success waves-effect waves-light">Add New Member To This Group</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-body table-responsive">
                            <h5 class="header-title">Select Member To View Profile</h5>
                            <div class="">
                                <table id="datatable2" class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Group</th>
                                        <th>BDO</th>
                                        <th>Member Since</th>
                                        <th>Total Current Savings</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Ngong</td>
                                        <td>Beth Warimu</td>
                                        <td>01/07/2020</td>
                                        <td>KES 100,000</td>
                                        <td>
                                            <a href="/memberprofile" class="btn btn-primary waves-effect waves-light">View Profile</a>
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
