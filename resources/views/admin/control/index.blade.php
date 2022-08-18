@extends('layouts.back')

@section('style')

@endsection

@section('content')
    <div class="container">
        <!--begin::Card-->

        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">


            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..."
                                               id="kt_datatable_search_query"/>
                                        <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Durum:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">All</option>
                                            <option value="aktif">Aktif</option>
                                            <option value="pasif">Pasif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Tür:</label>
                                        <select class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            @foreach(Block() as $item)
                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0 text-right">

                            <!--begin::Button-->
                            @php($id=\Request()->segment(4))
                            <a href="{{isset($id)? route('admin.control.created',$id) : route('admin.control.created')}}"
                               id="new-record"
                               class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<circle fill="#000000" cx="9" cy="15" r="6"/>
														<path
                                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                            fill="#000000" opacity="0.3"/>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>Yeni Ekle</a>
                            <!--end::Button-->
                            @if($id)
                            <a href="{{route('admin.control.back',$id)}}"
                               id="back"
                               class="btn btn-primary font-weight-bolder">
								<span class="svg-icon svg-icon-white svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Media\Backward.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M11.0879549,18.2771971 L17.8286578,12.3976203 C18.0367595,12.2161036 18.0583109,11.9002555 17.8767943,11.6921539 C17.8622027,11.6754252 17.8465132,11.6596867 17.8298301,11.6450431 L11.0891271,5.72838979 C10.8815919,5.54622572 10.5656782,5.56679309 10.3835141,5.7743283 C10.3034433,5.86555116 10.2592899,5.98278612 10.2592899,6.10416552 L10.2592899,17.9003957 C10.2592899,18.1765381 10.4831475,18.4003957 10.7592899,18.4003957 C10.8801329,18.4003957 10.9968872,18.3566309 11.0879549,18.2771971 Z" fill="#000000" opacity="0.3" transform="translate(14.129645, 12.002277) scale(-1, 1) translate(-14.129645, -12.002277) "/>
                                <path d="M5.08795487,18.2771971 L11.8286578,12.3976203 C12.0367595,12.2161036 12.0583109,11.9002555 11.8767943,11.6921539 C11.8622027,11.6754252 11.8465132,11.6596867 11.8298301,11.6450431 L5.08912711,5.72838979 C4.8815919,5.54622572 4.56567821,5.56679309 4.38351414,5.7743283 C4.30344325,5.86555116 4.25928988,5.98278612 4.25928988,6.10416552 L4.25928988,17.9003957 C4.25928988,18.1765381 4.48314751,18.4003957 4.75928988,18.4003957 C4.88013293,18.4003957 4.99688719,18.3566309 5.08795487,18.2771971 Z" fill="#000000" transform="translate(8.129645, 12.002277) scale(-1, 1) translate(-8.129645, -12.002277) "/>
                                </g>
                                </svg><!--end::Svg Icon-->
                                </span>
                                Geri
                            </a>
                            <!--end::Button-->
                                @endif

                        </div>

                    </div>
                </div>
                <!--end::Search Form-->
                <!--end: Search Form-->
                <!--begin: Datatable-->
                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                    <thead>
                    <tr>
                        <th title="Field #1">Sıra</th>
                        <th title="Field #2">Başlık</th>
                        <th title="Field #3">Id</th>
                        <th title="Field #4">Dil</th>
                        <th title="Field #5">Kategori Türü</th>
                        <th title="Field #6">Eklenme Tarihi</th>
                        <th title="Field #7">Aktif/Pasif</th>
                        <th title="Field #8">Aksiyonlar</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->sorted}}</td>
                            <td>{{$item->category_language->name}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{Str::upper($item->category_language->language_slug)}}</td>
                            <td>{{$item->block->name}}</td>
                            <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                            <td>
                                <span class="switch switch-md switch-outline switch-icon switch-success">
                                        <label>
                                            <input type="checkbox" id="status{{$item->id}}"
                                                   onchange="changeStatus({{$item->id}})" value="{{$item->status==='1'?'aktif':'pasif'}}"
                                                   {{$item->status==='1'?'checked':''}}  name="status"/>
                                            <span></span>
                                        </label>
                                    </span>
                            </td>
                            <td class="datatable-cell">
                                <span>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-clean btn-icon edit-btn"
                                       title="Düzenle" onclick=" edit({{$item->id}})">
                                   <span class="svg-icon svg-icon-warning svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Edit.svg--><svg
                                           xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                           width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                </a>
                                    <a href="javascript:void(0)"
                                       onclick="var result=confirm('Silmek istediğinizden emin misiniz?');
                                           if(result){
                                           deleteCategory({{$item->id}})
                                           } " class="btn btn-sm btn-clean btn-icon"
                                       title="Sil">
                                    <span class="svg-icon svg-icon-danger svg-icon-md">
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                        <rect x="0" y="0" width="24" height="24"/>
	                                        <path
                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                fill="#000000" fill-rule="nonzero"/>
	                                        <path
                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                fill="#000000" opacity="0.3"/>
	                                    </g>
	                                </svg>
	                            </span>
                                </a>
                                    <a href="{{route('admin.control.subcategory',$item->id)}}"
                                       class="btn btn-sm btn-icon"
                                       title="Alt İçerikler">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Substract.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path
                                        d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z"
                                        fill="#000000" fill-rule="nonzero"/>
                                    <path
                                        d="M10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L10.1818182,16 C8.76751186,16 8,15.2324881 8,13.8181818 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 Z"
                                        fill="#000000" opacity="0.3"/>
                                    </g>
                                    </svg><!--end::Svg Icon-->
                                    </span>
                                </a>
                                </span>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>

    <!-- Modal New Record -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header ribbon ribbon-top ribbon-ver">
                    {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
                    <div class="ribbon-target bg-warning" style="top: -2px; left: 20px;">
                        Yeni Kayıt Ekle
                    </div>
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md ml-auto" data-dismiss="modal">
                        <i class="ki ki-close icon-1x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" id="edit_form" enctype="multipart/form-data" method="post"
                          action="">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Başlık</label>
                                <input type="text" name="name" id="name" class="form-control form-control-solid"
                                       placeholder="sayfa başlığı"/>
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Sıra</label>
                                    <input type="number" name="sorted" value="999"
                                           class="form-control form-control-solid"/>
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
                                <textarea name="contents" class="form-control form-control-solid"
                                          id="contents"></textarea>
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
                                            <input type="file" id="file" name="file" value=""/>

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
                                            <input type="file" id="file2" name="file2" accept=".png, .jpg, .jpeg"
                                                   value=""/>

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
                                            <input type="file" id="file3" name="file3" accept=".png, .jpg, .jpeg"
                                                   value=""/>

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
                                <input type="text" name="seo_keywords" class="form-control form-control-solid"
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
        </div>
    </div>
@endsection

@section('script')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/admin/js/html-table.js')}}"></script>
    <script src="{{asset('assets/admin/js/control-edit.js')}}"></script>
    <!--end::Page Scripts-->
    <script>

        $('span[data-action="remove"]').on('click',function (){
            $(this).parent().find('input').attr('value','');
        });


    </script>

@endsection
