@extends('layouts.app')


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                        <li class="breadcrumb-item active">Edit Setting</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Setting</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('setting.update', Crypt::encryptString($setting->ppv_settingid))}}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="billing-first-name" class="form-label">Name</label>
                                    <input class="form-control" type="text" value="{{$setting->ppv_settingname}}" name="ppv_settingname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="billing-last-name" class="form-label">Description</label>
                                    <input class="form-control" type="text" value="{{$setting->ppv_settingdesc}}" name="ppv_settingdesc">
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 mt-3">
                                    <label for="example-textarea" class="form-label">Remark</label>
                                    <textarea class="form-control" rows="3"  name="ppv_remark">{{$setting->ppv_remark}}</textarea>
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

                                        @forelse($setting->setting_item as $key => $item)
                                        <tr>
                                            <td>
                                                <input type="hidden" value="{{$item->ppv_setting_itemid}}" name="ppv_setting_itemid[]" readonly>
                                                <textarea class="form-control" id="example-textarea" rows="3" placeholder="Item Value..." name="ppv_settingvalue[]">{{$item->ppv_settingvalue}}</textarea>
                                            </td>
                                            <td>
                                                <select class="form-select" id="example-select" name="ppv_status[]">
                                                    <option value="ACTIVE"{{ ($item->ppv_status == 'ACTIVE') ? 'selected':''}}>Active</option>
                                                    <option value="NOT ACTIVE" {{ ($item->ppv_status == 'NOT ACTIVE') ? 'selected':''}}>Not Active</option>
                                                </select>
                                            </td>
                                            @if($loop->last)
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary" id="btnAdd"><i class="dripicons-plus"></i></button>
                                            </td>
                                            @endif
                                        </tr>
                                        @empty
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
                                        @endforelse
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
