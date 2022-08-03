@extends('layouts.back')

@section('style')

@endsection

@section('content')
    <div class="container">
        <!--begin::Card-->

        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">

                <div class="align-items-center w-100 d-flex justify-content-between pb-0">
                    <h3>Yeni Kayıt</h3>
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
                            @foreach($lang as $item)
                                <th title="Field #2">{{$item->name}}</th>
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
                            @foreach($lang as $key=> $item2)
                                <td>
                                    <input type="text" name="lang[{{$key}}][]" value="{{$item2->language_value->$item}}"
                                           class="form-control form-control-solid"/>
                                    <span class="form-text text-muted"></span>
                                </td>

                            @endforeach

                        </tr>
                        @endforeach
                        </tbody>
                    </table>

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
    <script src="{{asset('assets/admin/js/html-table.js')}}"></script>
@endsection
