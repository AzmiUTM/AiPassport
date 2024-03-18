@extends('layouts.app')

    @section('css')
        @include('include.datatable_css')
    @endsection


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                        <li class="breadcrumb-item active">List of Photo</li>
                    </ol>
                </div>
                <h4 class="page-title">List of Photo</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="scroll-horizontal-datatable" class="table w-100">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="15%">Student Name</th>
                                <th>Photo Url</th>
                                <th>Setting Name</th>
                                <th>Created</th>
                                <th class="text-center">Status Validation</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($photos as $key => $photo)
                            <tr>
                                <td>{{($key+1)}}</td>
                                <td>{{$photo->PpvStudent->ppv_username}}</td>
                                <td>
                                    <img src="{{$photo->ppv_photourl}}" alt="" class="img-thumbnail w-50">
                                    {{-- <a href="{{$photo->ppv_photourl}}" target="_blank">{{$photo->ppv_filename}}</a> --}}
                                </td>
                                <td>{{$photo->PpvSetting->ppv_settingname}}</td>
                                <td>{{Carbon\Carbon::parse($photo->ppv_addedon)->format('d-m-Y h:i:s A')}}</td>
                                <td class="text-center">
                                    <h5>
                                        @if($photo->ppv_isvalid == 'Y')
                                        <span class="badge badge-success-lighten">YES</span>
                                        @elseif($photo->ppv_isvalid == 'N')
                                        <span class="badge badge-warning-lighten">NO</span>
                                        @elseif($photo->ppv_isvalid == 'E')
                                        <span class="badge badge-danger-lighten">ERROR</span>
                                        @else
                                        <span class="badge badge-danger-lighten">{{$photo->ppv_isvalid}}</span>
                                        @endif
                                    </h5>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown text-center">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item " type="button" data-bs-toggle="modal" data-bs-target="#modal-photo-{{$key}}"><i class="mdi mdi-view-list-outline text-info"></i><span class="ms-1">View</span></a>
                                            <!-- item-->
                                            {{-- <a class="dropdown-item " href=""><i class="mdi mdi-pencil text-primary"></i><span class="ms-1">Edit</span></a> --}}
                                            <!-- item-->
                                            {{-- <a class="dropdown-item " href="javascript:void(0);"><i class="mdi mdi-delete text-danger"></i><span class="ms-1">Delete</span></a> --}}
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal-photo-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">View Details</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped table-centered mb-0">
                                                    <tr>
                                                        <th>
                                                            Session
                                                        </th>
                                                        <td>
                                                            {{$photo->ppv_sesisemdaftar}}
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            File Name
                                                        </th>
                                                        <td>
                                                            {{$photo->ppv_filename}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            File Saiz
                                                        </th>
                                                        <td>
                                                            {{$photo->ppv_filesizekb}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Remark
                                                        </th>
                                                        <td>
                                                            {{$photo->ppv_remark}}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection

@section('script')
@include('include.datatable_js')
<script>
    $(document).ready(function(){
        "use strict";
        $("#scroll-horizontal-datatable").DataTable({
            scrollX: !0,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>",
                },
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
        });
    });
</script>
@endsection
