@extends('layouts.app', [
    'parentSectionMain' => 'student',
    'parentSection' => 'student',
    'elementName' => 'student',
])

@section('content')
    @component('layouts.headers.auth')
        @component('layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Students') }}
            @endslot
            <li class="breadcrumb-item active" aria-current="page">List of Student</li>
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
                            <h3 class="mb-0">List of Student</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-flush" id="tblListStud">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Module</th>
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

