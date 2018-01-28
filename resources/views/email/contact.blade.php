@extends('admin.admin-index')

@section('title','Добавить Контакты')

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

@section('jumbotron')
    <br>
    <div class="jumbotron">
        <div class="container">
            <h1>Contact Us</h1>
            <h2>Your message will be delivered to our clandestine team</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row" style="margin-top: 25px;">

        <div class="col-md-4 col-sm-12">

            <div class="card">
                <div class="card-body">
                    <div class="card-title map">
                        <gmap-map map-type-id="roadmap"
                                  style="width: 100%; height: 300px;"
                        >
                        </gmap-map>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="border: none;">
                                <span class="fa fa-calendar" style="color: #FFC200; padding-right: 5px;" aria-hidden></span>
                                support@asusgrin.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-8 col-sm-12">

            <p>
                Send us your questions, comments, and suggestions and someone will be in touch within
                24 hours.
            </p>

            {!! Form::open(['route' => 'contact.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Your Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail Address') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('msg', 'Message') !!}
                {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
            <br />
        </div>

    </div>

@endsection
