@extends('admin.layouts.app')

@section('title')
    Tag page
@endsection
@section('content')
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="d-flex mb-4">
            <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary ">Back</a>
            <h2 class="m-3 mt-0 mb-0">Tag show</h2>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr class="border-top-3">
                    <th>Id</th>
                    <th>Name (Uz)</th>
                    <th>Name (Eng)</th>
                    <th>Slug</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$tag->id }}</td>
                    <td>{{$tag->name_uz}}</td>
                    <td>{{$tag->name_en}}</td>
                    <td>{{$tag->slug}}</td>
                    <td>{{$tag->created_at}}</td>
                    <td>{{$tag->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
