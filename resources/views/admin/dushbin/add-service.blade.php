<?php $page = 'add-service'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12 m-auto">

                    @component('admin.components.addservicetabset')
                    @endcomponent

                    <!-- Service Information -->
                    <fieldset id="first-field">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub-title">
                                    <h6>Service Information</h6>
                                </div>
                                <div class="form-group">
                                    <label>Service Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Services Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Service Category</label>
                                    <input type="text" class="form-control" placeholder="Enter Services Category">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <input type="text" class="form-control" placeholder="Enter Sub Category">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Services Category">
                                    <p class="sml-info"><i class="fe fe-alert-circle"></i> Set 0 for free</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duration <span>Include Tax</span></label>
                                    <div class="form-duration">
                                        <input type="text" class="form-control" placeholder="Enter Duration">
                                        <span class="mins">Mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Services Details</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="sub-title">
                                    <h6>Additional Service</h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle float-sm-end mb-3">
                                    <input type="checkbox" id="status_1" class="check" checked="">
                                    <label for="status_1" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="addservice-info">
                            <div class="row service-cont">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Item</label>
                                        <input type="text" class="form-control" placeholder="Enter  Service Item">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" placeholder="Enter Services Price">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <input type="text" class="form-control" placeholder="Enter Service Duration">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="link-sets add-extra"><i class="fa fa-plus-circle me-2"
                                aria-hidden="true"></i>Add Additional Service</a>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-btns">
                                    <button class="btn btn-primary next_btn" type="button">Next <i
                                            class="fe fe-arrow-right-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- /Service Information -->

                    <!-- Booking -->
                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub-title">
                                    <h6>Booking</h6>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label d-block">Choose Timing Type</label>
                                    <label class="custom_radio d-inline-block me-3">
                                        <input type="radio" name="time" checked="" id="time-slot">
                                        <span class="checkmark"></span> Time Slot
                                    </label>
                                    <label class="custom_radio d-inline-block me-3">
                                        <input type="radio" name="time" id="time-picker">
                                        <span class="checkmark"></span> Time Picker
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <!-- Timeslot -->
                                <div class="timeslot-sec">
                                    <!-- Schedule Nav -->
                                    <label>Configure Time Slots</label>
                                    <div class="schedule-nav">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all_days">All
                                                    Days</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slot_monday">Monday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slot_tuesday">Tuesday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slot_wednesday">Wednesday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slot_thursday">Thursday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slot_friday">Friday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slot_saturday">Saturday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slot_sunday">Sunday</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Schedule Nav -->

                                    <div class="tab-content pt-0">
                                        <div class="tab-pane active" id="all_days">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_monday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_tuesday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_wednesday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_thursday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_friday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_saturday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slot_sunday">
                                            <div class="hours-info">
                                                <div class="row hours-cont">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Slots</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Slot">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hours"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Timeslot -->

                                <!-- Timepicker -->
                                <div class="timepicker-sec">
                                    <!-- Schedule Nav -->
                                    <div class="schedule-nav">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all_day">All
                                                    Days</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slots_monday">Monday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slots_tuesday">Tuesday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slots_wednesday">Wednesday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slots_thursday">Thursday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slots_friday">Friday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#slots_saturday">Saturday</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#slots_sunday">Sunday</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Schedule Nav -->

                                    <div class="tab-content pt-0">
                                        <div class="tab-pane active" id="all_day">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_monday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_tuesday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_wednesday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_thursday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_friday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_saturday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                        <div class="tab-pane fade" id="slots_sunday">
                                            <div class="hrs-info">
                                                <div class="row hrs-cont">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <div class='form-icon'>
                                                                <input type='text' class="form-control timepicker"
                                                                    placeholder="Select Time">
                                                                <span class="cus-icon"><i class="fe fe-clock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-sets add-hrs"><i
                                                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Timepicker -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-btns">
                                    <button class="btn btn-primary next_btn" type="button">Next <i
                                            class="fe fe-arrow-right-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- /Booking -->

                    <!-- Location -->
                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub-title">
                                    <h6>Additional Service</h6>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <div class="map-grid">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                            allowfullscreen="" aria-hidden="false" tabindex="0"
                                            class="contact-map"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Contry</label>
                                    <input type="text" class="form-control" placeholder="Enter Sub Category">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" placeholder="Enter Your State">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="Enter Your City">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Pincode">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Google Maps Place ID</label>
                                    <input type="text" class="form-control" placeholder="Enter Maps Place ID">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" placeholder="Enter Latitude Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" placeholder="Enter Longitude Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-btns">
                                    <button class="btn btn-primary next_btn" type="button">Next <i
                                            class="fe fe-arrow-right-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- /Location -->

                    <!-- Gallery -->
                    <fieldset>
                        <div class="sub-title">
                            <h6>Gallery</h6>
                        </div>
                        <div class="form-uploads mb-4">
                            <div class="form-uploads-path">
                                <img src="{{ URL::asset('/admin_assets/img/icons/upload.svg') }}" alt="img">
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
                        <div class="file-preview">
                            <ul>
                                <li>
                                    <h6>Select Default Image:</h6>
                                </li>
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <img src="{{ URL::asset('/admin_assets/img/services/service-01.jpg') }}"
                                        alt="">
                                </li>
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>
                                    </label>
                                    <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                        alt="">
                                </li>
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>
                                    </label>
                                    <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                        alt="">
                                </li>
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>
                                    </label>
                                    <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                        alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label>Embed Video URL</label>
                            <input type="text" class="form-control" placeholder="Ex: https//youtube.com">
                        </div>
                        <div class="field-btns">
                            <button class="btn btn-primary next_btn" type="button">Next <i
                                    class="fe fe-arrow-right-circle"></i></button>
                        </div>
                    </fieldset>
                    <!-- /Gallery -->

                    <!-- Availability -->
                    <fieldset>
                        <div class="sub-title">
                            <h6>Availability</h6>
                        </div>
                        <div class="availability-sec">
                            <div class="row">

                                <div class="col-sm-6">
                                    <h6>All Days</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_2" class="check" checked>
                                        <label for="status_2" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Monday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_3" class="check" checked>
                                        <label for="status_3" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Tuesday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_21" class="check" checked>
                                        <label for="status_21" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Wednesday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_4" class="check" checked>
                                        <label for="status_4" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Thursday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_5" class="check" checked>
                                        <label for="status_5" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Friday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_6" class="check" checked>
                                        <label for="status_6" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Saturday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_7" class="check" checked>
                                        <label for="status_7" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Sunday</h6>
                                    <h6 class="mb-sm-0">Today Closed</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_8" class="check">
                                        <label for="status_8" class="checktoggle">checkbox</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="field-btns">
                            <a href="{{ url('admin/services') }}" class="btn btn-primary next_btn">Done</a>
                        </div>
                    </fieldset>
                    <!-- /Availability -->

                </div>
            </div>
        </div>
    </div>
@endsection
