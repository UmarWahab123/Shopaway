@extends('frontend.layout.header') 
@section('css')
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
   <section class="breadcrumb-outer text-center">
      <div class="container">
         <div class="breadcrumb-content">
            <h2>Track Shipment</h2>
            <nav aria-label="breadcrumb">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Track Shipment</li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="section-overlay"></div>
   </section>
   <!-- BreadCrumb Ends -->
   <section class="contact">
      <div class="container">
           <div class="row ml-3">
            <div class="col-md-12">
               <div>
                  <h3>Type your full tracking number to get the tracking data.</h3>
               </div>
            </div>
         </div>
         <div class="row ml-5">
            <div class="col-lg-12">
               <form id="shipment_form" action="{{url('/savecontact')}}" class="primary-form-2 mt-60 mb-45">
                  <input type="hidden" name="_token" value="1rZN6my1BqNZrhsXjeS86GAJyPhrXBRWxxGwX2de">
                  <div class="row">
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Shipment Type</label>
                        <select name="contractor" class="form-control main_cat" data-option-id="{{(isset($data['results']->contractor) ? $data['results']->contractor : '')}}" required>
                          <option value="">Select</option>
                          <option>Track Local Shipment</option>
                          <option>Track International Shipment</option>
                        </select>
                     </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Track Shipment</label>
                           <input type="search" name="search" class="form-control" placeholder="Type your full tracking number here">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label><b></b></label><br>
                        <a href="javascript:void(0);" type="submit" class="btn-blue btn-red mt-2">SEARCH</a>
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
@endsection