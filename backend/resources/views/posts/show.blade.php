@extends('layouts.app')

@section("title",'Show Post')

@section('content')
{{-- Find or Fail --}}

{{-- <h1 class="h3">{{$post->title}}</h1>
<p class="text-secondary">Post ID:{{$post->id}}</p>
<p class="lead">{{$post->content}}</p> --}}


{{-- WHERE --}}
@foreach ($result as $post)
<h1 class="h3">{{$post->title}}</h1>

<p class="text-secondary">Post ID:{{$post->id}}</p>

<p class="lead">{{$post->content}}</p>
<hr>
@endforeach


@endsection
