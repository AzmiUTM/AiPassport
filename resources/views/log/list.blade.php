@extends('layouts.app', [
    'parentSectionMain' => 'logs',
    'parentSection' => 'logs',
    'elementName' => 'logs',
])


@section('content')
    @component('layouts.headers.auth')
        @component('layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Settings') }}
            @endslot
            <li class="breadcrumb-item active" aria-current="page">List of log</li>
        @endcomponent
    @endcomponent
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">List of Log</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-flush" id="tblListStud">
                                <thead class="thead-light">
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
