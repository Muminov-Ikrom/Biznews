@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

