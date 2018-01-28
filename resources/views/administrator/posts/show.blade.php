@extends('layouts.cms.admin')

@section('title','Просмотр поста')

@section('content')

        <div class="container">
            <blockquote>
        <div class="row">
            <div class="col-md-2">
                <span class=" title centered">{{$post->title}}</span><br>
                <span class="date">{!! Carbon\Carbon::parse($post->created_at)->format('d/m/Y') !!}</span><br>
                <span class="text">{!! $post->slug !!}</span><br>
                <span class="text">{!! $post->text !!}</span>

            </div>

            <div class="col-md-4">
                <span>
                    <a href="/media/{!! $post->post_thumbnail !!}">
                        <img class="responsive-img" src="/media/{!! $post->post_thumbnail !!}" alt="img" width="350px">
                    </a>
                </span>
            </div>

            <div class="col-md-5">
                <span class="text">
                    <div class="media ">
                        <iframe width="460" height="315" src="{{$post->video}}" frameborder="0"
                                            gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                </span>
            </div>

        </div>
            </blockquote>
        </div>



    <style>

        blockquote {
            background-color: lightgray;
            border-radius: 8px;
        }

        span {
            color: #ffffff;
        }

        .title {
            font-size: 24px;
            font-family: 'Dancing Script', cursive;
            letter-spacing: 2px;

        }

        .centered {
            text-align: center;
        }

        .text {
            font-size: 18px;
            font-family: 'Cinzel', serif;
        }
    </style>





@endsection