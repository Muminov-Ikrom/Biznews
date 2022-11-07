@extends('admin.layouts.app')
@section('title')
    Categories
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@endsection

@section('content')

<div class="container">
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
    <table class="table table-striped table-hovered table-bordered mt-3">
        <thead>
            <tr class="bg-secondary">
                <th>Id</th>
                <th>Name uz</th>
                <th>Name en</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name_uz }}</td>
                <td>{{ $category->name_en }}</td>
                <td>{{ $category->slug }}</td>
                <td class="d-flex justify-content-around">
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
        <tfoot class="bg-secondary">
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
