@extends('admin.layouts.app')
@section('title')
    Categories
@endsection
@section('css')

@endsection

@section('content')

<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="d-flex justify-content-end">
        @include('admin.sections.alertmessage')
    </div>
    <div class=" d-flex justify-content-between ">
        <div>
            <h3>Categories table</h3>
        </div>
        <div>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Category add+</a>
        </div>

    </div>

{{--    data tables--}}
    <table class="table table-striped table-hover">
        <thead>
            <tr class="border-top-3">
                <th class="col">Id</th>
                <th class="col">Name uz</th>
                <th class="col">Name en</th>
                <th class="col">Slug</th>
                <th class="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name_uz }}</td>
                <td>{{ $category->name_en }}</td>
                <td>{{ $category->slug }}</td>
                <td class="d-flex">
                    <a class="btn btn-info" href="{{ route('admin.categories.show', $category->id) }}"><h5 class="bi bi-eye-fill"></h5></a>
                    <a class="btn btn-warning" href="{{ route('admin.categories.edit', $category->id) }}"><h5 class="bi bi-pencil-square"></h5></a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn bg-danger" onclick=" return confirm('Are you sure?')" ><h5 class="bi bi-trash3-fill"></h5></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name uz</th>
                <th>Name en</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
    <div aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            {{ $categories->links() }}
        </ul>
    </div>
</div>

@endsection

@section('js')

@endsection
