@extends('admin.admin-index')

@section('title','Категория')

{{--@yield('header')--}}


@section('content')
    <h1>Articles</h1>
    @foreach ($posts as $post)

        <p>Category: {{ $post->category }}</p>


    @endforeach


@show