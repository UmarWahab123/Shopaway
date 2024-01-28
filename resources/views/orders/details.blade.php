@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<style>.test{width: 33%; font-size: 15px;}</style>
@endsection
@section('breadcrumb')
<h2 class="content-header-title float-left mb-0">Order</h2>
<div class="breadcrumb-wrapper">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('admin/order')}}">Orders</a>
      </li>
      <li class="breadcrumb-item"><a href="#">{{isset($data['orders']->sender_name) ? $data['orders']->sender_name : ''}} {{$data['page_title']}}</a>
      </li>
   </ol>
</div>
@endsection
@section('content')
<div class="content-body">
    <div class="col-md-12 text-right mb-2">
      <a href="{{url('admin/order')}}" class="btn btn-outline-secondary">Back</a>
      <a href="#" id="btn_print" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 btn_print">Print</a>
   </div>
   <section id="basic-datatable">
      <div class="card">
         <div class="card-body">
            <div class="col-md-12">
               <div class="tab-content" id="order-details-area">
                  <h1 class="text-center mb-3" style="text-transform: uppercase;"><b>{{isset($data['orders']->sender_name) ? $data['orders']->sender_name : ''}} {{$data['page_title']}}</b></h1>
                  <table class="table dynamic_table font-weight-bold table-bordered">
                     <tbody>
                        <tr>
                           <td class="test"><b>Order#</b></td>
                           <td>{{isset($data['orders']->order_number) ? $data['orders']->order_number : ''}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Sender Name</b></td>
                           <td>{{isset($data['orders']->sender_name) ? $data['orders']->sender_name : ''}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Sender Contact</b></td>
                           <td>{{isset($data['orders']->sender_contact) ? $data['orders']->sender_contact : ''}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Sender Address</b></td>
                           <td>{{isset($data['orders']->sender_address) ? $data['orders']->sender_address : ''}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Sender ID or Passport No</b></td>
                           <td>{{isset($data['orders']->sender_id) ? $data['orders']->sender_id : ''}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Local Delivery Tracking Number</b></td>
                           <td>{{$data['orders']->delivery_tracking_number}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Receiver Name</b></td>
                           <td>{{$data['orders']->receiver_name}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Receiver Contact</b></td>
                           <td>{{$data['orders']->receiver_contact}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Receiver Address</b></td>
                           <td>{{$data['orders']->receiver_address}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Receiver ID or Passport Number</b></td>
                           <td>{{$data['orders']->receiver_id}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Pick Up Types</b></td>
                           <td>{{$data['orders']->pick_up_types}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Shipping Mode</b></td>
                           <td>{{$data['orders']->shipping_mode}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Shipping Charges</b></td>
                           <td>{{$data['orders']->shipping_charges}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Payment Status</b></td>
                           <td>{{$data['orders']->payment_status}}</td>
                        </tr>
                         <tr>
                           <td class="test"><b>Order Status</b></td>
                           <td>{{$data['orders']->order_status}}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>Order Qr Code</b></td>
                           <td>{!!$data['orders']->order_qr_code!!}</td>
                        </tr>
                        <tr>
                           <td class="test"><b>file</b></td>
                          <td><img src="{{url('/')}}/{{$data['orders']->goods_picture}}" width="60" height="60"></td>
                        </tr>
                     </tbody>
                  </table>
                  <br>
                  <h3 Class="text-center"><b><u>ORDER ITEMS</u></b></h3><br>

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
                        @php $var=0; $var2=0; $var3=0; $var4=0; @endphp
                        @foreach($data['orders_item'] as $key=>$value)
                        @php $var += $value->goods_quantity;
                        $var2 += $value->goods_value;
                         $var3 += $value->goods_weight; 
                         $var4 += $value->goods_volume; 
                        @endphp
                        <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$value->goods_name}}</td>
                           <td>{{$value->goods_value}}</td>
                           <td>{{$value->goods_quantity}}</td>
                           <td>{{$value->goods_weight}}</td>
                           <td>{{$value->goods_volume}}</td>
                        </tr>
                        @endforeach
                         <tr>
                           <td colspan="2" class="text-center" style="font-size: 22px;"><b>Total</b></td>
                           <td>{{$var2}}</td>
                           <td>{{$var}}</td>
                           <td>{{$var3}}</td>
                           <td>{{$var4}}</td>
                        </tr>
                     </tbody>
                  </table>
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
   $('#btn_print').on('click',function(){
   $('#order-details-area').print();
    return false;
   });
});
   $('.customer-mng').addClass('sidebar-group-active');
   $('.customer-mng').addClass('active');


</script>
@endsection