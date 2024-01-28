@extends('frontend.layout.header')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{asset('/frontend/css/dropzone.css')}}" rel="stylesheet" type="text/css">
<style>input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
}
input[type=number] {
  -moz-appearance: textfield;
}</style>

@endsection
@section('content')

<!-- Breadcrumb -->

<div class="container">

    <section class="breadcrumb-outer text-center">

        <div class="container">

            <div class="breadcrumb-content">

                <h2>Add New Items</h2>

                <nav aria-label="breadcrumb">

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Add New Item</li>

                    </ul>

                </nav>

            </div>

        </div>

        <div class="section-overlay"></div>

    </section>

    <!-- BreadCrumb Ends -->
<section class="contact">
<div class="container p-5">
    <h1>BuyForMe Service</h1>
<div class="row">
    <div class="col-lg-12">
        <div id="contact-form" class="contact-form">
            <div id="contactform-error-msg"></div>
         <form class="" id="form_submit" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
    <h4>Please Enter Your Information</h4>
     <input type="hidden" name="type" class="form-control" value="Inquiry">
               <div class="row">
                  <div class="form-group col-lg-4">
                     <label>Name:</label>
                     <input type="text" name="sender_name" class="form-control" id="user_name" placeholder="Enter full name" required>
                  </div>
                  <div class="form-group col-lg-4">
                     <label>Email:</label>
                     <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                  </div>
                  <div class="form-group col-lg-4 col-left-padding">
                     <label>Phone Number:</label>
                     <input type="number" name="sender_contact" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required onkeypress="return isNumberKey(event)">
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label><b>Upload Picture</b></label>
                        <div action="{{url('admin/upload_file?url=-public-uploads-users-dp')}}" class="dropzone" id="dropzoneupload1">
                           <div class="dz-message">Drop files here or click to upload.</div>
                        </div>
                     </div>
                     <input class="form-control" name="file" type="hidden" value="{{(isset($data['results']->file) ? $data['results']->file : '')}}">
                  </div>
               </div>
    <h4>Please Enter Item Option Information</h4>
               <div class="info_div">
                  @if(isset($data['item']))
                  @foreach($data['item'] as $key=>$item)
                    <div class="info_row">
                        <div class="row">
                          <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Item Name</label>
                                 <input type="text" name="olditem[{{$key}}][goods_name]" class="form-control m-input m-input--square" value="{{(isset($item->goods_name) ? $item->goods_name : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Unit Price</label>
                                 <input type="number" name="olditem[{{$key}}][goods_value]" class="form-control m-input m-input--square" value="{{(isset($item->goods_value) ? $item->goods_value : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Quantity</label>
                                 <input type="number" name="olditem[{{$key}}][goods_quantity]" class="form-control m-input m-input--square" value="{{(isset($item->goods_quantity) ? $item->goods_quantity : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Colour</label>
                                 <input type="text" name="olditem[{{$key}}][colour]" class="form-control m-input m-input--square" value="{{(isset($item->colour) ? $item->colour : '')}}">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Size/model</label>
                              <input type="number" name="olditem[{{$key}}][goods_volume]" class="form-control m-input m-input--square" value="{{(isset($item->goods_volume) ? $item->goods_volume : '')}}">
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Item Url</label>
                              <input type="text" name="olditem[{{$key}}][url]" class="form-control m-input m-input--square" value="{{(isset($item->url) ? $item->url : '')}}">
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
                                 <label>Item Name</label>
                                 <input type="text" name="item[0][goods_name]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_name) ? $data['item']->goods_name : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Unit Price</label>
                                 <input type="number" name="item[0][goods_value]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_value) ? $data['item']->goods_value : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Quantity</label>
                                 <input type="number" name="item[0][goods_quantity]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_quantity) ? $data['item']->goods_quantity : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Colour</label>
                                 <input type="text" name="item[0][colour]" class="form-control m-input m-input--square" value="{{(isset($data['item']->colour) ? $data['item']->colour : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Size/model</label>
                                 <input type="number" name="item[0][goods_volume]" class="form-control m-input m-input--square" value="{{(isset($data['item']->goods_volume) ? $data['item']->goods_volume : '')}}">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Item Url</label>
                                 <input type="text" name="item[0][url]" class="form-control m-input m-input--square" value="{{(isset($data['item']->url) ? $data['item']->url : '')}}">
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
                        <a id="add_field" style="cursor: pointer"><i class="fa fa-plus"></i></a>
                     </div>
                  </div>
               </div>
            <div class="row mb-5">
               <div class="col-md-4 ml-3">
                  <button type="submit" class="btn-blue btn-red customer-form-submit">Submit</button>
               </div>
            </div>
         </form>
             </div>
         </div>

      </div>
   </div>
</div>
</section>
</div>
@endsection
@section('js')
<script src="{{asset('/frontend/js/dropzone.js')}}"></script>
<script src="{{asset('/frontend/js/dropzonescript.js')}}"></script>
<script src="{{asset('/frontend/js/jquery-ui.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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
                                 <label>Item Name</label>
                                 <input type="text" name="item[`+i+`][goods_name]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_name) ? $data['item']->goods_name : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Unit Price</label>
                                 <input type="text" name="item[`+i+`][goods_value]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_value) ? $data['item']->goods_value : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Quantity</label>
                                 <input type="text" name="item[`+i+`][goods_quantity]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_quantity) ? $data['item']->goods_quantity : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Colour</label>
                                 <input type="text" name="item[`+i+`][colour]" class="form-control m-input m-input--square" value="{{(isset($data['results']->colour) ? $data['item']->colour : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Size/model</label>
                                 <input type="text" name="item[`+i+`][goods_volume]" class="form-control m-input m-input--square" value="{{(isset($data['results']->goods_volume) ? $data['item']->goods_volume : '')}}">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Item Url</label>
                                 <input type="text" name="item[`+i+`][url]" class="form-control m-input m-input--square" value="{{(isset($data['results']->url) ? $data['item']->url : '')}}">
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
   
   
   //Ajax call
   $(document).ready(function(){
   $('#form_submit').submit(function (e) {
   e.preventDefault();
   var token = $('input[name=_token]').val();
   $(".customer-form-submit").attr("disabled", true).html('Processing...');
   var formdata = $('#form_submit').serialize();
   $.ajax(
     {
       type: "post",
       headers: {
         'X-CSRF-TOKEN': token
       },
       url: "{{url('/saveitem') }}",
       data: formdata,
       success: function (data)
       {
         Swal.fire({
           icon: 'success',
           title: 'Success',
           text: 'Thank you for filling out the form. We have sent you a confirmation email with your details',

         },
      
         );
         $('#form_submit')[0].reset();
         $(".customer-form-submit").attr("disabled", false).html('Submit');
       }
     });
   
   });
   
   
   });
</script>
@endsection