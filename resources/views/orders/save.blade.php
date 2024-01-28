@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-file-uploader.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
<style>input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
}

input[type=number] {
  -moz-appearance: textfield;
}</style>
@endsection
@section('breadcrumb')
   <h2 class="content-header-title float-left mb-0">Orders Management</h2>
   <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('admin/order')}}">Orders</a>
         </li>
         <li class="breadcrumb-item"><a href="#">{{$data['page_title']}}</a>
         </li>
      </ol>
   </div>
   @endsection
   @section('content')
    <div class="content-body">
      <section id="basic-input">
      <form action="{{ url('admin/saveorder') }}" class="" id="form_submit" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
      <div class="col-md-12 text-right mb-2">
         <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
         <a href="{{url('admin/order')}}" class="btn btn-outline-secondary">Back</a>
      </div>
         <div class="card">
            <div class="card-body">
               <input class="form-control" name="id" type="hidden" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
               <div class="col-md-12">
                  <div class="tab-content">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Sender Name</label>
                                 <input type="text" id="customer_name" name="sender_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->sender_name) ? $data['results']-> sender_name : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Sender Contact</label>
                                 <input type="text" name="sender_contact" class="form-control m-input m-input--square" value="{{(isset($data['results']->sender_contact) ? $data['results']->sender_contact : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                           <div class="form-group m-form__group">
                              <label>Sender Address</label>
                              <input type="text" name="sender_address"class="form-control m-input m-input--square" value="{{(isset($data['results']->sender_address) ? $data['results']->sender_address : '')}}">
                           </div>
                         </div>
                            <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Sender ID or Passport No</label>
                                 <input type="text" name="sender_id" class="form-control m-input m-input--square" value="{{(isset($data['results']->sender_id) ? $data['results']->sender_id : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Local Delivery Tracking Number</label>
                                 <input type="text" name="delivery_tracking_number"class="form-control m-input m-input--square" value="{{(isset($data['results']->delivery_tracking_number) ? $data['results']->delivery_tracking_number : '')}}">
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Receiver Name</label>
                                 <input type="text" name="receiver_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->receiver_name) ? $data['results']->receiver_name : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Receiver Contact</label>
                                 <input type="text" name="receiver_contact" class="form-control m-input m-input--square" value="{{(isset($data['results']->receiver_contact) ? $data['results']->receiver_contact : '')}}" required>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Receiver Address</label>
                                 <input type="text" name="receiver_address" class="form-control m-input m-input--square" value="{{(isset($data['results']->receiver_address) ? $data['results']->receiver_address : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Receiver ID or Passport Number</label>
                                 <input type="text" name="receiver_id" class="form-control m-input m-input--square" value="{{(isset($data['results']->receiver_id) ? $data['results']->receiver_id : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Pick Up Types</label>
                                 <select name="pick_up_types" class="form-control" data-option-id="{{(isset($data['results']->pick_up_types) ? $data['results']->pick_up_types : '')}}">
                                  <option value="">Select</option>
                                  <option>Self-pick Up Order</option>
                                  <option>Door Step Delivery</option>
                                </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Order Status</label>
                                 <select name="order_status" class="form-control" data-option-id="{{(isset($data['results']->order_status) ? $data['results']->order_status : '')}}">
                                  <option value="">Select</option>
                                  <option>Dispatched</option>
                                  <option>In Process</option>
                                  <option>Delivered</option>
                                </select>
                              </div>
                           </div>
                          <div class="col-md-6">
                           <div class="form-group">
                                <label>Shipping Mode</label>
                                <select name="shipping_mode" class="form-control" data-option-id="{{(isset($data['results']->shipping_mode) ? $data['results']->shipping_mode : '')}}">
                                  <option value="">Select</option>
                                  <option>Air</option>
                                  <option>Sea</option>
                                  <option>Land</option>
                                </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Shipping Charges</label>
                                 <input type="text" name="shipping_charges" class="form-control m-input m-input--square" value="{{(isset($data['results']->shipping_charges) ? $data['results']->shipping_charges : '')}}">
                              </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                <label>Payment Status</label>
                                <select name="payment_status" class="form-control" data-option-id="{{(isset($data['results']->payment_status) ? $data['results']->payment_status : '')}}">
                                  <option value="">Select</option>
                                  <option>Prepaid</option>
                                  <option>Postpaid</option>
                                </select>
                              </div>
                           </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                <label>Type</label>
                                <select name="type" class="form-control" data-option-id="{{(isset($data['results']->type) ? $data['results']->type : '')}}">
                                  <option value="">Select</option>
                                  <option>Inquiry</option>
                                  <option>Order</option>
                                </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label>
                                Upload Goods Picture
                                 </label>
                                 <div action="{{url('admin/upload_file?url=-public-uploads-users-dp') }}" class="dropzone" id="dropzoneupload1">
                                    <div class="dz-message">Drop files here or click to upload.</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <img class="img-fluid mt-3" src="{{isset($data['results']->goods_picture)?url('/').''.$data['results']->goods_picture:'' }}">  
                           </div>
                           <input class="form-control" name="" type="hidden" value="{{(isset($data['results']->goods_picture) ? $data['results']->goods_picture : '')}}">
                        </div>
                      </div>
                  <div class="info_div">
                    @if(isset($data['item']))
                    @foreach($data['item'] as $key=>$item)
                    <div class="info_row">
                        <div class="row">
                          <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Name</label>
                                 <input type="text" name="olditem[{{$key}}][goods_name]" class="form-control m-input m-input--square" value="{{(isset($item->goods_name) ? $item->goods_name : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Value</label>
                                 <input type="number" name="olditem[{{$key}}][goods_value]" class="form-control m-input m-input--square" value="{{(isset($item->goods_value) ? $item->goods_value : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Quantity</label>
                                 <input type="number" name="olditem[{{$key}}][goods_quantity]" class="form-control m-input m-input--square" value="{{(isset($item->goods_quantity) ? $item->goods_quantity : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Goods Weight</label>
                                 <input type="number" name="olditem[{{$key}}][goods_weight]" class="form-control m-input m-input--square" value="{{(isset($item->goods_weight) ? $item->goods_weight : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Goods CBM/Volume</label>
                              <input type="number" name="olditem[{{$key}}][goods_volume]" class="form-control m-input m-input--square" value="{{(isset($item->goods_volume) ? $item->goods_volume : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group m-form__group">
                             <label>Goods Description</label>
                               <textarea type="text" name="olditem[{{$key}}][goods_description]" rows="5" class="form-control m-input m-input--square">{{(isset($item->goods_description) ? $item->goods_description : '')}}</textarea>
                             </div>
                         </div>
                        </div>
                      <div class="col-lg-3">
                        <div class="btn-remove">
                          <label></label>
                            <a data-id="{{$item->id}}" id="btn-remove" style="cursor: pointer">Delete</a>
                        </div>
                      </div>
                        <input class="form-control oldid" name="olditem[{{$key}}][id]" type="hidden" value="{{$item->id}}">
                        <input type="hidden" name="item[{{$key}}][id]" value="{{(isset($item->id) ? $item->id : '')}}">
                    </div>
                    @endforeach
                    @else
                    <div class="info_row">
                        <div class="row">
                          <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Name</label>
                                 <input type="text" name="item[0][goods_name]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_name) ? $data['item']->goods_name : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Value</label>
                                 <input type="number" name="item[0][goods_value]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_value) ? $data['item']->goods_value : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Quantity</label>
                                 <input type="number" name="item[0][goods_quantity]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_quantity) ? $data['item']->goods_quantity : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Goods Weight</label>
                                 <input type="number" name="item[0][goods_weight]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_weight) ? $data['item']->goods_weight : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Goods CBM/Volume</label>
                                 <input type="number" name="item[0][goods_volume]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_volume) ? $data['item']->goods_volume : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group m-form__group">
                             <label>Goods Description</label>
                               <textarea type="text" name="item[0][goods_description]" rows="5" class="form-control m-input m-input--square">{{(isset($data['item']->goods_description) ? $data['item']->goods_description : '')}}</textarea>
                             </div>
                         </div>
                        </div>
                    </div>
                    <input type="hidden" name="item[0][id]" value="{{(isset($data['item']->id) ? $data['item']->id : '')}}">
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="add_button ">
                        <a id="add_field" style="cursor: pointer"><i data-feather="plus"></i></a>
                      </div>
                    </div>               
                  </div>
             </form>
         </div>
    </div>
