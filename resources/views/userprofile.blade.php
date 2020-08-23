@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">User Profile</h4></div>
                </div>
            </div>

            <div class="row">
                @foreach($userDetails as $UD)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            {{--                    <img class="card-img-top img-fluid" src="{{asset('assets/images/small/img-6.jpg')}}" alt="Card image cap">--}}
                            <div class="card-body">

                                <h4 class="card-title font-20 mt-0">{{$UD->fname}} {{$UD->lname}}</h4>
                                <br>
                                <p class="card-text">Primary Phone : {{$UD->phone1}}</p>
                                <br>
                                <p class="card-text">Secondary Phone : {{$UD->phone2}}</p>
                                <br>
                                <p class="card-text">ID Number : {{$UD->id_number}}</p>
                                <br>
                                <p class="card-text">Email : {{$UD->email}}</p>
                                <br>
                                <p class="card-text">User Role : {{$UD->role}}</p>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 col-lg-12 col-xl-8">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">User Members</h4>

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#savings" role="tab">User Members</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#attachments" role="tab">Files & Attachments</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="savings" role="tabpanel">
                                    <table id="datatable2" class="table">
                                        <thead>
                                        <tr>
                                            <th>Member Name</th>
                                            <th>Member Phone</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($userMembers as $UM)
                                            <tr>
                                                <td>{{$UM->fname}} {{$UM->mname}} {{$UM->lname}}</td>
                                                <td>{{$UM->phone1}}</td>
                                                <td>
                                                    @if($UM->status == 0)
                                                        <span class="badge badge-pill badge-danger" style="margin-right: 14px">Inactive</span>
                                                    @else
                                                        <span class="badge badge-pill badge-success" style="margin-right: 14px">Active</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane p-3" id="attachments" role="tabpanel">
                                    <table id="attachmentsMembers" class="table">
                                        <thead>
                                        <tr>
                                            <th>Attachments</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($memberUploads as $MU)
                                            <tr>
                                                <td>
                                                    <a href="{{$MU->purl}}" target="_blank">{{$MU->purl}}</a>
                                                </td>
                                                <td>
                                                    <a href="{{$MU->purl}}" target="_blank" class="btn btn-primary waves-effect waves-light">View Attachment</a>
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
    </div>
@endsection
