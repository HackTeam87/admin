@extends('layouts.cms.admin')

@section('title','Добавить пост')


@section('content')

    <script src="{{asset('cms/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('cms/js/my-js/bootstrap-filestyle.js')}}"></script>
    <script src="{{asset('cms/js/my-js/init.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/css/style.css') }}">

    @if (Session::get('message') != Null)
        <div class="row">
            <div class="col-md-12 centered prime-text">
                {{ Session::get('message') }}
            </div>
        </div>
        </div>
    @endif

    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
                <div class="input-group ">
                    {!! Form::model($post,array('route' => array('dash.update',$post->id ),'files' => true,'method' => 'PUT')) !!}

                    {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}

                    {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Заголовок']) !!}

                    <select name="category_id" class="form-control prime-text">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}} </option>
                        @endforeach
                    </select>


                    {!! Form::textarea('text',null,['class'=>'form-control ','placeholder' => 'Краткое Описание']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::label('text', 'Краткое Описание'); !!}
                    <script>
                        CKEDITOR.replace('text');
                    </script>


                    {!! Form::close() !!}
                </div>

            </div>


        </div>

    </div>


@endsection
