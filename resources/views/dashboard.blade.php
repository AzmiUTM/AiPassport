@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item active">Dashboards</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboards</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-xxl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-currency-btc widget-icon bg-danger rounded-circle text-white"></i>
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Revenue">Settings</h5>
                    <h3 class="mt-3 mb-3">{{$setting}}</h3>
                    <p class="mb-0 text-muted">
                        <span class="text-nowrap">Latest Added {{Carbon\Carbon::parse($setLatest->ppv_addedon)->diffForHumans()}}</span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-account widget-icon bg-primary rounded-circle text-white"></i>
                    </div>
                    <h4 class="text-muted fw-normal mt-0" title="Growth">Users</h4>
                    <h3 class="mt-3 mb-3">{{$user}}</h3>
                    <p class="mb-0 text-muted">

                        <span class="text-nowrap">Added Recently</span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-account widget-icon bg-primary rounded-circle text-white"></i>
                    </div>
                    <h4 class="text-muted fw-normal mt-0" title="Growth">Photos</h4>
                    <h3 class="mt-3 mb-3">{{$photo}}</h3>
                    <p class="mb-0 text-muted">

                        <span class="text-nowrap">Added Recently</span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->


    <!-- end row-->

</div>
@endsection
