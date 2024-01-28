@extends('frontend.layout.header') 
@section('css')
@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
<section class="breadcrumb-outer text-center">
   <div class="container">
      <div class="breadcrumb-content">
         <h2>How It Works</h2>
         <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">How It Works</li>
            </ul>
         </nav>
      </div>
   </div>
   <div class="section-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<section class="contact">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <!--Info Section START-->
            <div class="pl-30-md">
               <div class="section-heading text-left mt-5">
                  <h1>How it works ?</h1>
                  <h3>Shopping at any China online stores becomes easy with our ShipForMe service!<br><br>
                     Only 5 steps for an international shopping!
                  </h3>
               </div>
            </div>
            <div class="pl-30-md">
               <div class="section-heading text-center mt-5">
                  <img src="https://shopaway.pk/images/how_it_work.png" alt="">
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <div class="pl-30-md">
                     <div class="how_work">
                        <dl>
                           <h4><b>Step 1 : </b>Register on Shopaway.pk and get your China mailing address.</h4>
                           <p>Click “<a href="http://crm.shopaway.pk/en">register</a>”on the top of our website or click  “<a href="http://crm.shopaway.pk/en">get your China mailing address</a>” on the home page. You will get your China mail address with a unique mailbox number linked with your account.</p>
                        </dl>
                        <dl>
                           <h4><b>Step 2 : </b>Shop with China online retailers. &nbsp;</h4>
                           <p>Feel free to buy your favorite products from thousands of online retailers in the China such as Ali Baba & Ali Express etc. Enter your allotted China address in FORM. Don’t forget to put your mailbox number in the address. Incorrect or missing mailbox number will result in process delay or package returning to sender.</p>
                        </dl>
                        <dl>
                           <h4><b>Step 3 : </b>When your items are delivered to Shopaway warehouse</h4>
                           <p>We will contact you when your shipments arrive at our warehouse.</p>
                        </dl>
                        <dl>
                           <h4><b>Step 4 : </b>Submit shipment request and pay the estimated shipping fee.</h4>
                           <p>When you see that your goods are shipped to the shop warehouse, you may send a shipment order. You are directed to pay the approximate delivery fee by way of your comfortable mean and currency based on the weight and size of your packages. In order to reduce the amount of money we will consolidate your packages.</p>
                        </dl>
                        <dl>
                           <h4><b>Step 5 : </b>Send out your Package.</h4>
                           <p style="background: none;">Once your payment is confirmed, our shipping expert will consolidate your packages and ship them to your designated address. You will receive your goods at your door step.</p>
                        </dl>
                        <div class="btom_text">
                           <p><strong>Some information may be important for you：</strong></p>
                           <p>Shipping cost is determined by the greater of the actual weight or the dimensional weight (Dim Weight or Volumetric Weight). Actual Weight is the weight of the package when put on a scale. Dimensional Weight is based on the size of the package. Large items that have a small Actual Weight, like pillows and lamp shades, will have a larger Dimensional Weight. Generally, the DIM weight is calculated as follows (in pounds):</p>
                           <p><strong style="font-size: 12px; margin-top: 10px; margin-bottom: 10px;">DIM weight = (Length X Height X Width) /139 </strong></p>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Info section END-->
            </div>
         </div>
      </div>
</section>
</div>
@endsection
@section('js')
@endsection