@extends('frontend.layout.header') 
@section('css')
<link href="{{asset('/frontend/css/hotel.css')}}" rel="stylesheet" type="text/css">

@endsection
@section('content')
<!-- Breadcrumb -->
<div class="container">
   <section class="breadcrumb-outer text-center">
      <div class="container">
         <div class="breadcrumb-content">
            <h2>Top China Stores</h2>
            <nav aria-label="breadcrumb">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Top China Stores</li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="section-overlay"></div>
   </section>

   <!-- BreadCrumb Ends -->
   <section class="popular-packages pad-bottom-80">
        <div class="container">
            <div class="section-title">
                <h2>Top Online <span>Shopping Stores in China </span></h2>
                <p>For international shoppers, Shopaway buys clothing, shoes and everything from China online shopping sites ,then forward or ship packages to your doorstep!</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="package-item">
                        <img src="https://shopaway.pk/images/20180924193012246.png" alt="img" alt="Image">
                        <div class="package-content">
                            <h5><span>-10%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item">
                        <img src="https://shopaway.pk/images/20180921031142230.jpg" alt="Image">
                        <div class="package-content">
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item">
                        <img src="https://shopaway.pk/images/20140425102225735.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>Hot<span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                           <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408171632260.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                           <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408143816881.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>Sale</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408123058478.jpg" alt="Image">
                        <div class="package-content">
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408171632260.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408143816881.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>Sale</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408123058478.jpg" alt="Image">
                        <div class="package-content">
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140408113230439.jpg" alt="Image">
                        <div class="package-content">
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140404173340523.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20180924192856996.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140331164900378.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140331151524607.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140331135933314.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325100956265.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325100612826.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325100325703.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325095046395.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325094420025.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325094038617.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140325093636104.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324180109123.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324174414757.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324173915937.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324173626576.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324173216039.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324172836200.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324172242793.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324165628489.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324165018672.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324164442283.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324164155931.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324163346496.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324160726650.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324160418200.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324160052564.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324155801937.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324155348934.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324155047294.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324154627936.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324154246287.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324153911155.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324153555959.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324152940420.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324152334954.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324150049139.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324143546725.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140324140518859.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140314121343517.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140306143325257.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140306142911613.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140306141504624.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140305161820217.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140424110507651.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140305154800792.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140305154312409.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140305153025936.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140305151644129.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="package-item mar-top-30">
                        <img src="https://shopaway.pk/images/20140305144429527.jpg" alt="Image">
                        <div class="package-content">
                            <h5><span>-15%</span></h5>
                            <h3><a href="javascript:void(0);">Dummy Product Name</a></h3>
                            <p><span class="oldprice">$200</span> $159</p>
                        </div>
                    </div>
                </div>
















            </div>
        </div>
    </section>
</div>

@endsection
@section('js')
<script src="{{asset('/frontend/js/rangeslider.js')}}"></script>
@endsection