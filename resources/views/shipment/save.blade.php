@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
@endsection
  @section('breadcrumb')
   <h2 class="content-header-title float-left mb-0">Shipments</h2>
   <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('admin/shipment')}}">Shipment</a>
         </li>
         <li class="breadcrumb-item"><a href="#">{{$data['page_title']}}</a>
         </li>
      </ol>
   </div>
   @endsection
   @section('content')
   <div class="content-body">
   <section id="basic-input">
   <form action="{{ url('admin/saveshipment') }}" class="" id="form_submit" method="post" enctype="multipart/form-data"> 
   {{ csrf_field() }}
   <div class="col-md-12 text-right mb-2">    
   <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
   <a href="{{url('admin/shipment')}}" class="btn btn-outline-secondary">Back</a>
   </div>
    <div class="card">
      <div class="card-body">
           <input class="form-control" name="id" type="hidden" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
             <div class="row">
               <div class="col-md-12">
                  <div class="row">  
                   <div class="col-md-4">
                    <div class="form-group m-form__group">
                        <label>Shipment Name</label>
                        <input type="text" name="shipment_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->shipment_name) ? $data['results']->shipment_name : '')}}" required>
                     </div>
                    </div>
                   <div class="col-md-4">
                    <div class="form-group m-form__group">
                       <label>Shipment Number</label>
                       <input type="text" name="shipment_number" class="form-control m-input m-input--square" value="{{(isset($data['results']->shipment_number) ? $data['results']->shipment_number : '')}}" required>
                    </div>
                    </div>
                   <div class="col-md-4">
                    <div class="form-group m-form__group">
                       <label>Packages</label>
                       <select name="package_id[]" class="form-control tags" required multiple>
                         @foreach($data['packages'] as $key=>$value)
                          <option value="{{$value->id}}" @php if(in_array($value->id, $shipmentpackages)) echo " selected" @endphp>{{ $value->package_name }}</option>
                         @endforeach
                       </select>
                   </div>
                 </div>
                </div>
                <div class="row">
               <div class="col-md-4">
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
                   <div class="col-md-4">
                    <div class="form-group m-form__group">
                       <label>Airway Bill Number</label>
                       <input type="text" name="airway_bill_num" class="form-control m-input m-input--square" value="{{(isset($data['results']->airway_bill_num) ? $data['results']->airway_bill_num : '')}}" required>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group m-form__group">
                       <label>Destination</label>
                       <input type="text" name="distination" class="form-control m-input m-input--square" value="{{(isset($data['results']->distination) ? $data['results']->distination : '')}}" placeholder="Country and City" required>
                    </div>
                </div>
            </div>
                <div class="row">
                 <div class="col-md-4">
                      <div class="form-group m-form__group">
                         <label for="pd-format">Departure date</label>
                            <input type="text" name="departure_date" id="pd-format" class="form-control format-picker" value="{{(isset($data['results']->departure_date) ? format_date($data['results']->departure_date) : '')}}" class="form-control m-input m_datepicker" placeholder="Select date" required/>
                       </div>
                    </div>
                     <div class="col-md-4">
                      <div class="form-group m-form__group">
                         <label for="pd-format">Arrival date</label>
                            <input type="text" name="arrival_date" id="pd-format" class="form-control format-picker" value="{{(isset($data['results']->arrival_date) ? format_date($data['results']->arrival_date) : '')}}" class="form-control m-input m_datepicker" placeholder="Select date" required/>
                       </div>
                    </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <label>Status</label>
                       <select name="status" class="form-control" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}" required>
                          <option value="">Select</option>
                          <option>Dispatched</option>
                          <option>In Transit</option>
                          <option>Custom Clearances</option>
                          <option>Arrived</option>
                        </select>
                      </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                  <div class="form-group m-form__group">
                     <label>Remarks</label>
                     <textarea type="text" name="remarks" rows="3" class="form-control m-input m-input--square">{{(isset($data['results']->remarks) ? $data['results']->remarks : '')}}</textarea>
                  </div>
               </div>
                </div>
                </div>
               </div>
             </div>
            </div>          
          </form>  
      </section>   
@endsection
@section('js')
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/form-select2.js')}}"></script>
<script type="text/javascript">
   $('.shipment-mng').addClass('sidebar-group-active');
   $('.shipment-mng').addClass('active');
   $( document ).ready(function() {
     // tags();
      $('select.tags').select2({
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: 'Select Packages'
        });
   });
</script>
@endsection