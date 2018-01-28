@extends('layouts.cms.admin')

@section('title', 'Пост ' . $post->title)

@section('content')
    <div class="container">
        <blockquote>
            <div class="row">

                <div class="col-md-4">
                <span>
                    <a href="/{!! $post->file !!}">
                        <img class="responsive-img" src="/{!! $post->file !!}" alt="img" width="250px">
                    </a>
                </span>
                </div>
                <div class="col-md-4">
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Text</th>
                                <th>Date</th>
                            </tr>
                            <tr>
                                <td><span class="text">{!! $post->id !!}</span></td>
                                <td><span class=" title centered">{{$post->title}}</span></td>
                                <td><span class="text">{!! $post->slug !!}</span></td>
                                <td><span class="text">{!! $post->text !!}</span></td>
                                <td>
                                    <span class="date">{!! Carbon\Carbon::parse($post->created_at)->format('d/m/Y') !!}</span>
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>

                <div class="col-md-4">
                <span class="text">
                    <div class="media ">
                        <iframe width="100%" height="280" src="{{$post->video}}" frameborder="0"
                                gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                </span>
                </div>

            </div>
        </blockquote>
    </div>




@endsection