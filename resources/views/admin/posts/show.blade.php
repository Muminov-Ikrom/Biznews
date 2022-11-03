@extends('admin.layouts.app')

@section('title')
    Post show
@endsection
@section('content')
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="d-flex mb-4">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary ">Back</a>
            <h2 class="m-3 mt-0 mb-0">Post show</h2>
        </div>

        <table class="table table-striped table-hover">
            <tr>
                <th class="border border-right-2">Post Id</th><td>{{ $post->id }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Post category</th><td>{{ $post->category->name_uz ?? 'Bog\'lanmagan'  }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Tag</th>
                <td>
{{--                    @if($post->tags->count()==1)--}}
                        @foreach($post->tags as $tag)
                            {{  $tag->name_uz  }}
                        @endforeach
{{--                    @else--}}
{{--                        <span style="color: red">{{ 'Bog\'lanmagan' }}</span>--}}
{{--                    @endif--}}

                </td>
            </tr>
            <tr>
                <th class="border border-right-2">Title uz</th><td>{{ $post->title_uz }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Title en</th><td>{{ $post->title_en }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Body uz</th><td>{!! $post->body_uz !!}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Body en</th><td>{!! $post->body_en !!}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Custom info</th><td>@if($post->is_special == 1) {{ 'special information' }} @elseif($post->is_special == 0) {{ 'not special information' }} @endif </td>
            </tr>
            <tr>
                <th class="border border-right-2">Image</th><td><img src="/site/posts/images/{{ $post->image }}"  width="80" alt="rasm"></td>
            </tr>
            <tr>
                <th class="border border-right-2">Slug</th><td>{{ $post->slug }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">View</th><td>{{ $post->view }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Created at</th><td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <th class="border border-right-2">Updated at</th><td>{{ $post->updated_at }}</td>
            </tr>
        </table>
    </div>
@endsection
