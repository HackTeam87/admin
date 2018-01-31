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
                    {!! Form::model($tarif,array('route' => array('tarifs.update',$tarif->id ),'files' => true,'method' => 'PUT')) !!}
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-2">
                            {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}
                        </div>
                    </div>

                    {!! Form::text('plan',null,['class'=>'form-control','placeholder' => 'Тариф']) !!}


                    {!! Form::text('price',null,['class'=>'form-control','placeholder' => 'Прайс']) !!}


                    {!! Form::textarea('priceinfo',null,['class'=>'form-control ','placeholder' => 'Краткое Описание']) !!}

                    <script>
                        CKEDITOR.replace('priceinfo');
                    </script>

                    {!! Form::close() !!}

                </div>
            </div>


        </div>

    </div>


@endsection
