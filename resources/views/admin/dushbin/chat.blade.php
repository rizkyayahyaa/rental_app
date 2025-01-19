<?php $page = 'chat'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row chat-window">
                <!-- Chat User List -->
                <div class="col-lg-5 col-xl-3 chat-cont-left d-flex">
                    <div class="card mb-sm-3 mb-md-0 contacts_card flex-fill">
                        <div class="chat-header">
                            <div>
                                <h6>Chats</h6>
                                <p>Start New Conversation</p>
                            </div>
                            <a href="javascript:void(0)" class="chat-compose">
                                <i class="fe fe-plus"></i>
                            </a>
                        </div>
                        <div class="chat-search">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="search_btn"><i class="fe fe-search"></i></span>
                                </div>
                                <input type="text" placeholder="Search messages or users"
                                    class="form-control search-chat">
                            </div>
                        </div>
                        <ul class="chat-list">
                            <li>
                                <a href="javascript:void(0);" class="active"><i class="fe fe-message-square"></i> Chat</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fe fe-phone-call"></i> Call</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fe fe-users"></i> Contacts</a>
                            </li>
                        </ul>
                        <div class="card-body contacts_body chat-users-list chat-scroll">
                            <div class="chat-header inner-chat-header pt-0">
                                <div>
                                    <h6>Favourite</h6>
                                </div>
                                <a href="javascript:void(0)" class="chat-compose">
                                    <i class="fe fe-plus"></i>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="media d-flex active">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">John Steven</div>
                                        <div class="user-last-chat">Lorem ipsum dolor</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">10:12 AM</div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="media d-flex read-chat">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-03.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">John Smith</div>
                                        <div class="user-last-chat"><i class="fe fe-image"></i> Image</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">10:19 AM</div>
                                        <div class="badge badge-primary badge-pill">2</div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="media d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-04.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">Audrey</div>
                                        <div class="user-last-chat"><i class="fe fe-video"></i> Video</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">7:30 PM</div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="media read-chat d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-away">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-06.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">David</div>
                                        <div class="user-last-chat"><i class="fe fe-file-text"></i> Document</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">6:59 PM</div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="media read-chat d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-05.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">Ashley</div>
                                        <div class="user-last-chat">typing...</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">11:21 AM</div>
                                    </div>
                                </div>
                            </a>
                            <div class="chat-header inner-chat-header">
                                <div>
                                    <h6>Direct Messages</h6>
                                </div>
                                <a href="javascript:void(0)" class="chat-compose">
                                    <i class="fe fe-plus"></i>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="media d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-09.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">James</div>
                                        <div class="user-last-chat">Lorem ipsum dolor</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">10:12 AM</div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="media d-flex read-chat">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-08.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">Sheila</div>
                                        <div class="user-last-chat"><i class="fe fe-image"></i> Image</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">10:19 AM</div>
                                        <div class="badge badge-primary badge-pill">2</div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="media d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-10.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div>
                                        <div class="user-name">Eric</div>
                                        <div class="user-last-chat"><i class="fe fe-video"></i> Video</div>
                                    </div>
                                    <div>
                                        <div class="last-chat-time">7:30 PM</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Chat User List -->

                <!-- Chat Content -->
                <div class="col-lg-7 col-xl-6 chat-cont-right d-flex">

                    <!-- Chat History -->
                    <div class="card mb-0">

                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <div class="img_cont">
                                    <img class="rounded-circle user_img"
                                        src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}" alt="">
                                </div>
                                <div class="user_info">
                                    <span>John Steven</span>
                                    <p class="mb-0 active">Online</p>
                                </div>
                            </div>
                            <div class="chat-options">
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="fe fe-volume-2"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fe fe-search"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fe fe-video"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fe fe-user" id="task_chat"></i></a></li>
                                    <li><a href="javascript:void(0);" class="with-bg"><i
                                                class="fe fe-more-horizontal"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body msg_card_body chat-scroll pt-0">
                            <ul class="list-unstyled">
                                <li class="chat-date mt-0"><span>Yesterday</span></li>
                                <li class="media received d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="msg-box">
                                            <div>
                                                <ul class="chat-msg-info">
                                                    <li>John Steven</li>
                                                    <li>
                                                        <span class="chat-time">8:55 PM</span>
                                                        <div class="drop-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                aria-expanded="false" class="">
                                                                <i class="fe fe-more-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-trash-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt ut
                                                    labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media sent d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('admin_assets/img/provider/provider-01.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="msg-box">
                                            <div>
                                                <ul class="chat-msg-info">
                                                    <li>John Smith</li>
                                                    <li>
                                                        <div class="drop-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                aria-expanded="false" class="">
                                                                <i class="fe fe-more-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-trash-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                        <span class="chat-time">8:55 PM</span>
                                                    </li>
                                                </ul>
                                                <p>Sed ut perspiciatis unde omnis iste natus error accusantium doloremque
                                                    laudantium</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media received d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="msg-box">
                                            <div>
                                                <ul class="chat-msg-info">
                                                    <li>John Steven</li>
                                                    <li>
                                                        <span class="chat-time">8:55 PM</span>
                                                        <div class="drop-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                aria-expanded="false" class="">
                                                                <i class="fe fe-more-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-trash-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="chat-msg-attachments">
                                                    <div class="chat-attachment">
                                                        <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                            alt="Attachment">
                                                        <a href="" class="chat-attach-download">
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                    </div>
                                                    <div class="chat-attachment">
                                                        <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                            alt="Attachment">
                                                        <a href="" class="chat-attach-download">
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media sent d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('admin_assets/img/provider/provider-01.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="msg-box">
                                            <div>
                                                <ul class="chat-msg-info">
                                                    <li>John Smith</li>
                                                    <li>
                                                        <div class="drop-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                aria-expanded="false" class="">
                                                                <i class="fe fe-more-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-trash-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                        <span class="chat-time">8:55 PM</span>
                                                    </li>
                                                </ul>
                                                <div class="chat-file-attachments">
                                                    <div class="chat-file-attach">
                                                        <div class="chat-file-icon">
                                                            <i class="fe fe-file-text"></i>
                                                        </div>
                                                        <div class="chat-file-info">
                                                            <h6>admin_v1.0.zip</h6>
                                                            <p>25mb Seprate file</p>
                                                        </div>
                                                    </div>
                                                    <a href="" class="chat-file-download">
                                                        <i class="fe fe-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media received d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="msg-box">
                                            <div>
                                                <ul class="chat-msg-info">
                                                    <li>John Steven</li>
                                                    <li>
                                                        <span class="chat-time">8:55 PM</span>
                                                        <div class="drop-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                aria-expanded="false" class="">
                                                                <i class="fe fe-more-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-trash-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>You wait for notice.</p>
                                                <p>Consectetuorem ipsum dolor sit?</p>
                                                <p>Ok?</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-date"><span>Today</span></li>
                                <li class="media sent d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ URL::asset('admin_assets/img/provider/provider-01.jpg') }}"
                                            alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="msg-box">
                                            <div>
                                                <ul class="chat-msg-info">
                                                    <li>John Smith</li>
                                                    <li>
                                                        <div class="drop-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                aria-expanded="false" class="">
                                                                <i class="fe fe-more-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-trash-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                        <span class="chat-time">8:55 PM</span>
                                                    </li>
                                                </ul>
                                                <div class="msg-highlight">
                                                    <a href="javascript:void(0);">Sed ut perspiciatis unde omnis iste natus
                                                        error accusantium doloremque laudantium</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="card-footer">
                            <div class="input-group">
                                <div class="btn-file btn">
                                    <i class="fa fa-plus fs-14"></i>
                                    <input type="file">
                                </div>
                                <input class="form-control type_msg mh-auto empty_check"
                                    placeholder="Write your message...">
                                <div class="send-action">
                                    <a href="javascript:void(0);"><i class="fa fa-smile"></i></a>
                                    <a href="javascript:void(0);"><i class="fe fe-mic"></i></a>
                                    <button class="btn btn-primary btn_send"><i class="fa fa-paper-plane"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /Chat Content -->

                <!-- Chat Profile -->
                <div class="col-xl-3 chat-cont-profile d-flex" id="task_window">
                    <div class="card mb-sm-3 mb-md-0 flex-fill">
                        <div class="card-header">
                            <div class="profile-wrap">
                                <div class="chat-profile">
                                    <div class="chat-profile-img">
                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="chat-profile-info">
                                        <h6>John Doe</h6>
                                        <p>Newyork</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fe fe-mail"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fe fe-phone"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chat-pro-list">
                                <ul>
                                    <li>
                                        <span class="role-title"><i class="fa fa-briefcase"></i>Company</span><span
                                            class="role-info">Company Name</span>
                                    </li>
                                    <li>
                                        <span class="role-title"><i class="fa fa-user"></i>Role</span><span
                                            class="role-info">Co-founder</span>
                                    </li>
                                    <li>
                                        <span class="role-title"><i class="fa fa-phone"></i>Phone</span><span
                                            class="role-info">+1 123 456 7890</span>
                                    </li>
                                    <li>
                                        <span class="role-title"><i class="fa fa-envelope"></i>Email</span><span
                                            class="role-info">info@johnsteven.com</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-media">
                                <div class="chat-media-title">
                                    <h6>Shared Media</h6>
                                    <span>(3475 items)</span>
                                </div>
                                <div class="media-list">
                                    <ul class="nav">
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#chat-photo" class="active">Photos</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#chat-file">File</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#chat-vdo">Video</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#chat-link">Link</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content pt-0">
                                    <div class="tab-pane active" id="chat-photo">
                                        <div class="photo-list">
                                            <ul>
                                                <li>
                                                    <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                        alt="img">
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                        alt="img">
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('admin_assets/img/services/service-05.jpg') }}"
                                                        alt="img">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="chat-vdo">
                                        <div class="photo-list">
                                            <ul>
                                                <li>
                                                    <img src="{{ URL::asset('admin_assets/img/services/service-01.jpg') }}"
                                                        alt="img">
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                        alt="img">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="chat-file">
                                        <div class="photo-file">
                                            <ul>
                                                <li>
                                                    <i class="fe fe-file-text me-2"></i> admin_v1.0.zip
                                                </li>
                                                <li>
                                                    <i class="fe fe-file-text me-2"></i> test.pdf
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="chat-link">
                                        <div class="photo-link">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fe fe-link-2 me-2"></i> Sed ut
                                                        perspiciatis</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fe fe-link-2 me-2"></i>
                                                        https:example.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-notification">
                                    <ul>
                                        <li>
                                            <p><i class="fa fa-bell"></i> Notifications</p>
                                            <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                                <input type="checkbox" id="status_1" class="check" checked="">
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-star"></i> Add To Favourites</p>
                                            <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                                <input type="checkbox" id="status_2" class="check" checked="">
                                                <label for="status_2" class="checktoggle">checkbox</label>
                                            </div>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-volume-mute"></i> Mute</p>
                                            <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                                <input type="checkbox" id="status_3" class="check">
                                                <label for="status_3" class="checktoggle">checkbox</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear-list">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fe fe-trash-2"></i>Clear Chat</a></li>
                                        <li><a href="javascript:void(0);"><i class="fe fe-external-link"></i>Export
                                                Chat</a></li>
                                        <li><a href="javascript:void(0);"><i class="fe fe-alert-circle"></i>Report
                                                Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Chat Content -->

            </div>

        </div>
    </div>
@endsection
