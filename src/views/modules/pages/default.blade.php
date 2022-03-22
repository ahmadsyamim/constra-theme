@php if (empty($layout)) $layout = 'default'; @endphp
@extends('Constra.layouts.' . $layout)
@section('meta_title', $page->title)
@section('meta_description', $page->meta_description)
@section('page_title', $page->title)
@section('page_banner', imageUrl($page->image, 1200, 211))

@section('content')
    {!! $page->body !!}
@endsection