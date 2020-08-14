@extends('layouts.mainlayout')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard - Welcome {{Auth::user()->fname}}</h4></div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-webcam"></i></div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10"><h5 class="mt-0 round-inner">KES 18090</h5>
                                    <p class="mb-0 text-muted">Total Savings Paid Today</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-webcam"></i></div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10"><h5 class="mt-0 round-inner">KES 18090</h5>
                                    <p class="mb-0 text-muted">Total Savings Paid This Week</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-webcam"></i></div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10"><h5 class="mt-0 round-inner">KES 18090</h5>
                                    <p class="mb-0 text-muted">Total Savings Paid This Month</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-webcam"></i></div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10"><h5 class="mt-0 round-inner">KES 18090</h5>
                                    <p class="mb-0 text-muted">Total Savings Paid</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-8 align-self-center">
                <div class="card bg-white m-b-30">
                    <div class="card-body new-user"><h5 class="header-title mb-4 mt-0">Top Savings Members Profiles</h5>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="border-top-0" style="width:60px;">Member</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Branch</th>
                                    <th class="border-top-0">BDO</th>
                                    <th class="border-top-0">Savings Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img class="rounded-circle" src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                             alt="user" width="40"></td>
                                    <td><a href="javascript:void(0);">Ruby T. Curd</a></td>
                                    <td>Thika</td>
                                    <td>James Wachiru</td>
                                    <td>KES 103,000</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle" src="assets/images/users/avatar-3.jpg"
                                             alt="user" width="40"></td>
                                    <td><a href="javascript:void(0);">William A. Johnson</a></td>
                                    <td>Ruiru</td>
                                    <td>James Wachiru</td>
                                    <td>KES 64,340</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle" src="assets/images/users/avatar-4.jpg"
                                             alt="user" width="40"></td>
                                    <td><a href="javascript:void(0);">Bobby M. Gray</a></td>
                                    <td>Ruiru</td>
                                    <td>James Wachiru</td>
                                    <td>KES 24,500</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle" src="assets/images/users/avatar-5.jpg"
                                             alt="user" width="40"></td>
                                    <td><a href="javascript:void(0);">Robert N. Carlile</a></td>
                                    <td>Rongai</td>
                                    <td>James Wachiru</td>
                                    <td>KES 30,000</td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle" src="assets/images/users/avatar-6.jpg"
                                             alt="user" width="40"></td>
                                    <td><a href="javascript:void(0);">Ruby T. Curd</a></td>
                                    <td>Ngong</td>
                                    <td>James Wachiru</td>
                                    <td>KES 50,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card bg-white m-b-30">
                    <div class="card-body new-user"><h5 class="header-title mt-0 mb-4">Today's New Users</h5>
                        <ul class="list-unstyled mb-0 pr-3" id="boxscroll2" tabindex="1"
                            style="overflow: hidden; outline: none;">
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-5.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">Ruby T. Curd <i
                                                class="fa fa-circle text-success mr-1 pull-right"></i></p><small
                                            class="pull-right text-muted">Approved</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-4.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">William A. Johnson
                                            <i class="fa fa-circle text-success mr-1 pull-right"></i></p><small
                                            class="pull-right text-muted">Approved</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-3.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">Robert N.
                                            Carlile<i class="fa fa-circle text-danger mr-1 pull-right"></i></p>
                                        <small class="pull-right text-muted">Pending</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-2.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">Bobby M. Gray <i
                                                class="fa fa-circle text-success mr-1 pull-right"></i></p><small
                                            class="pull-right text-muted">Approved</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-1.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">Ruby T. Curd <i
                                                class="fa fa-circle text-danger mr-1 pull-right"></i></p><small
                                            class="pull-right text-muted">Pending</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-6.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">Robert N. Carlile
                                            <i class="fa fa-circle text-success mr-1 pull-right"></i></p><small
                                            class="pull-right text-muted">Approved</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                            <li class="p-3">
                                <div class="media">
                                    <div class="thumb float-left"><a href="#"><img class="rounded-circle"
                                                                                   src="assets/images/users/avatar-4.jpg"
                                                                                   alt=""></a></div>
                                    <div class="media-body"><p class="media-heading mb-0">Bobby M. Gray<i
                                                class="fa fa-circle text-danger mr-1 pull-right"></i></p><small
                                            class="pull-right text-muted">Pending</small> <small
                                            class="text-muted">James Wachiru</small></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- container -->
</div><!-- Page content Wrapper -->
@endsection
