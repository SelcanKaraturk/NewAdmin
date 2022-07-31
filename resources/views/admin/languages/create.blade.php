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
                      action="{{route('admin.lang.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Dil</label>
                            <input type="text" name="name" class="form-control form-control-solid"
                                   placeholder="sayfa başlığı"/>
                            <span class="form-text text-muted"></span>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control form-control-solid" placeholder="Slug"/>
                                <span class="form-text text-muted"></span>
                            </div>

                        </div>

                        <div class="form-group">
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
                                        <input type="file" id="file" name="img" />

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

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mr-2">Kaydet</button>
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

        (function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#create_form').submit(function (e) {
                e.preventDefault();
                let data=new FormData(this);
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
                    $('.image-input-wrapper').css('background-image','url(' + imageUrl + ')');
                    $('#create_form')[0].reset();
                }).fail(function (error) {
                    console.log(error);
                })
            })
        })();
    </script>
@endsection
