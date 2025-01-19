<?php $page = 'add-role'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <form action="{{('admin/roles-permissions')}}">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Add Role
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Role Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Role Name ">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-groupheads">
                                <h2>Manage Permission</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="location-setcontent">
                                <h5 class="mb-4">Manage Users</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="filter-checkbox m-0 role-checkset">
                                <ul class="d-flex">
                                    <li>
                                        <h6>Create</h6>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <h6>View</h6>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <h6>Edit</h6>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <h6>Delete</h6>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="btn-path">
                                <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                <button type="submit" class="btn btn-primary "> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> 

@endsection