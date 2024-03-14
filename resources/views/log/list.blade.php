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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Log</a></li>
                        <li class="breadcrumb-item active">List of Log</li>
                    </ol>
                </div>
                <h4 class="page-title">List of Log</h4>
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
                                <th>No.</th>
                                <th>Photo Name</th>
                                <th>Student Name</th>
                                <th>Validation Status</th>
                                <th>Remark</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($logs as $key => $log)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{(!empty($log->PpvPhoto->ppv_filename) ? $log->PpvPhoto->ppv_filename:'')}}</td>
                                <td>{{$log->PpvStudent->ppv_username}}</td>
                                <td>{{$log->ppv_validationstatus}}</td>
                                <td>{{$log->ppv_remark}}</td>
                                <td>{{Carbon\Carbon::parse($log->ppv_addedon)->format('d-m-Y h:i:s A')}}</td>
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
