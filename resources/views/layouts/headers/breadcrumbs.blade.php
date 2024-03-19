<div class="row align-items-center py-4">
    <div class="col-lg-12 col-12">
        <h6 class="h2 text-white d-inline-block mb-0">{{ $title }}</h6>
        <nav aria-label="breadcrumb" class="d-none d-print-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
                {{ $slot }}
            </ol>
        </nav>
    </div>
</div>