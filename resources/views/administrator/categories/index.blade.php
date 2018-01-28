<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
@extends('admin.admin-index')

@section('title','Добавить Категорию')

@yield('header')

@section('breadcrumb')
    <ol class="breadcrumb">

        <li><a href="{{url('admin-panel/')}}">Home</a></li>
        <li><a href="{{url('admin-panel/create')}}">Posts</a></li>
        <li class="prime-text">HELLO</li>
        <li><a class="navbar-brand" href="http://localhost/admin-panel/">
                <img alt="Brand" src="http://localhost/uploads/logo/logo2.png" width="70px">
            </a></li>

    </ol>
@show


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{--<div class="centered">--}}
                    {{--<nav aria-label="Page navigation centered">--}}
                        {{--{{ $categories->links() }}--}}
                    {{--</nav>--}}
                {{--</div>--}}
                @if($categories->count() > 0)
                <div class="table-responsive">
                    <table class="table">

                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Count</th>
                        <th>Actions</th>

                        @foreach($categories as $cat)
                            <tr>

                                <td>{!! $cat->id !!}</td>
                                <td>{!! $cat->title !!}</td>
                                <td>{!! $cat->slug !!}</td>
                                <td>{{$cat->posts->count()}}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                    @endif

            </div>
        </div>


    </div>

@endsection
</body>
</html>