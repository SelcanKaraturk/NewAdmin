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
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">All</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Canceled</option>
                                            <option value="4">Success</option>
                                            <option value="5">Info</option>
                                            <option value="6">Danger</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                        <select class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            <option value="1">Online</option>
                                            <option value="2">Retail</option>
                                            <option value="3">Direct</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">

                            <!--begin::Button-->
                            <a href="{{route('admin.control.create')}}" id="new-record" class="btn btn-primary font-weight-bolder">
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
                        <th title="Field #7">Aksiyonlar</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>

                            <td>{{$item->sorted}}</td>
                            <td>{{$item->category_language->name}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{Str::upper($item->category_language->language_slug)}}</td>
                            <td>$22672.60</td>
                            <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                            <td class="datatable-cell">
                                <span>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-clean btn-icon"
                                       title="Delete">
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
                                    <a href="javascript:void(0)" class="btn btn-sm btn-clean btn-icon"
                                       title="Delete">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                        <i class="ki ki-close icon-1x"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Başlık</label>
                                <input type="email" class="form-control form-control-solid"
                                       placeholder="Enter full name"/>
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Deneme</label>
                                    <input type="email" class="form-control form-control-solid"
                                           placeholder="Enter email"/>
                                    <span class="form-text text-muted"></span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Select</label>
                                    <select class="form-control form-control-solid">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-1">
                                    <label>Durumu</label>
                                    <span class="switch switch-outline switch-icon switch-success">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select"/>
                                            <span></span>
                                        </label>
                                    </span>

                                </div>
                                <div class="col-lg-11">
                                    <label>Deneme</label>
                                    <input type="email" class="form-control form-control-solid"
                                           placeholder="Enter email"/>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Başlık</label>
                                <textarea class="form-control form-control-solid" name="" id="" cols="30" rows="3"></textarea>
                                <span class="form-text text-muted"></span>
                            </div>
                            <div class="form-group">
                                <label>İçerik</label>
                                <textarea name="contents" class="form-control form-control-solid" id="contents"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
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

@endsection
