@extends('layouts.cms.admin')

@section('title','Админ-панель')


@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Online</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>

                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if($user->isOnline())
                                    <span style="color:green">Online</span>
                                @else
                                    <span style="color:red">Offline</span>
                                @endif
                            </td>
                            @endforeach
                            <td>{!!$user->id!!}</td>
                            <td>{!! $user->name !!}</td>
                            <td class="raw-m-hide">{!! $user->email !!}</td>
                        </tr>
                </table>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        {!! Html::link(url('/profile/'.Auth::user()->name), 'Profile') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection