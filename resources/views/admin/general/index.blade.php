@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">


            </div>
            <div class="card-body">
                <div class="">
                    <div class="row">
                        <div class="col-2">
                            <ul class="nav nav-success flex-column nav-pills">
                                <li class="nav-item mb-2">
                                    <a class="nav-link active" id="home-tab-5" data-toggle="tab" href="#logo">
																			<span class="nav-icon">
																				<i class="flaticon2-chat-1"></i>
																			</span>
                                        <span class="nav-text">LOGOLAR</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link" id="profile-tab-5" data-toggle="tab" href="#profile-5"
                                       aria-controls="profile">
																			<span class="nav-icon">
																				<i class="flaticon2-layers-1"></i>
																			</span>
                                        <span class="nav-text">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab-5" data-toggle="tab" href="#contact-5"
                                       aria-controls="contact">
																			<span class="nav-icon">
																				<i class="flaticon2-rocket-1"></i>
																			</span>
                                        <span class="nav-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <div class="tab-content" id="myTabContent5">
                                <div class="tab-pane fade show active" id="logo" role="tabpanel"
                                     aria-labelledby="home-tab-5">

                                    <form class="form ml-20" id="create_form" enctype="multipart/form-data" method="POST"
                                          action="{{route('admin.control.store')}}">
                                        @csrf

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Menü Logo:</label>
                                                <div class="col-lg-6">
                                                    <div class="image-input image-input-outline" id="kt_image_4"
                                                         style="">
                                                        <div class="image-input-wrapper"
                                                             style="background-image: url({{asset('assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                                        <label
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="change" data-toggle="tooltip" title=""
                                                            data-original-title="Resmi değiştir">
                                                            <i class="ki ki-plus text-muted"></i>
                                                            <input type="file" id="file" name="file"/>

                                                        </label>

                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="cancel" data-toggle="tooltip"
                                                            title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="remove" data-toggle="tooltip"
                                                            title="Resmi sil">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Footer Logo:</label>
                                                <div class="col-lg-6">
                                                    <div class="image-input image-input-outline" id="kt_image_5"
                                                         style="">
                                                        <div class="image-input-wrapper"
                                                             style="background-image: url({{asset('assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                                        <label
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="change" data-toggle="tooltip" title=""
                                                            data-original-title="Resmi değiştir">
                                                            <i class="ki ki-plus text-muted"></i>
                                                            <input type="file" id="file" name="file"/>

                                                        </label>

                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="cancel" data-toggle="tooltip"
                                                            title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="remove" data-toggle="tooltip"
                                                            title="Resmi sil">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Favicon</label>
                                                <div class="col-lg-6">
                                                    <div class="image-input image-input-outline" id="kt_image_6"
                                                         style="">
                                                        <div class="image-input-wrapper"
                                                             style="background-image: url({{asset('assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                                        <label
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="change" data-toggle="tooltip" title=""
                                                            data-original-title="Resmi değiştir">
                                                            <i class="ki ki-plus text-muted"></i>
                                                            <input type="file" id="file" name="file"/>

                                                        </label>

                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="cancel" data-toggle="tooltip"
                                                            title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="remove" data-toggle="tooltip"
                                                            title="Resmi sil">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="float-right">
                                            <button type="submit" class="btn btn-success mr-2">
                                                <a class="btn btn-icon btn-light-success btn-xs pulse pulse-success">
                                                    <i class="flaticon2-checkmark"></i>
                                                    <span class="pulse-ring"></span>
                                                </a>
                                                Kaydet
                                            </button>
                                        </div>
                                    </form>


                                </div>
                                <div class="tab-pane fade" id="profile-5" role="tabpanel"
                                     aria-labelledby="profile-tab-5">
                                    Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Id
                                    id
                                    reprehenderit sit est eu aliquad. Ipsum dolor in occaecat commodo et voluptate minim
                                    reprehenderit mollit pariatur.
                                </div>
                                <div class="tab-pane fade" id="contact-5" role="tabpanel"
                                     aria-labelledby="contact-tab-5">
                                    Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.
                                    Ipsum
                                    dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
