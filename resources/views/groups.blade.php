@extends('layouts.mainlayout')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New Group</h4></div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Group Information</h4>

                            <form method="POST" action="{{route('group.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Group Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" name="group_name" id="group_name">

                                        @error('group_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Group Location</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" name="group_location" id="group_location">

                                        @error('group_location')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Default Group Branch</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="default_branch_id" id="default_branch_id">
                                            <option>Select</option>
                                            @foreach($allBranches as $AB)
                                                <option value="{{$AB->id}}">{{$AB->branch_name}}</option>
                                            @endforeach
                                            @error('default_branch_id')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </select>
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

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Groups</h4></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-body table-responsive">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                                </div>
                            @endif
                            <h5 class="header-title">Select Group To View Members</h5>
                            <div class="">
                                <table id="datatable2" class="table">
                                    <thead>
                                    <tr>
                                        <th>Group Name</th>
                                        <th>Group Branch</th>
                                        <th>Group BDO</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allGroups as $AG)
                                    <tr>
                                        <td>{{$AG->group_name}}</td>
                                        <td>{{$AG->branch_name}}</td>
                                        <td>{{$AG->fname}} {{$AG->lname}}</td>
                                        <td>
                                            <a href="/allmembers/{{$AG->id}}" class="btn btn-primary waves-effect waves-light">View Members</a>
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
@endsection
