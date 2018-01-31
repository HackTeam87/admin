@extends('layouts.cms.admin')

@section('title','Добавить пост')



@section('content')

    <script src="{{asset('cms/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('cms/js/my-js/bootstrap-filestyle.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/css/style.css') }}">

    @if (Session::get('message') != Null)
        <div class="row">
            <div class="col-md-12 centered prime-text">
                {{ Session::get('message') }}
            </div>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">

                            <nav aria-label="Page navigation ">
                                {{ $post->links() }}
                            </nav>

                        </div>
                        <div class="col-md-8">
                            @widget('recentPosts')
                        </div>

                    </div>

{{--table--}}
                    <div class="table-responsive">
                        <table class="table ">

                            <th class="prime-text">Заголовок</th>
                            <th class="prime-text">Текст</th>
                            <th class="prime-text">Изображение</th>

                            @foreach($post as $item)
                                <div class="container-fluid">
                                    <tr>

                                        <td class="col-md-1">{!! $item->title !!}</td>
                                        <td class="col-md-5">{!! $item->text !!}</td>
                                        <td class="col-md-1">

                                            <img src="/media/{!! $item->post_thumbnail !!}" alt="img" >
                                        </td>


                                    <tr>
                                        <td class="col-md-3">
                                            {{--Show--}}
                                            <a title="Read article" href="{{ url('adm/dash/'.$item->id) }}"
                                               class="btn btn-primary"><span class="fa fa-newspaper-o"></span></a>

                                            {{--Edit--}}
                                            <a title="Edit article" href="{{ url('adm/dash/'.$item->id.'/edit') }}"
                                               class="btn btn-warning"><span class="fa fa-edit"></span></a>

                                            {{--Delete--}}
                                            <button title="Delete article" type="button" class="btn btn-danger"
                                                    data-toggle="modal"
                                                    data-target="#delete_article_{{ $item->id  }}"><span
                                                        class="fa fa-trash-o"></span>
                                            </button>

                                        </td>
                                    </tr>

                                    </tr>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

{{--//form--}}
            <div class="container">

                <div class="col-md-10">


                    <div class="input-group ">
                        {!! Form::open(['route'=>'dash.store','files' => true]) !!}
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-2">
                                {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}
                            </div>
                            <div class="col-md-3">
                                {{--{!! Form::file('file', null,['class'=>'filestyle btn btn-primary']) !!}--}}
                                <input type="file" name="post_thumbnail" class="filestyle btn btn-primary">
                                <script>
                                    $(":file").filestyle();
                                </script>
                            </div>
                        </div>

                        {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Заголовок']) !!}



                        {!! Form::text('video',null,['class'=>'form-control','placeholder' => 'Ютуб']) !!}

                        <select name="category_id" class="form-control prime-text">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}} </option>
                            @endforeach
                        </select>

                        {!! Form::textarea('text',null,['class'=>'form-control ','placeholder' => 'Краткое Описание']) !!}

                        {!! Form::label('text', 'Краткое Описание'); !!}
                        <script>
                            CKEDITOR.replace('text');
                        </script>

                        {!! Form::close() !!}

                    </div>
                </div>

            </div>

        </div>
    </div>

    {{--//modal--}}

    @foreach($post as $item)
        <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('dash.destroy', ['id' => $item->id]) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <h4 class="modal-title" id="mySmallModalLabel">Delete article</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            Are you sure to delete article: <b>{{ $item->title }} </b>?

                        </div>
                        <div class="modal-footer">
                            <a href="{{ url('/') }}">
                                <button type="button" class="btn btn-dropbox pull-left " data-dismiss="modal">Close
                                </button>
                            </a>
                            <button type="submit" class="btn btn-danger" title="Delete" value="delete">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach







@endsection
