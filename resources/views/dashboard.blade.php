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


        @endcomponent
        {{-- @include('layouts.headers.cards') --}}
    @endcomponent

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Settings</h5>
                    <span class="h2 font-weight-bold mb-0">{{$setting}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">

                <span class="text-nowrap">Latest Added {{Carbon\Carbon::parse($setLatest->ppv_addedon)->diffForHumans()}}</span>
                </p>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 ">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                    <span class="h2 font-weight-bold mb-0">{{$user}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Added Recently</span>
                </p>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Photos</h5>
                    <span class="h2 font-weight-bold mb-0">{{$photo}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-nowrap">Added Recently</span>
                </p>
            </div>
            </div>
        </div>

    </div>
    @include('layouts.footers.auth')
</div>
@endsection
