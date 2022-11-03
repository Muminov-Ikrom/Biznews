@extends('admin.layouts.app')

@section('title')
    Categories page
@endsection
@section('content')
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="d-flex mb-4">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary ">Back</a>
            <h2 class="m-3 mt-0 mb-0">Category show date: {{ date('y.m.d') }}</h2>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr class="border-top-3">
                <th>Id</th>
                <th>Name (Uz)</th>
                <th>Name (Eng)</th>
                <th>Slug</th>
                <th>Meta title</th>
                <th>Meta description</th>
                <th>Meta keywords</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{$category->name_uz}}</td>
                    <td>{{$category->name_en}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->meta_title}}</td>
                    <td>{{$category->meta_description}}</td>
                    <td>{{$category->meta_keywords}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
