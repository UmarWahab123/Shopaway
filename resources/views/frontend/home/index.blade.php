@extends('frontend.layout.header') 
@section('css')
@endsection

@section('content')
<!-- Banner start -->
@include('frontend.home.banners')
<!-- Banner Ends -->
<!--* bucket*-->
@include('frontend.home.services')
<!--* End bucket*-->
<!-- Popular Packages --> 
@include('frontend.home.packages')
<!-- End Popular Packages --> 

<!-- Trip Ad -->
@include('frontend.home.tripsAds')

<!-- Trip Ad Ends -->

@include('frontend.home.trusted_customer')

@endsection

@section('js')
@endsection