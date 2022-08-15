@extends('layouts.back')

@section('style')

@endsection

@section('content')
    <div class="container">
        <!--begin::Card-->

        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">

                <div class="card-body d-flex justify-content-between pb-0">
                    <h3>Yeni Kayıt</h3>
                    <a href="{{url()->previous()}}" class="btn btn-success mr-2">Geri Dön</a>
                </div>
            </div>
            <div class="card-body">
                <form class="form" id="create_form" enctype="multipart/form-data" method="POST"
                      action="{{route('admin.control.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="name" class="form-control form-control-solid"
                                   placeholder="sayfa başlığı"/>
                            <span class="form-text text-muted"></span>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Sıra</label>
                                <input type="number" name="sorted" value="999" class="form-control form-control-solid"/>
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="col-lg-6">
                                <label>Template</label>
                                <select class="form-control form-control-solid" name="block_id">
                                    <option value="">Seçiniz</option>
                                    <option value="1">Sayfa</option>
                                    <option value="2">İletişim</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-12">
                                <label>Url</label>
                                <input type="text" name="url" class="form-control form-control-solid"
                                       placeholder="harici url"/>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Özet</label>
                            <textarea class="form-control form-control-solid" name="description" id="" cols="30"
                                      rows="3"></textarea>
                            <span class="form-text text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="contents" class="form-control form-control-solid" id="contents"></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12 py-5"><label>Resim Yükle</label></div>

                            <div class="col-lg-4">
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
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="remove" data-toggle="tooltip" title="Resmi sil">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="image-input image-input-outline" id="kt_image_5"
                                     style="">
                                    <div class="image-input-wrapper"
                                         style="background-image: url({{asset('assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Resmi değiştir">
                                        <i class="ki ki-plus text-muted"></i>
                                        <input type="file" id="file2" name="file2" accept=".png, .jpg, .jpeg"/>

                                    </label>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="remove" data-toggle="tooltip" title="Resmi sil">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="image-input image-input-outline" id="kt_image_6"
                                     style="">
                                    <div class="image-input-wrapper"
                                         style="background-image: url({{asset('assets/admin/media/svg/icons/Files/image_back.png')}})"></div>
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Resmi değiştir">
                                        <i class="ki ki-plus text-muted"></i>
                                        <input type="file" id="file3" name="file3" accept=".png, .jpg, .jpeg"/>

                                    </label>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="remove" data-toggle="tooltip" title="Resmi sil">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                </div>
                            </div>
                        </div>
                        <h2 class="py-5">Seo Ayarları</h2>
                        <div class="form-group">
                            <label>Seo Link</label>
                            <input type="text" name="seo_link" class="form-control form-control-solid"
                                   placeholder="seo link"/>
                            <span class="form-text text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label>Seo Başlık</label>
                            <input type="text" name="seo_title" class="form-control form-control-solid"
                                   placeholder="seo başlık"/>
                            <span class="form-text text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label>Seo Açıklama</label>
                            <textarea class="form-control form-control-solid" name="seo_description" id="" cols="30"
                                      rows="3"></textarea>
                            <span class="form-text text-muted"></span>
                        </div>
                        <div class="form-group">
                            <label>Seo Anahtar Kelime</label>
                            <input type="email" name="seo_keywords" class="form-control form-control-solid"
                                   placeholder="seo anahtar kelime"/>
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="card-footer">
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
        </div>
        <!--end::Card-->
    </div>


@endsection

@section('script')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/admin/js/ckeditor/ckeditor.js')}}"></script>
    <!--end::Page Scripts-->

    <script>
        let avatar4 = new KTImageInput('kt_image_4');
        let avatar5 = new KTImageInput('kt_image_5');
        let avatar6 = new KTImageInput('kt_image_6');

        CKEDITOR.replace('contents', {
            height: 250,
            filebrowserBrowseUrl: '{{ asset('assets/admin/js/ckeditor/ckfinder/ckfinder.html') }}',
            filebrowserUploadUrl: '{{ asset('assets/admin/js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}'
        });

        (function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#create_form').submit(function (e) {
                e.preventDefault();
                let parentId="{{$subId}}";
                let data=new FormData(this);
                data.append('id',parentId)
                $.ajax({
                    method: 'POST',
                    url: $('#create_form').attr('action'),
                    enctype: 'multipart/form-data',
                    data: data,
                    dataType:'JSON',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false
                }).done(function (response) {
                    //console.log(response);
                    let imageUrl='{{asset('assets/admin/media/svg/icons/Files/image_back.png')}}'
                    Swal.fire({
                        title:'Ok',
                        text:response.message,
                        icon:'success',
                        timer:2500
                    })
                    $('#file').val('');
                    $('#file2').val('');
                    $('#file3').val('');
                    $('.image-input-wrapper').css('background-image','url(' + imageUrl + ')');
                    $('#create_form')[0].reset();
                }).fail(function (error) {
                    console.log(error);
                })
            })
        })();
    </script>
@endsection
