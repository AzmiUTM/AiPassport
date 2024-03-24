@extends('layouts.app', [
    'parentSectionMain' => 'settings',
    'parentSection' => 'settings',
    'elementName' => 'settings',
])


@section('content')
    @component('layouts.headers.auth')
        @component('layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Settings') }}
            @endslot

        @endcomponent
        {{-- @include('layouts.headers.cards') --}}
    @endcomponent
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">List of Photo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start mb-2">
                            <a href="{{route('setting.create')}}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Setting</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-flush" id="tblListStud">
                                <thead class="thead-light">
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
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    <div class="dropdown-menu scrollable-menu">
                                                        <!-- item-->
                                                        <a class="dropdown-item" href="{{route('setting.edit', Crypt::encryptString($set->ppv_settingid))}}">
                                                            <i class="mdi mdi-pencil text-primary"></i><span class="ms-1">Edit</span>
                                                        </a>
                                                        <!-- item-->
                                                        <a class="dropdown-item btnDelete" id="{{Crypt::encryptString($set->ppv_settingid)}}">
                                                            <i class="mdi mdi-delete text-danger"></i><span class="ms-1">Delete</span>
                                                        </a>            
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection


@push('css')

<link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endpush

@push('js')
<script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="{{ asset('argon') }}/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
$('#tblListStud').DataTable({
    language:{
        paginate:{
            previous: "<",
            next: ">"
        }
    },
});

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
@endpush