</div>
</section>
</div>
@endsection
@section('js')
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
<script type="text/javascript">
   $('.customer-mng').addClass('sidebar-group-active');
   $('.customer-mng').addClass('active');

   $('#form_submit').validate({
       rules: {
           'role_id': {
               required: true
           },
           'first_name': {
               required: true
           },
           'last_name': {
               required: true
           },
           'email': {
               required: true,
               email: true
           },
           'cpassword': {
               equalTo: '.password'
           },
           'status': {
               required: true
           },
       }
   });
 DropzoneSinglefunc('dropzoneupload1','.png,.jpg,.jpge',1,'goods_picture');
</script>
<script type="text/javascript">
    var i =1;
    @if(isset($data['item']) && count($data['item']) > 0)
      i='{{count($data['item'])}}';
    @endif

    jQuery(document).on('click','#add_field',function(e){

       var html_content ="";
       html_content +=`
            <div class="info_row">
                  <div class="row">
                          <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Name</label>
                                 <input type="text" name="item[`+i+`][goods_name]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_name) ? $data['item']->goods_name : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Value</label>
                                 <input type="text" name="item[`+i+`][goods_value]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_value) ? $data['item']->goods_value : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Goods Quantity</label>
                                 <input type="text" name="item[`+i+`][goods_quantity]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_quantity) ? $data['item']->goods_quantity : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Goods Weight</label>
                                 <input type="text" name="item[`+i+`][goods_weight]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_weight) ? $data['item']->goods_weight : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group m-form__group">
                                 <label>Goods CBM/Volume</label>
                                 <input type="text" name="item[`+i+`][goods_volume]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_volume) ? $data['item']->goods_volume : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group m-form__group">
                             <label>Goods Description</label>
                               <textarea type="text" name="item[`+i+`][goods_description]" rows="5" class="form-control m-input m-input--square">{{(isset($data['results']->goods_description) ? $data['item']->goods_description : '')}}</textarea>
                             </div>
                         </div>
                        </div>
              <div class="row">
               <div class="remove_button">
                        <label></label>
                        <a id="remove_field" style="cursor: pointer; color:red;"><i data-feather="plus"></i><u>Click to removel the fields</u></a>
                    </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="add_button ">
                    <a id="add_field" style="cursor: pointer"><i data-feather="plus"></i></a>
                  </div>
                </div>               
              </div>            
            </div>
       `;
        
        jQuery(".info_div").append(html_content);
         i++;
    });
    jQuery(document).on('click','#remove_field',function(e){
        jQuery(this).attr('data-id');
        jQuery(this).parents('.info_row').remove();
        jQuery('#form-submit').append('<input type="hidden" name="removed_entries[]" value="' + $(this).attr('data-id') + '"/>');

        jQuery(this).parents('.info_row').find('.oldid').each(function (i, obj) {
           alert($(this).val() );
          $('#form-submit').append('<input type="hidden" name="removed_entries[]" value="' + $(this).val() + '"/>');
                
      });
      i--;

    });

  jQuery(document).on('click', '#btn-remove', function() {
            jQuery(this).parents('.info_row').remove();


            jQuery(this).parents('.info_row').find('.oldid').each(function(i, obj) {

                jQuery('#form_submit').append('<input type="hidden" name="removed_entries[]" value="' + jQuery(this).val() + '"/>');

            });

            i--;


        });

      setTimeout(function()

      { $('.main_cat').trigger('change') }, 1000);
      $(document).on('keypress', '#customer_name', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});  
</script>

@endsection