@extends('layouts.app')

@section('title','Show pots')

@section('header')
<h1 style="text-transform: capitalize">{{$name}}'s Posts </h1>
@endsection

@section('content')

<ul>
    @foreach($posts as $post)
    <li>{{$post}}</li>
    @endforeach
</ul>
@endsection




