@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/select/select2.min.css')}}">
@endsection
  @section('breadcrumb')
   <h2 class="content-header-title float-left mb-0">Boxes</h2>
   <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('admin/boxes')}}">Box</a>
         </li>
         <li class="breadcrumb-item"><a href="#">{{$data['page_title']}}</a>
         </li>
      </ol>
   </div>
   @endsection
   @section('content')
   <div class="content-body">
   <section id="basic-input">
   <form action="{{ url('admin/saveboxes') }}" class="" id="form_submit" method="post" enctype="multipart/form-data"> 
   {{ csrf_field() }}
   <div class="col-md-12 text-right mb-2">    
   <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
   <a href="{{url('admin/boxes')}}" class="btn btn-outline-secondary">Back</a>
   </div>
    <div class="card">
      <div class="card-body">
           <input class="form-control" name="id" type="hidden" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
             <div class="row">
               <div class="col-md-5">
                        <div class="row">                      
                              <div class="form-group m-form__group">
                                 <label>Box Name</label>
                                 <input type="text" name="box_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->box_name) ? $data['results']->box_name : '')}}" required>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group m-form__group">
                                 <label>Box Number</label>
                                 <input type="text" name="box_number" class="form-control m-input m-input--square" value="{{(isset($data['results']->box_number) ? $data['results']->box_number : '')}}" required>
                           </div>
                      </div>
                      <div class="row">
                              <div class="form-group m-form__group">
                                 <label>Orders</label>
                                 <select name="order_id[]" class="form-control tags orders" required multiple>
                                    @foreach($data['orders'] as $key=>$value)
                                    <option value="{{$value->id}}" @php if(in_array($value->id, $boxorders)) echo " selected" @endphp>{{ $value->order_number }}</option>
                                   @endforeach
                                </select>
                          </div>
                     </div>
                </div>
                <div class="col-md-7">
                   <div class="row">
                   <div class="orders-div">
                       <?=$data['orderdata']?>
                   </div>
                  </div>
                </div>
               </div>
               </div>
             </div>
          </form>  
      </section> 
 </div>          
@endsection
@section('js')
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/form-select2.js')}}"></script>
<script type="text/javascript">
   $('.box-mng').addClass('sidebar-group-active');
   $('.box-mng').addClass('active');
$( document ).ready(function() {
 
     // tags();
      $('select.tags').select2({
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: 'Select Orders'
        });
   });
     $(document).on('change','.orders',function(e){
        e.preventDefault();
        var token = $('input[name=_token]').val();
        var id=$(this).val();
         $.ajax({
                type:"post",
                headers: {'X-CSRF-TOKEN': token},
                url: "{{url('admin/getorders')}}",
                dataType: "json",
                data:{'orders_id':id},
                success:function(data)
                {
                 $('.orders-div').html(data.response);
                }
            });

         });
</script>

@endsection