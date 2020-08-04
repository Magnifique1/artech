@extends('layouts.mainlayout')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Member Profile</h4></div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30"><img class="card-img-top img-fluid" src="{{asset('assets/images/small/img-6.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <div class="row">
                            <span class="badge badge-pill badge-success" style="margin-right: 14px">Status = Active</span>
                            <span class="badge badge-info" style="margin-right: 5px">BDO = James Kamity</span>
                            <span class="badge badge-info" style="margin-right: 5px">Branch = Thika</span>
                        </div>

                        <br>
                        <br>
                        <h4 class="card-title font-20 mt-0">Ruth Patric</h4>
                        <p class="card-text">Total Saving = KES 120,000</p>
                        <p class="card-text">Total Loans = KES 0</p>
                        <p class="card-text">Total Investments = KES 0</p>
                        <a href="#" class="btn btn-primary waves-effect waves-light"
                           data-toggle="modal"
                           data-animation="bounce"
                           data-target=".post-payment">Post Payment</a>
                        <a href="#" class="btn btn-danger waves-effect waves-light">Deactivate Account</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Member Transactions</h4>

                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Savings Transactions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Loan Transactions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Investment Transactions</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home" role="tabpanel">
                                <table id="datatable2" class="table">
                                    <thead>
                                    <tr>
                                        <th>Transaction Date</th>
                                        <th>Transaction ID</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01/07/2020</td>
                                        <td>OPWX2345Y</td>
                                        <td>M-Pesa</td>
                                        <td>KES 50,000</td>
                                    </tr>

                                    <tr>
                                        <td>01/07/2020</td>
                                        <td>CS023</td>
                                        <td>Cash</td>
                                        <td>KES 70,000</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane p-3" id="profile" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="datatable4" class="table table-striped table-hover dt-responsive" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Transaction Date</th>
                                            <th>Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Loan Term</th>
                                            <th>Interest Rate</th>
                                            <th>Loan Amount</th>
                                            <th>Interest Payable</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>Amount Repaid</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01/07/2020</td>
                                            <td>OPWX2345Y</td>
                                            <td>M-Pesa</td>
                                            <td>6 Months</td>
                                            <td>10%</td>
                                            <td>KES 50,000</td>
                                            <td>KES 5,000</td>
                                            <td>KES 55,000</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-danger waves-effect waves-light">Pending Approval</a>
                                            </td>
                                            <td>KES 0</td>
                                        </tr>

                                        <tr>
                                            <td>01/07/2020</td>
                                            <td>CS023</td>
                                            <td>Cash</td><td>6 Months</td>
                                            <td>10%</td>
                                            <td>KES 70,000</td>
                                            <td>KES 7,000</td>
                                            <td>KES 77,000</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-success waves-effect waves-light">Approved</a>
                                            </td>
                                            <td>KES 63,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane p-3" id="messages" role="tabpanel">
                                <table id="datatable3" class="table">
                                    <thead>
                                    <tr>
                                        <th>Transaction Date</th>
                                        <th>Transaction ID</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01/07/2020</td>
                                        <td>OPWX2345Y</td>
                                        <td>M-Pesa</td>
                                        <td>KES 50,000</td>
                                    </tr>

                                    <tr>
                                        <td>01/07/2020</td>
                                        <td>CS023</td>
                                        <td>Cash</td>
                                        <td>KES 70,000</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane p-3" id="settings" role="tabpanel">
                                <button type="button" class="btn btn-warning waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".update-branch">
                                    Update Branch
                                </button>

                                <button type="button" class="btn btn-warning waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".update-bdo">
                                    Update BDO
                                </button>

                                <button type="button" class="btn btn-warning waves-effect waves-light" style="margin-right: 20px"
                                        data-toggle="modal"
                                        data-animation="bounce"
                                        data-target=".member-product">
                                    Update Member Product
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade member-product" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">
                    Update Member Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
            </div>
            <div class="modal-body">

                <label>Current Active Product
                    <span>
                        <button type="button" class="btn btn-outline-success waves-effect waves-light" style="margin-left: 20px">
                                    AGF
                        </button>
                    </span>
                </label>
                <br>
                <br>
                <div class="col-sm-12">
                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                        <option>Select</option>
                        <option value="NRB">AGF</option>
                        <option value="NG">NAGF</option>
                        <option value="RN">AHYF</option>
                    </select>
                </div>
                <br>
                <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal" style="margin-left: 20px">
                    UPDATE
                </button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade update-branch" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">
                    Update Member Branch
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
            </div>
            <div class="modal-body">

                <label>Current Active Product
                    <span>
                        <button type="button" class="btn btn-outline-success waves-effect waves-light" style="margin-left: 20px">
                                    Thika
                        </button>
                    </span>
                </label>
                <br>
                <br>
                <div class="col-sm-12">
                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                        <option>Select</option>
                        <option value="NRB">Rongai</option>
                        <option value="NG">Ngong</option>
                        <option value="RN">Ruiru</option>
                    </select>
                </div>
                <br>
                <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal" style="margin-left: 20px">
                    UPDATE
                </button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade update-bdo" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">
                    Update Member BDO
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
            </div>
            <div class="modal-body">

                <label>Current BDO
                    <span>
                        <button type="button" class="btn btn-outline-success waves-effect waves-light" style="margin-left: 20px">
                                    James Kamity
                        </button>
                    </span>
                </label>
                <br>
                <br>
                <div class="col-sm-12">
                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                        <option>Select</option>
                        <option value="NRB">Jeffrey Mark</option>
                        <option value="NG">Tony Stark</option>
                        <option value="RN">Steve Rogers</option>
                    </select>
                </div>
                <br>
                <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal" style="margin-left: 20px">
                    UPDATE
                </button>

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

                <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Payment For:</label>
                    <div class="col-sm-10">
                        <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                            <option>Select</option>
                            <option value="NRB">AGF - Loan Repayment Account</option>
                            <option value="NG">NAGF - Savings Account</option>
                            <option value="RN">AHYF - Investment Account</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Payment Method:</label>
                    <div class="col-sm-10">
                        <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                            <option>Select</option>
                            <option value="NRB">Cast</option>
                            <option value="NG">M-Pesa Pay Bill</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label">Payment Amount</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="search" value="" id="example-search-input">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label">Reference Number</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <br>

                <div class="form-group m-b-0">
                    <div>
                        <button type="submit" class="btn btn-success waves-effect waves-light" data-dismiss="modal" style="margin-right: 15px">
                            Post Payment
                        </button>
                        <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
