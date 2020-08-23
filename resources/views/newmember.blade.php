@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add New Member</h4></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Personal Information</h4>

                            <form method="POST" action="{{route('newmember.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" value="" id="fname" name="fname" >
                                        @error('fname')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Middle Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" value="" id="mname" name="mname">
                                        @error('mname')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Surname</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" value="" id="lname" name="lname">
                                        @error('lname')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Primary Mpesa Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" value="" id="phone1" name="phone1">
                                        @error('phone1')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Secondary Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" value="" id="phone2" name="phone2">
                                        @error('phone2')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">ID Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" value="" id="id_number" name="id_number">
                                        @error('id_number')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>

                                @foreach($groupDetails as $GD)
                                    <input type="hidden" name="default_group_id" id="default_group_id" value="{{$GD->id}}">
                                @endforeach

                                <br>
                                <br>
                                <h4 class="mt-0 header-title">Identity Attachments</h4>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">Attach Supporting Documents</h4>
                                                <p class="text-muted m-b-30 font-14">Please attach: ID - KRA PIN - Passport Picture</p>
                                                <input type="file" id="memberFiles" name="uploaded_files[]" multiple></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
