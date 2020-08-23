@extends('layouts.mainlayout')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Member Profile</h4></div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('success') }}
                </div>
            @endif

        </div>

        <div class="row">
            @foreach($memberDetails as $MD)
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
{{--                    <img class="card-img-top img-fluid" src="{{asset('assets/images/small/img-6.jpg')}}" alt="Card image cap">--}}
                    <div class="card-body">
                        <div class="row">
                            @if($MD->status == 0)
                                <span class="badge badge-pill badge-danger" style="margin-right: 14px">Inactive</span>
                            @else
                                <span class="badge badge-pill badge-success" style="margin-right: 14px">Active</span>
                            @endif
                            <span class="badge badge-info" style="margin-right: 5px">{{$MD->ufname}} {{$MD->ulname}}</span>
                            <span class="badge badge-info" style="margin-right: 5px">{{$MD->branch_name}}</span>
                        </div>

                        <br>
                        <br>
                        <h4 class="card-title font-20 mt-0">ARTECH00{{$MD->id}}</h4>
                        <h4 class="card-title font-20 mt-0">{{$MD->fname}} {{$MD->mname}} {{$MD->lname}}</h4>
                        <br>
{{--                        @foreach($memberPaymentsSum as $MPS)--}}
{{--                        <p class="card-text">Total Saving = KES {{number_format($MPS->total_savings,2)}}</p>--}}
{{--                        @endforeach--}}
                        <br>
                        @foreach($lastPayDate as $LPD)
                        <div class="alert alert-info" role="alert"><strong>Product = {{$LPD->product}}</strong> -> The last payment was on {{$LPD->t_date}}</div>
                        @endforeach
                        <br>
                        @if(Auth::user()->role == 'ADMIN')
                            @if($MD->status == 0)
                                <button type="button" class="btn btn-success waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".post-payment" disabled>
                                    Post Payment
                                </button>
                                <br>
                                <br>
                                <button type="button" class="btn btn-success waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".member_activate">
                                    Activate Member
                                </button>
                            @else
                                <button type="button" class="btn btn-success waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".post-payment">
                                    Post Payment
                                </button>
                                <br>
                                <br>
                                <button type="button" class="btn btn-danger waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".member_deactivate">
                                    Deactivate Member
                                </button>
                            @endif
                        @elseif(Auth::user()->role == 'BM')
                            @if($MD->status == 0)
                                <button type="button" class="btn btn-success waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".member_activate">
                                    Activate Member
                                </button>
                            @else
                                <button type="button" class="btn btn-danger waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".member_deactivate">
                                    Deactivate Member
                                </button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Member Transactions</h4>

                        <ul class="nav nav-tabs" role="tablist">
                            @if(Auth::user()->role == 'BDO')
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#attachments" role="tab">Files & Attachments</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#savings" role="tab">All Transactions</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#attachments" role="tab">Files & Attachments</a>
                                </li>
                            @endif

                        </ul>
                        <div class="tab-content">
                            @if(Auth::user()->role == 'BDO')
                                <div class="tab-pane active p-3" id="attachments" role="tabpanel">
                                    <div class="table-responsive">
                                        <div class="row">
                                            @foreach($memberUploads as $MU)
                                                <a href="{{$MU->purl}}" target="_blank">{{$MU->purl}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="tab-pane active p-3" id="savings" role="tabpanel">
                                    <table id="datatable2" class="table">
                                        <thead>
                                        <tr>
                                            <th>Posting Date</th>
                                            <th>Transaction Date</th>
                                            <th>Product</th>
                                            <th>Reference</th>
                                            <th>Transaction Type</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($memberPayments as $MP)
                                            <tr>
                                                <td>{{$MP->postingDate}}</td>
                                                <td>{{$MP->t_date}}</td>
                                                <td>{{$MP->product}}</td>
                                                <td>{{$MP->reference_number}}</td>
                                                <td>{{$MP->t_type}}</td>
                                                <td>KES {{number_format($MP->t_amount,2)}}</td>
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade post-payment" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">
                    Post Payment
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{route('memberprofile.store')}}">
                    @csrf

                    @foreach($memberDetails as $m)
                        <input type="hidden" id="mID" name="mID" value="{{$m->id}}">
                    @endforeach
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Payment For:</label>
                        <div class="col-sm-10">
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" id="product" name="product">
                                <option>Select</option>
                                <option value="AHYF">AHYF - Artech High Yield Fund</option>
                                <option value="NAGF">NAGF - New Artech Guarantee Fund</option>
                                <option value="AGF">AGF - Artech Guarantee Fund</option>
                                <option value="REG">Registration Fee</option>
                                <option value="PASS">Passbook Fee</option>
                                <option value="INSU">Insurance Fee</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Payment Method:</label>
                        <div class="col-sm-10">
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" id="t_type" name="t_type">
                                <option>Select</option>
                                <option value="MPESA">M-Pesa Pay Bill</option>
                                <option value="CASH">Cash</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Payment Date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="2017-06-04" id="mdate" name="mdate">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Reference Code</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="search" value="" id="reference_number" name="reference_number">
                            @error('reference_number')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Payment Amount</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" value="" id="t_amount" name="t_amount">
                            @error('t_amount')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-success waves-effect waves-light" style="margin-right: 15px">
                                Post Payment
                            </button>
                            <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade member_activate" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">
                    Activate - Are You Sure?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('memberprofile.activate')}}">
                    @csrf

                    @foreach($memberDetails as $m)
                        <input type="hidden" id="mID" name="mID" value="{{$m->id}}">
                    @endforeach

                    <br>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-success waves-effect waves-light" style="margin-right: 15px">
                                Activate
                            </button>
                            <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade member_deactivate" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">
                    Deactivate - Are You Sure?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('memberprofile.deactivate')}}">
                    @csrf

                    @foreach($memberDetails as $m)
                        <input type="hidden" id="mID" name="mID" value="{{$m->id}}">
                    @endforeach

                    <br>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-success waves-effect waves-light" style="margin-right: 15px">
                                Deactivate
                            </button>
                            <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
