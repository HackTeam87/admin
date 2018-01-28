@extends('layouts.cms.admin')
@section('title' , 'Категория'.$categories->title)

@section('content')


    <div class="flex-center position-ref full-height">
        <div class="container">

            <table class="table">
                <tr>
                    <th class="prime-text">Id</th>
                    <th class="prime-text">Title</th>
                    <th class="prime-text">Date</th>
                </tr>
            </table>

            @foreach($categories->posts as $post)
                <table class="table">

                    <tr>
                        <td>
                            <a href="{{ route('post', [$categories->slug, $post->id]) }}">
                                {{ $post->id }}
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('post', [$categories->slug, $post->id]) }}">
                                {{ $post->title }}
                            </a>

                        </td>

                        <td>
                            <span class="date">{!! Carbon\Carbon::parse($post->created_at)->format('/d/m/Y H:i:s') !!}</span>
                        </td>
                    </tr>

                </table>
            @endforeach

        </div>
    </div>

@endsection