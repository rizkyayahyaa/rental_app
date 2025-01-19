<?php $page = 'add-reviewtype'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Add Reviews Type
                        @endslot
                    @endcomponent

                    <form action="{{ url('admin/review-type') }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Reviews Type <span>(English)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Reviews Type">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Add Reviews Type</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
