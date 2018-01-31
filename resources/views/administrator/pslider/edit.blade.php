@extends('layouts.cms.admin')

@section('title','Редактировать товар')


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
                    {!! Form::model($product,array('route' => array('pslider.update',$product->id ),'files' => true,'method' => 'PUT')) !!}
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-2">
                            {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}
                        </div>
                        <div class="col-md-3">
                            <input type="file" name="image" class="filestyle btn btn-primary">
                            <script>
                                $(":file").filestyle();
                            </script>
                        </div>
                    </div>

                    {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Заголовок']) !!}


                    {!! Form::text('price',null,['class'=>'form-control','placeholder' => 'Цена']) !!}


                    {!! Form::textarea('text',null,['class'=>'form-control ','placeholder' => 'Краткое Описание']) !!}

                    <script>
                        CKEDITOR.replace('text');
                    </script>

                    {!! Form::close() !!}

                </div>
            </div>


        </div>

    </div>


@endsection
