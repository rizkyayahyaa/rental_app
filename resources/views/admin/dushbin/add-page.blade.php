<?php $page = 'add-page'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/page-list') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">
                        <div class="content-page-header">
                            <h5 class="mb-2">Add Pages</h5>
                            <div class="form-group mb-0">
                                <p class="contentpage">You are editing "English" version</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Titles</label>
                                    <input type="text" class="form-control" placeholder="Enter Titles">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Slug <span>(If you leave it empty, it will be generated
                                            automatically.)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Slug">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description <span>(Meta Tag)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Description">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Keywords <span>(Meta Tag)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> language</label>
                                    <select class="select">
                                        <option>English</option>
                                        <option>french</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="split-check-title">
                                                <h6>Login Type</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="split-check-box">
                                                <ul class="custom-radiosbtn">
                                                    <li>
                                                        <label class="radiossets">Top Menu
                                                            <input type="radio" checked="checked" name="radio">
                                                            <span class="checkmark-radio"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="radiossets">Quick Links
                                                            <input type="radio" name="radio">
                                                            <span class="checkmark-radio"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="split-check-title">
                                                <h6>Hide</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="split-check-box">
                                                <ul class="custom-radiosbtn">
                                                    <li>
                                                        <label class="radiossets">Show
                                                            <input type="radio" checked="checked" name="radio1">
                                                            <span class="checkmark-radio"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="radiossets">Hide
                                                            <input type="radio" name="radio1">
                                                            <span class="checkmark-radio"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Content</label>
                                    <textarea class="form-control" placeholder="Add Your Content"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Add Pages</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
