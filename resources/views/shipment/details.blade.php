@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<style>.test{width: 32%; font-size: 15px;}
hr{
   border-top: 5px solid green;
}
</style>
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
      <a href="javascript:void(0);" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 btn_print">Print</a>
   </div>
   <section id="basic-datatable">
      <div class="card">
         <div class="card-body">
            <div class="col-md-12">
               <div class="tab-content" id="printarea">
                  <h1 class="text-center mb-3" style="text-transform: uppercase;"><b>{{isset($data['shipment']->shipment_name) ? $data['shipment']->shipment_name : ''}} {{$data['page_title']}}</b></h1>
                  <table class="table dynamic_table font-weight-bold table-bordered">
                     <tbody>
                        <tr>
                           <td class="test"><b>Shipment Name</b></td>
                           <td>{{isset($data['shipment']->shipment_name) ? $data['shipment']->shipment_name : ''}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Shipment Number</b></td>
                           <td>{{isset($data['shipment']->shipment_number) ? $data['shipment']->shipment_number : ''}}</td>
                         </tr>
                         <tr>
                           <td class="test"><b>Shipping Mode</b></td>
                           <td>{{isset($data['shipment']->shipping_mode) ? $data['shipment']->shipping_mode : ''}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Airway Bill Number</b></td>
                           <td>{{isset($data['shipment']->airway_bill_num) ? $data['shipment']->airway_bill_num : ''}}</td>
                        </tr>
                         <tr class="test">
                           <td><b>Destination</b></td>
                           <td>{{isset($data['shipment']->distination) ? $data['shipment']->distination : ''}}</td>
                        </tr>
                        <tr class="test">
                           <td><b>Departure Date</b></td>
                           <td>{{isset($data['shipment']->departure_date) ? date('d-m-Y', strtotime($data['shipment']->departure_date)) : ''}}</td>
                        </tr>
                        <tr class="test">
                           <td><b>Arrival Date</b></td>
                           <td>{{isset($data['shipment']->arrival_date) ? date('d-m-Y', strtotime($data['shipment']->arrival_date)) : ''}}</td>
                        </tr>
                        <tr class="test">
                           <td><b>Remarks</b></td>
                           <td>{{isset($data['shipment']->remarks) ? $data['shipment']->remarks : ''}}</td>
                        </tr>
                        <tr class="test">
                           <td><b>Shipment Qr Code</b></td>
                           <td>{!!isset($data['shipment']->shipment_qr_code) ? $data['shipment']->shipment_qr_code : ''!!}</td>
                        </tr>
                     </tbody>
                  </table><br>
                     <h2 Class="text-center"><b><u>PACKAGES</u></b></h2><br>
                      @php 
                      $grand_total_weight=0;
                      $grand_total_value=0;
                      $grand_total_quantity=0;
                      $grand_total_volume=0;
                       @endphp
                     @foreach($data['shipment']->shipmentpackages as $key=>$value)
                        <h5><b>Package Name :</b> {{$value->package->package_name}}</h5>
                        <h5><b>Package Number :</b> {{$value->package->package_number}}</h5>
                           <h3 Class="text-center" style="text-transform: uppercase;"><b><u>Boxes IN  {{$value->package->package_name}}</u></b></h3><br>
                           @foreach($value->package->packageboxes as $key2=>$value2)
                          <h5><b>Box Name :</b> {{$value2->box->box_name}}</h5>
                         <h5><b>Box Number :</b> {{$value2->box->box_number}}</h5>
                          <h3 Class="text-center" style="text-transform: uppercase;"><b><u>Orders IN {{$value2->box->box_name}}</u></b></h3><br>
                           @foreach($value2->box->boxorders as $key3=>$value3)
                             <h5><b>Order# :</b> {{$value3->order->order_number}}</h5>
                           <h5><b>Order By :</b> {{$value3->order->sender_name}}</h5>
                           <table class="table dynamic_table font-weight-bold table-bordered">
                              <thead>
                                 <tr>
                                    <th>S.No</th>
                                     <th>Goods Name</th>
                                     <th>Goods Quantity</th>
                                     <th>Goods Weight</th>
                                     <th>Goods CBM/Volume</th>
                                     <th>Goods Value</th>
                                 </tr>
                              </thead>
                              <tbody>
                              @php $goods_quantity=0; $goods_value=0; $goods_weight=0; $goods_volume=0; @endphp
                               @foreach($value3->order->ordersitem as $key4=>$value4)
                                @php 
                                  $goods_volume += $value4->goods_volume; 
                                  $goods_quantity += $value4->goods_quantity;
                                  $goods_value += $value4->goods_value;
                                  $goods_weight += $value4->goods_weight; 

                                  $grand_total_weight +=$value4->goods_weight; 
                                  $grand_total_value +=$value4->goods_value;
                                  $grand_total_quantity +=$value4->goods_quantity;
                                  $grand_total_volume+=$value4->goods_volume;
                                 @endphp
                                  <tr>
                                    <th>{{$key4+1}}</th>
                                     <td>{{$value4->goods_name}}</td>
                                     <td>{{$value4->goods_quantity}}</td>
                                     <td>{{$value4->goods_weight}}</td>
                                     <td>{{$value4->goods_volume}}</td>
                                     <td>{{$value4->goods_value}}</td>
                                 </tr>
                                @endforeach
                                   <tr>
                                    <td colspan="2" class="text-center" style="font-size: 22px;"><b>Total</b></td>
                                    <td>{{$goods_quantity}}</td>
                                    <td>{{$goods_weight}}</td>
                                    <td>{{$goods_volume}}</td>
                                    <td>{{$goods_value}}</td>
                                 </tr>
                              </tbody>
                           </table><br>
                           @endforeach
                     @endforeach
                     <hr>
                  @endforeach
                  <h5><b>Total Weight =</b> {{$grand_total_weight}}</h5>
                  <h5><b>Total Value =</b>  {{$grand_total_value}}</h5>
                  <h5><b>Total Quantity =</b> {{$grand_total_quantity}}</h5>
                  <h5><b>Total Volume =</b>{{$grand_total_volume}}</h5>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@include('includes.delete')
@endsection
@section('js')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
      $('a.btn_print').on('click',function(e){
         $('#printarea').print();
          return false;
      });
   });
   $('.shipment-mng').addClass('sidebar-group-active');
   $('.shipment-mng').addClass('active');
   
</script>
@endsection