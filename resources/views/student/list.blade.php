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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Student</a></li>
                        <li class="breadcrumb-item active">List of Student</li>
                    </ol>
                </div>
                <h4 class="page-title">List of Student</h4>
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
                                <th>Name</th>
                                <th>Modul</th>
                                <th>Ic No</th>
                                <th>Email</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key => $student)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$student->ppv_username}}</td>
                                <td>{{$student->ppv_modul}}</td>
                                <td>{{$student->ppv_nokp}}</td>
                                <td>{{$student->ppv_email}}</td>
                                <td>{{$student->ppv_email}}</td>
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
