<?php $page = 'edit-subcategories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Edit Sub Category
                        @endslot
                    @endcomponent
                    
                    <form action="{{ url('admin/sub-categories') }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select">
                                        <option>Others</option>
                                        <option>Category 2</option>
                                        <option>Category 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name <span>(English)</span></label>
                                    <input type="text" class="form-control" value="Car service">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Slug <span>(Ex:test-slug)</span></label>
                                    <input type="text" class="form-control" value="Car Wash">
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
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save Sub Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
