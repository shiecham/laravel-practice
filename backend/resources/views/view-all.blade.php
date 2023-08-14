@extends('layouts.app')

@section('title','View all')

@section('header')
<h1>All Posts</h1>

@endsection


@section('content')

<ul>
    @foreach($posts as $post)
    <li>{{$post}}</li>
    @endforeach
</ul>


@endsection

@section('footer')
<p>{{$footercomment}}</p>
@endsection








