@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<style>.test{width: 50%;}</style>
@endsection
@section('breadcrumb')
<h2 class="content-header-title float-left mb-0">Shipments</h2>
<div class="breadcrumb-wrapper">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('admin/shipment')}}">Shipment</a>
      </li>
      <li class="breadcrumb-item"><a href="#">{{isset($data['shipment']->shipment_name) ? $data['shipment']->shipment_name : ''}} {{$data['page_title']}}</a>
      </li>
   </ol>
</div>
@endsection
@section('content')
<div class="content-body">
    <div class="col-md-12 text-right mb-2">
      <a href="{{url('admin/shipment')}}" class="btn btn-outline-secondary">Back</a>
      <a href="#" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 btn_print">Print</a>
   </div>
   <section id="basic-datatable">
      <h1>{{ $data['shipment']->shipment_name }}</h1>
      <h1>{{ $data['shipment']->shipmentpackages->package_name }}</h1>
   </section>
</div>
@include('includes.delete')
@endsection
@section('js')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
<script type="text/javascript">
   $('.shipment-mng').addClass('sidebar-group-active');
   $('.shipment-mng').addClass('active');
$(document).ready(function(){
   $('a.btn_print').on('click',function(){
      $('#printarea').print();
       return false;
   });
});

</script>
@endsection