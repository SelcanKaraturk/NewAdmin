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
                                <li class="nav-item mb-10">
                                    <a class="nav-link active" id="home-tab-5" data-toggle="tab" href="#logo">
																			<span class="nav-icon">
																				<i class="flaticon-star"></i>
																			</span>
                                        <span class="nav-text">LOGOLAR</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-10">
                                    <a class="nav-link" id="profile-tab-5" data-toggle="tab" href="#profile-5"
                                       aria-controls="profile">
																			<span class="nav-icon">
																				<i class="flaticon2-layers-1"></i>
																			</span>
                                        <span class="nav-text">İLETİŞİM</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-10">
                                    <a class="nav-link" id="contact-tab-5" data-toggle="tab" href="#contact-5"
                                       aria-controls="contact">
																			<span class="nav-icon">
																				<i class="flaticon2-rocket-1"></i>
																			</span>
                                        <span class="nav-text">SOSYAL MEDYA</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <div class="tab-content" id="myTabContent5">
                                <div class="tab-pane fade show active" id="logo" role="tabpanel"
                                     aria-labelledby="home-tab-5">

                                    <form class="form ml-20" id="create_form" enctype="multipart/form-data"
                                          method="POST"
                                          action="{{route('admin.general.store')}}">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Menü Logo:</label>
                                            <div class="col-lg-6">
                                                <div class="image-input image-input-outline" id="kt_image_4"
                                                     style="">
                                                    <div class="image-input-wrapper"
                                                         style="background-image: url({{asset($language->settings->logo??'assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Resmi değiştir">
                                                        <i class="ki ki-plus text-muted"></i>
                                                        <input type="file" id="file"
                                                               value="{{$language->settings->logo??''}}" name="logo"/>

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
                                                         style="background-image: url({{asset($language->settings->footer_logo??'assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Resmi değiştir">
                                                        <i class="ki ki-plus text-muted"></i>
                                                        <input type="file" id="file" name="footer_logo"
                                                               value="{{$language->settings->footer_logo??''}}"/>

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
                                                         style="background-image: url({{asset($language->settings->favicon??'assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Resmi değiştir">
                                                        <i class="ki ki-plus text-muted"></i>
                                                        <input type="file" id="file" name="favicon"
                                                               value="{{$language->settings->favicon??''}}"/>

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

                                        <input type="hidden" name="logo">
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

                                    <form class="form" id="" enctype="multipart/form-data" method="POST"
                                          action="{{route('admin.general.store')}}">
                                        @csrf

                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Telefon</label>
                                                <input type="text" name="contact[phone]"
                                                       value="{{$language->settings->contact_fields->phone}}"
                                                       class="form-control form-control-solid"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Telefon 2</label>
                                                <input type="text" name="contact[phone2]"
                                                       value="{{$language->settings->contact_fields->phone2}}"
                                                       class="form-control form-control-solid"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Email</label>
                                                <input type="text" name="contact[email]"
                                                       value="{{$language->settings->contact_fields->email}}"
                                                       class="form-control form-control-solid"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Email</label>
                                                <input type="text" name="contact[email2]"
                                                       value="{{$language->settings->contact_fields->email2}}"
                                                       class="form-control form-control-solid"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Adres</label>
                                            <textarea class="form-control form-control-solid" name="contact[address]"
                                                      id="" cols="30"
                                                      rows="3">{{$language->settings->contact_fields->address}}</textarea>
                                            <span class="form-text text-muted"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Harita iframe</label>
                                            <textarea class="form-control form-control-solid" name="contact[map]" id=""
                                                      cols="30"
                                                      rows="3">{{$language->settings->contact_fields->map}}</textarea>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <input type="hidden" name="connect">

                                        <div class="">
                                            <button type="submit" class="btn btn-success mr-2 float-right">
                                                <a class="btn btn-icon btn-light-success btn-xs pulse pulse-success">
                                                    <i class="flaticon2-checkmark"></i>
                                                    <span class="pulse-ring"></span>
                                                </a>
                                                Kaydet
                                            </button>
                                        </div>

                                    </form>

                                </div>
                                <div class="tab-pane fade" id="contact-5" role="tabpanel"
                                     aria-labelledby="contact-tab-5">
                                    Geliştirme Aşamasında :)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        let avatar4 = new KTImageInput('kt_image_4');
        let avatar5 = new KTImageInput('kt_image_5');
        let avatar6 = new KTImageInput('kt_image_6');
    </script>
@endsection
