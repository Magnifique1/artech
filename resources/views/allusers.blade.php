@extends('layouts.mainlayout')

@section('content')


    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Users</h4></div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('success') }}
                    </div>
                @endif

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
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($allusers as $AU)
                                    <tr>
                                        <td>{{$AU->fname}} {{$AU->lname}}</td>
                                        <td>{{$AU->branch_name}}</td>
                                        <td>{{$AU->role}}</td>
                                        <td>{{$AU->created}}</td>
                                        <td>
                                            <a href="/userprofile/{{$AU->id}}" class="btn btn-primary waves-effect waves-light">View Profile</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modals')

@endsection
