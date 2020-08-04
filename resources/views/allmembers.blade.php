@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Members</h4></div>
                </div>
            </div>
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
                                        <th>Branch</th>
                                        <th>BRO</th>
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

                                    <tr>
                                        <td>Grace Joyce</td>
                                        <td>Rongai</td>
                                        <td>Beth Warimu</td>
                                        <td>01/07/2020</td>
                                        <td>KES 100,000</td>
                                        <td>
                                            <a href="/memberprofile" class="btn btn-primary waves-effect waves-light">View Profile</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ruth Patric</td>
                                        <td>Thika</td>
                                        <td>Beth Warimu</td>
                                        <td>09/07/2020</td>
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
