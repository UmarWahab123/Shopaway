@extends('frontend.layout.header') 
@section('content')
<!-- Banner start -->
@include('frontend.home.banners')
<!-- Banner Ends -->
<!-- Deals -->
@include('frontend.home.deals')

<!-- Deals Ends -->
<!-- Top Destinations -->
@include('frontend.home.destinations')

<!-- Top Destination Ends -->
<!-- Trip Ad -->
@include('frontend.home.tripsAds')

<!-- Trip Ad Ends -->

<!-- Testimonials -->
@include('frontend.home.testimonials')

<!-- Testimonials Ends -->

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="productModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-dark">Product Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <div class="modal-div">

        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
   $( document ).ready(function() {
      $(document).on('click','.products_detail',function(){
        var token = $('input[name=_token]').val();
        var id = $(this).attr('data-id');
        $.ajax(
                {
                    type:"get",
                    headers: {'X-CSRF-TOKEN': token},
                    url: "{{url('/products_details')}}/"+id,
                    dataType: "json",
                    success:function(data)
                    {
                        $('.modal-div').html(data.response);

                        // $('#productModal').modal('show');

                    }

             });
           });

   });
</script>
@endsection