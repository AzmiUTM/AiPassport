@extends('layouts.app')

    @section('css')
    <link href="{{asset('temp')}}/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="{{asset('temp')}}/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="{{asset('temp')}}/assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="{{asset('temp')}}/assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
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
                        <li class="breadcrumb-item active">List of Setting</li>
                    </ol>
                </div>
                <h4 class="page-title">List of Setting</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-start mb-2">
            <a href="{{route('setting.create')}}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Setting</a>
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
                                <th>Descrption</th>
                                <th>Remark</th>
                                <th>Created</th>
                                {{-- <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($settings as $key => $set)
                            <tr>
                                <td>{{($key+1)}}</td>
                                <td>{{$set->ppv_settingname}}</td>
                                <td>{{$set->ppv_settingdesc}}</td>
                                <td width="30%">{{$set->ppv_remark}}</td>
                                <td>{{$set->ppv_addedon}}</td>
                                {{-- <td><h5><span class="badge badge-info-lighten">Shipped</span></h5></td> --}}
                                <td>
                                    <div class="dropdown text-center">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a class="dropdown-item " href="{{route('setting.edit', Crypt::encryptString($set->ppv_settingid))}}"><i class="mdi mdi-pencil text-primary"></i><span class="ms-1">Edit</span></a>
                                            <!-- item-->
                                            <a type="button" class="dropdown-item btnDelete" id="{{Crypt::encryptString($set->ppv_settingid)}}"><i class="mdi mdi-delete text-danger"></i><span class="ms-1">Delete</span></a>
                                        </div>
                                    </div>

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

         $('.btnDelete').click(function(){
            var id = $(this).attr('id');
            alertDelete(id);
        })

        function alertDelete(id){
            Swal.fire({
                title: 'Confirm delete ?',
                // text: "Padam maklumat ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1f3bb3',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed)
                {
                    $.ajax({
                        url:"{{route('setting.delete')}}",
                        type:"POST",
                        data:{
                            id:id,
                            _token: "{{ csrf_token() }}",
                        },
                        success:function(data){
                            Swal.fire({
                                title: data['swal_title'],
                                //text: 'Do you want to continue',
                                icon:data['swal_icon'],
                                confirmButtonText: 'Close',
                                confirmButtonColor: '#1f3bb3',
                                timer: 2500,
                            }).then(function() {
                                location.reload();
                            });
                        }
                    });
                }
            })
        }

    });
</script>
@endsection
