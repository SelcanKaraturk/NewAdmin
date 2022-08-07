@extends('layouts.back')

@section('style')
    <style>
        input:focus {
            width: 50% !important;
            position: absolute;
            /*min-height: 100px;*/
            /*top: 50%;
            left: 25%;*/
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <!--begin::Card-->

        <div class="card card-custom">
            <div class="pt-6 pb-0 pl-9"><h3>Dil Çeviri</h3></div>
            <div class="card-header flex-wrap border-0 pt-6 pb-0">

                <div class="align-items-center w-100 d-flex justify-content-between pb-0 flex-wrap">
                    <a href="" id="new-value" class="btn btn-success mr-2 mb-4 mb-sm-0">
                        <span class="svg-icon svg-icon-white svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Plus.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path
                                d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                fill="#000000"/>
                                </g>
                                </svg><!--end::Svg Icon--></span>
                        Yeni Değer Ekle</a>
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon">
						    <span class="svg-icon svg-icon-primary svg-icon-xl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
							<svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24"
                                 version="1.1">
                                <g stroke="none" stroke-width="1" fill="none"
                                   fill-rule="evenodd">
                                    <rect x="0" y="0" width="24"
                                          height="24"></rect>
                                    <path
                                        d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                        fill="#000000" opacity="0.3"></path>
                                    <path
                                        d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                        fill="#000000"
                                        fill-rule="nonzero"></path>
                                </g>
                            </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <div class="alert-text">
                            Veriyi silmek için sadece key değerini silip kaydetmeniz yeterlidir.
                        </div>
                    </div>
                    <a href="{{url()->previous()}}" class="btn btn-success mr-2">Geri Dön</a>
                </div>
            </div>
            <div class="card-body">
                <form class="form" id="create_form" method="POST"
                      action="{{route('admin.lang.value.update')}}">
                    @csrf
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            <th title="Field #1">Key</th>
                            @foreach($lang as $key=> $item)
                                <th title="Field #{{$key}}">{{$item->name}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lang_keys as $item){{--verinini key değerleri gelir--}}
                        <tr>

                            <td>
                                <input type="text" name="name[]" value="{{$item}}"
                                       class="form-control form-control-solid"/>
                                <span class="form-text text-muted"></span>
                            </td>
                            @foreach($lang as $key => $item2)
                                <td>
                                    <input type="text" name="lang[{{$key}}][]"
                                           value="{{$item2->language_value->$item??''}}"
                                           class="form-control form-control-solid"/>
                                    <span class="form-text text-muted"></span>
                                </td>

                            @endforeach

                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer pl-0">
                        <button type="submit" class="btn btn-success ">
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
    <script src="{{asset('assets/admin/js/html-table.js')}}"></script>
    <script>
        $('#new-value').click(function (e) {
            e.preventDefault();
            let style = $('#kt_datatable tbody').find('input').last().attr('style');
            $('#kt_datatable tbody').append('<tr class="datatable-row"> ' +
                '<td class="datatable-cell-sorted datatable-cell">' +
                ' <input type="text" name="name[]" value="" class="form-control form-control-solid" style="' + style + '"/>' +
                '<span class="form-text text-muted"></span>' +
                '</td>' +
                @foreach($lang as  $key=>$item)
                    '<td>' +
                '<input type="text" name="lang[{{$key}}][]" value="" class="form-control form-control-solid" style="' + style + '"/>' +
                '<span class="form-text text-muted"></span>' +
                '</td>' +
                @endforeach
                    '</tr>');
            let focus = $('#kt_datatable tbody').find('input[name="name[]"]').last().focus();


        })
    </script>
@endsection
