@extends('layout.header');
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/charts/chart-apex.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
@endsection
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin/Home')}}">Home</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
<div class="content-body">
    <section id="basic-alerts">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start pb-0">
                        <div class="avatar bg-light-primary p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="users" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder mt-1">{{count($data['users'])}}</h2>
                        <p class="card-text">All Users</p>
                    </div>
                    <div id="gained-chart"></div>
                </div>          
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-warning p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="square" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{count($data['orders'])}}</h2>
                    <p class="card-text">All Orders</p>
                </div>
                <div id="order-chart"></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start pb-0">
                        <div class="avatar bg-light-primary p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="codesandbox" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder mt-1">{{count($data['shipments'])}}</h2>
                        <p class="card-text">All Shipments</p>
                    </div>
                    <div id="gained-chart1"></div>
                </div>          
            </div>
         <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-warning p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="archive" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{count($data['inquiry'])}}</h2>
                    <p class="card-text">All Inquiries</p>
                </div>
                <div id="order-chart1"></div>
            </div>
          </div
        </div>
    </section>
</div>
@endsection
@section('js')

<script src="{{asset('/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/extensions/moment.min.js')}}"></script>

<script src="{{asset('/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>

<script type="text/javascript">
    $('.dashboard').addClass('active');
</script>
@endsection
