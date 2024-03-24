@extends('layouts.app', [
    'parentSectionMain' => 'photo',
    'parentSection' => 'photo',
    'elementName' => 'photo',
])

@section('content')
    @component('layouts.headers.auth')
        @component('layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Photos') }}
            @endslot
            <li class="breadcrumb-item active" aria-current="page">List of Photo</li>
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
                    <table class="table table-flush" id="tblListStud">
                        <thead class="thead-light">
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
                                    
                                    <div class="btn-group dropright">
                                        <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <div class="dropdown-menu scrollable-menu">
                                            <a class="dropdown-item " type="button" data-toggle="modal" data-target="#modal-photo-{{$key}}"><i class="mdi mdi-view-list-outline text-info"></i><span class="ms-1">View</span></a>
        
                                        </div>
                                        <div class="modal fade" id="modal-photo-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="thisModal"aria-hidden="true">
                                            <div class="modal modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
        
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">View Details</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
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
                                                </div>
                                            </div>
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
</script>
@endpush

