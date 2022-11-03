@extends('admin.layouts.app')
@section('title')
    Post create
@endsection


@section('content')

    <div class="d-flex mb-4">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary ">Back</a>
        <h2 class="m-3 mt-0 mb-0">Post create</h2>
    </div>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title_uz" class="form-label">Title (Uz)</label>
                    <input type="text" class="form-control @error('title_uz') is-invalid @enderror" id="title_uz" name="title_uz" value="{{ old('title_uz') }}">
                    @error('title_uz') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>
                <div class="mb-3">
                    <label for="title_en" class="form-label">Title (Eng)</label>
                    <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="title_en" name="title_en" value="{{ old('title_en') }}">
                    @error('title_en') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="mb-3">
                    <label for="body_uz" class="form-label">Body (Uz)</label>
                    <textarea name="body_uz" value="{{ old('body_uz') }}" class="form-control ckeditor @error('body_uz') is-invalid @enderror" id="body_uz"></textarea>
                    @error('body_uz') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>
                <div class="mb-3">
                    <label for="body_en" class="form-label">Body (Eng)</label>
                    <textarea name="body_en" value="{{ old('body_en') }}" class="form-control ckeditor @error('body_en') is-invalid @enderror" id="body_en"></textarea>
                    @error('body_en') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="mb-3">
                    <label for="ms1" class="form-label">Tags</label>
                    <select class="form-select @error('tag') is-invalid @enderror" id="ms1" multiple data-coreui-search="true" name="tags[]"  multiple>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Is special ?</label>
                        <input class="form-check-input"  name="is_special"  value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                </div>
                <button type="submit" class="btn btn-primary mb-5">Save</button>
            </form>
        </div>
    </div>
    @endsection
@section('js')
    <script src="/assets/ckeditor/ckeditor.js"></script>
{{--    <script>--}}
{{--        $('.ckeditor').ckeditor();--}}
{{--    </script>--}}

    <script>
        CKEDITOR.replace('body_uz', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script>
        CKEDITOR.replace('body_ru', {
            filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>


@endsection
