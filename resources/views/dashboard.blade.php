@extends('layouts.app', [
    'parentSectionMain' => 'dashboard',
    'parentSection' => 'dashboard',
    'elementName' => 'dashboard',
])

@section('content')
 @component('layouts.headers.auth')
        @component('layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Home') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboards') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Home') }}</li>
        @endcomponent
        {{-- @include('layouts.headers.cards') --}}
    @endcomponent

<div class="container-fluid mt--6">
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
  
</div>
  @include('layouts.footers.auth')
@endsection
