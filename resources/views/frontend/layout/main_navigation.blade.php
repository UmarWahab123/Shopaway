<div class="navigation">
   <div class="container">
      <div class="navigation-content">
         <div class="header_menu">
            <!-- start Navbar (Header) -->
            <nav class="navbar navbar-default navbar-sticky-function navbar-arrow sticky-top">
               <div class="logo pull-left">
                  <a href="{{url('/')}}"><img class="latest-logo" alt="Image" width="120" height="58" src="{{asset(get_settings('logo'))}}"></a>
               </div>
               <div id="navbar" class="navbar-nav-wrapper">
                  <ul class="nav navbar-nav" id="responsive-menu">
                     <li>
                        <a href="javascript:void(0);">BuyForMe<i class="fa fa-angle-down"></i></a>
                        <ul>
                           <li><a href="{{url('/item')}}">Add New Items</a></li>
                           <li><a href="{{url('/topstore')}}">Top China Stores</a></li>
                        </ul>
                     </li>
                     <li>
                      <a href="javascript:void(0);">ShipForMe<i class="fa fa-angle-down"></i></a>
                     <ul>
                        <li><a href="javascript:void(0);">Add Packages</a></li>
                        <li><a href="javascript:void(0);">Submit Shipment</a></li>
                     </ul>
                     </li>
                     <li>
                        <a href="{{url('/howitworks')}}">How It Works</a>
                     </li>
                     <li>
                      <a href="javascript:void(0);">Menu<i class="fa fa-angle-down"></i></a>
                     <ul>
                        <li><a href="{{url('/service_fee')}}">Service Fee</a></li>
                        <li><a href="{{url('/faq')}}">FAQ</a></li>
                        <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
                        <li><a href="{{url('/about_us')}}">About Us</a></li>
                     </ul>
                   </li> 
                    <li><a href="{{url('/trackshipment')}}">Track Shipment</a></li>           
                 </ul>
               </div>
               <!--/.nav-collapse -->
               <div id="slicknav-mobile"></div>
            </nav>
         </div>
      </div>
   </div>
</div>
