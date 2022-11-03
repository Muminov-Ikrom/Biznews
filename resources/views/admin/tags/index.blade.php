@extends('admin.layouts.app')

@section('title')
    Tags page
@endsection
@section('content')
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="d-grid d-md-flex justify-content-between p-2">
            <h2>Tags table</h2>
            @include('admin.sections.alertmessage')
            <a href="{{ route('admin.tags.create') }}" class="btn btn-success ">Create add</a>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr class="border-top-3">
                    <th scope="col">Id</th>
                    <th scope="col">Name (uz)</th>
                    <th scope="col">Name (en)</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tag->name_uz }}</td>
                    <td>{{ $tag->name_en }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.tags.show', $tag->id) }}" class=" m-1 mt-0 mb-0 text-decoration-none btn btn-info">Show</a>
                        <a href="{{ route('admin.tags.edit', $tag->id ) }}" class=" m-1 mt-0 mb-0text-decoration-none btn btn-warning">Edit</a>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" class="m-1 mt-0 mb-0">
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
{{--                {{ $tags->links() }}--}}
            </ul>
        </div>

    </div>
@endsection
