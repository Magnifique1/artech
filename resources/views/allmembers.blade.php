@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    @foreach($groupDetails as $GD)
                    <div class="page-title-box">
                        <h4 class="page-title">All {{$GD->group_name}} Members</h4>
                    </div>
                        @if(Auth::user()->role == 'BDO')
                            <a href="/newmember/{{$GD->id}}" class="btn btn-success waves-effect waves-light">Add New Member To {{$GD->group_name}} Group</a>
                        @endif
                    @endforeach
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
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allMembers as $AM)
                                    <tr>
                                        <td>{{$AM->fname}} {{$AM->lname}}</td>
                                        <td>{{$AM->group_name}}</td>
                                        <td>{{$AM->bfname}} {{$AM->blname}}</td>
                                        <td>{{$AM->created}}</td>
                                        <td>
                                            <a href="/memberprofile/{{$AM->id}}" class="btn btn-primary waves-effect waves-light">View Profile</a>
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
