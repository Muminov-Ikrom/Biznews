@extends('site.layouts.site')

@section('title')
    Bosh sahifa
@endsection
@section('content')

@include('site.sections.mainNewsSlider')

@include('site.sections.breakingNews')

@include('site.sections.featuredNewsSlider')

@include('site.sections.newsWithSidebar')


@endsection
