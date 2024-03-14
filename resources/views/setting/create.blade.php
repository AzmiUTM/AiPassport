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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                        <li class="breadcrumb-item active">Add Settings/li>
                    </ol>
                </div>
                <h4 class="page-title">Add Setting</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{route('setting.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="billing-first-name" class="form-label">Name</label>
                                    <input class="form-control" type="text" placeholder="Enter your first name" id="billing-first-name" name="ppv_settingname" value="{{old('ppv_settingname')}}" required>
                                    @error('ppv_settingname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="billing-last-name" class="form-label">Description</label>
                                    <input class="form-control" type="text" placeholder="Enter your last name" id="billing-last-name" name="ppv_settingdesc" value="{{old('ppv_settingdesc')}}">
                                    @error('ppv_settingdesc')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 mt-3">
                                    <label for="example-textarea" class="form-label">Remark</label>
                                    <textarea class="form-control" id="example-textarea" rows="3" placeholder="Write some note.." name="ppv_remark">{{old('ppv_remark')}}</textarea>
                                    @error('ppv_remark')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <h4>Setting Item</h4>

                                <table class="table  table-centered mb-0 table-bordered" id="dynamic_field">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>

                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <textarea class="form-control" id="example-textarea" rows="3" placeholder="Item Value..." name="ppv_settingvalue[]"></textarea>
                                            </td>
                                            <td>
                                                <select class="form-select" id="example-select" name="ppv_status[]">
                                                    <option value="ACTIVE">Active</option>
                                                    <option value="NOT ACTIVE">Not Active</option>
                                                </select>
                                            </td>

                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary" id="btnAdd"><i class="dripicons-plus"></i> Add</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end row -->


                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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

        var i = 1;
        var x = 1;
        $("#btnAdd").click(function(){
            i++;
            x++;
            $('#dynamic_field').append('<tr><td><textarea class="form-control" id="example-textarea" rows="3" placeholder="Item Value..." name="ppv_settingvalue[]"></textarea></td><td><select class="form-select" id="example-select" name="ppv_status[]"><option value="ACTIVE">Active</option><option value="NOT ACTIVE">Not Active</option></select></td><td class="text-center"><button type="button" class="btn btn-danger btn-remove"><i class="dripicons-trash"></i></button></td></tr>');


            $('.btn-remove').click(function(){
                $(this).closest("tr").remove();
            })
        });
    });
</script>
@endsection
