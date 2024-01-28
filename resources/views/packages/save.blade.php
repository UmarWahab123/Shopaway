@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/select/select2.min.css')}}">
@endsection
  @section('breadcrumb')
   <h2 class="content-header-title float-left mb-0">Packages</h2>
   <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('admin/package')}}">Package</a>
         </li>
         <li class="breadcrumb-item"><a href="#">{{$data['page_title']}}</a>
         </li>
      </ol>
   </div>
   @endsection
   @section('content')
   <div class="content-body">
   <section id="basic-input">
   <form action="{{ url('admin/savepackages') }}" class="" id="form_submit" method="post" enctype="multipart/form-data"> 
   {{ csrf_field() }}
   <div class="col-md-12 text-right mb-2">    
   <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
   <a href="{{url('admin/package')}}" class="btn btn-outline-secondary">Back</a>
   </div>
    <div class="card">
      <div class="card-body">
           <input class="form-control" name="id" type="hidden" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
             <div class="row">
               <div class="col-md-12">
                        <div class="row">  
                         <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Package Name</label>
                                 <input type="text" name="package_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->package_name) ? $data['results']->package_name : '')}}" required>
                              </div>
                          </div>
                         <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Package Number</label>
                                 <input type="text" name="package_number" class="form-control m-input m-input--square" value="{{(isset($data['results']->package_number) ? $data['results']->package_number : '')}}" required>
                              </div>
                           </div>
                         <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Boxes</label>
                                 <select name="box_id[]" class="form-control tags" required multiple>
                                    @foreach($data['boxes'] as $key=>$value)
                                    <option value="{{$value->id}}" @php if(in_array($value->id, $packageboxes)) echo " selected" @endphp>{{ $value->box_name }}</option>
                                   @endforeach
                                 </select>
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
   $('.pkg-mng').addClass('sidebar-group-active');
   $('.pkg-mng').addClass('active');
   $( document ).ready(function() {
     // tags();
      $('select.tags').select2({
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: 'Select Boxes'
        });
   });
</script>

@endsection