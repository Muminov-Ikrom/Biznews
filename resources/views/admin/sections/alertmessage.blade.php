@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
       <span> {{ session('success') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
        <span>{{ session('delete') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{--@if(Session::has('success1'))--}}
{{--    <div class="alert alert-success">--}}
{{--        {{Session::get('success1')}}--}}
{{--    </div>--}}
{{--@endif--}}

