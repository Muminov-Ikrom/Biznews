@extends('admin.layouts.app')

@section('title')
    Categories page
@endsection
@section('content')
<div class="shadow p-3 mb-5 bg-body rounded">
    <div class="d-grid d-md-flex justify-content-between p-2">
        <h2>Categories table</h2>
        @include('admin.sections.alertmessage')
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success ">Create add</a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr class="border-top-3">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$category->name_uz}}</td>
                <td>{{$category->slug}}</td>
                <td class="d-flex">
                    <a href="{{ route('admin.categories.show', $category->id) }}" class=" m-1 mt-0 mb-0 text-decoration-none btn btn-info">Show</a>
                    <a href="{{ route('admin.categories.edit', $category->id ) }}" class=" m-1 mt-0 mb-0text-decoration-none btn btn-warning">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="m-1 mt-0 mb-0">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class=" btn btn-danger" onclick=" return confirm('are you sure?')" value="delete" >
                    </form>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            {{ $categories->links() }}
        </ul>
    </div>

</div>
@endsection
