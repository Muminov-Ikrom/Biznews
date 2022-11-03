@extends('admin.layouts.app')

@section('title')
    Posts page
@endsection
@section('content')
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="d-grid d-md-flex justify-content-between p-2">
            <h2>Posts table</h2>
            @include('admin.sections.alertmessage')
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success ">Create add</a>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr class="border-top-3">
                <th>Id</th>
                <th>Category</th>
                <th>Title (uz)</th>
                <th>Body (uz)</th>
                <th>Image</th>
                <th>Slug</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{$post->title_uz}}</td>
                    <td>{!!$post->body_uz!!}</td>
                    <td>{!!$post->body_en!!}</td>
                   <td ><img  width="40" src="{{ asset('site/posts/images/'.$post->image) }}" alt="rasm" ></td>
                    <td>{{$post->slug}}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.posts.show', $post->id) }}" class=" m-1 mt-0 mb-0 text-decoration-none btn btn-info">Show</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class=" m-1 mt-0 mb-0text-decoration-none btn btn-warning">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="m-1 mt-0 mb-0">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class=" btn btn-danger" onclick=" return confirm('are you sure?')" value="delete"  >
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
{{--                {{ $post->links() }}--}}
            </ul>
        </div>

    </div>
@endsection
