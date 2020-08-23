@extends('layouts.mainlayout')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard - Welcome {{Auth::user()->fname}} {{Auth::user()->lname}}</h4></div>
            </div>
        </div>

        <div class="row">
            @if(Auth::user()->role == 'ADMIN')
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-wallet"></i></div>
                            </div>
                            @foreach($savingsToday as $ST)
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10"><h5 class="mt-0 round-inner">KES {{number_format($ST->t_amount)}}</h5>
                                    <p class="mb-0 text-muted">Total Savings Paid Today</p></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-wallet"></i></div>
                            </div>
                            @foreach($savingsWeek as $SW)
                                <div class="col-6 align-self-center text-center">
                                    <div class="m-l-10"><h5 class="mt-0 round-inner">KES {{number_format($SW->t_amount)}}</h5>
                                        <p class="mb-0 text-muted">Total Savings Paid This Week</p></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-wallet"></i></div>
                            </div>
                            @foreach($savingsMonth as $SM)
                                <div class="col-6 align-self-center text-center">
                                    <div class="m-l-10"><h5 class="mt-0 round-inner">KES {{number_format($SM->t_amount)}}</h5>
                                        <p class="mb-0 text-muted">Total Savings Paid This Month</p></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-wallet"></i></div>
                            </div>
                            @foreach($savingsTotal as $STot)
                                <div class="col-6 align-self-center text-center">
                                    <div class="m-l-10"><h5 class="mt-0 round-inner">KES {{number_format($STot->t_amount)}}</h5>
                                        <p class="mb-0 text-muted">Total Savings Paid</p></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round"><i class="mdi mdi-face"></i></div>
                                </div>
                                @foreach($usersToday as $UT)
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10"><h5 class="mt-0 round-inner">{{number_format($UT->mcount)}}</h5>
                                            <p class="mb-0 text-muted">New Members Today</p></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round"><i class="mdi mdi-face"></i></div>
                                </div>
                                @foreach($usersWeek as $UW)
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10"><h5 class="mt-0 round-inner">{{number_format($UW->mcount)}}</h5>
                                            <p class="mb-0 text-muted">New Members This Week</p></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round"><i class="mdi mdi-face"></i></div>
                                </div>
                                @foreach($usersMonth as $UM)
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10"><h5 class="mt-0 round-inner">{{number_format($UM->mcount)}}</h5>
                                            <p class="mb-0 text-muted">New Members This Month</p></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round"><i class="mdi mdi-face"></i></div>
                                </div>
                                @foreach($usersTotal as $UTot)
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10"><h5 class="mt-0 round-inner">{{number_format($UTot->mcount)}}</h5>
                                            <p class="mb-0 text-muted">Total Members</p></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card bg-white m-b-30">
                    <div class="card-body new-user"><h5 class="header-title mb-4 mt-0">Top Savings Members Profiles</h5>
                        <div class="table-responsive">
                            <table id="datatableHome" class="table">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Group</th>
                                    <th class="border-top-0">BDO</th>
                                    <th class="border-top-0">Branch</th>
                                    <th class="border-top-0">Savings Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($topSavers as $TS)
                                <tr>
                                    <td>{{$TS->fname}} {{$TS->mname}} {{$TS->lname}}</td>
                                    <td>{{$TS->group_name}}</td>
                                    <td>{{$TS->ufname}} {{$TS->ulname}}</td>
                                    <td>{{$TS->branch_name}}</td>
                                    @if(Auth::user()->role != 'ADMIN')
                                        <td>Not Authorized</td>
                                    @else
                                        <td>KES {{number_format($TS->t_amount,2)}}</td>
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card bg-white m-b-30">
                    <div class="card-body new-user"><h5 class="header-title mt-0 mb-4">Today's New Members</h5>
                        <ul class="list-unstyled mb-0 pr-3" id="boxscroll2" tabindex="1"
                            style="overflow: hidden; outline: none;">
                            @foreach($newUsers as $NU)
                            <li class="p-3">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="media-heading mb-0">{{$NU->fname}} {{$NU->mname}} {{$NU->lname}}
                                            @if($NU->mstatus == 0)
                                                <i class="fa fa-circle text-danger mr-1 pull-right"> </i>
                                            @else
                                                <i class="fa fa-circle text-success mr-1 pull-right"> </i>
                                            @endif
                                        </p>
                                        @if($NU->mstatus == 0)
                                            <small class="pull-right text-muted">
                                                Pending
                                            </small>
                                        @else
                                            <small class="pull-right text-muted">
                                                Approved
                                            </small>
                                        @endif
                                        <small class="text-muted">
                                            {{$NU->ufname}} {{$NU->ulname}}
                                        </small>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- container -->
</div><!-- Page content Wrapper -->
@endsection
