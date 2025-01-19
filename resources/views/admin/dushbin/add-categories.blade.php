<?php $page = 'add-categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Add Categories
                        @endslot
                    @endcomponent

                    <form action="{{ url('admin/categories') }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name <span>(English)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Category Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Slug <span>(Ex:test-slug)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Slug">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <label>Category Image</label>
                                </div>
                                <div class="form-uploads mb-4">
                                    <div class="form-uploads-path">
                                        <img src="{{ URL::asset('admin_assets/img/icons/upload.svg') }}" alt="img">
                                        <div class="file-browse">
                                            <h6>Drag & drop image or </h6>
                                            <div class="file-browse-path">
                                                <input type="file">
                                                <a href="javascript:void(0);"> Browse</a>
                                            </div>
                                        </div>
                                        <h5>Supported formates: JPEG, PNG</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Is Featured?</label>
                                    <ul class="custom-radiosbtn">
                                        <li>
                                            <label class="radiossets">Yes
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">No
                                                <input type="radio" name="radio">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
