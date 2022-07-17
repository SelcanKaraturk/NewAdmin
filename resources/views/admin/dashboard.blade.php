@extends('layouts.back')

@section('style')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/admin/css/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
@endsection

@section('content')
    
@endsection

@section('script')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset('assets/admin/js/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/admin/js/widgets.js')}}"></script>
    <!--end::Page Scripts-->
    @endsection
