@extends('admin.layouts.app')
@section('title')
    Tag create
@endsection

@section('content')

    <div class="d-flex mb-4">
        <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary ">Back</a>
        <h2 class="m-3 mt-0 mb-0">Tag create</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('admin.tags.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name_uz" class="form-label">Name (Uz)</label>
                    <input type="text" class="form-control @error('name_uz') is-invalid @enderror" id="name_uz" name="name_uz" value="{{ old('name_uz') }}">
                    @error('name_uz') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>
                <div class="mb-3">
                    <label for="name_en" class="form-label">Name (Eng)</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ old('name_en') }}">
                    @error('name_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


@endsection
