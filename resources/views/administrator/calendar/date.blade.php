@extends('layouts.cms.admin')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>


@section('content')

    <link rel="stylesheet" href="{{ asset('cms/css/style.css') }}">

    @if (Session::get('message') != Null)
        <div class="row">
            <div class="col-md-12 centered prime-text">
                {{ Session::get('message') }}
            </div>
        </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <nav aria-label="Page navigation ">
                    {{ $calen->links() }}
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-5">

                <div class="table-responsive">
                    <table class="table ">

                        <th class="prime-text">Дата</th>
                        <th class="prime-text">Задача</th>
                        <th class="prime-text">Управление</th>

                        @foreach($calen as $item)
                            <tr>
                                <td><span class="date">{!! Carbon\Carbon::parse($item->cteated_at)->format(' d m / H:i:s') !!}</span></td>
                                <td> {!! $item->title !!}</td>
                                <td>
                                    {{--Delete--}}
                                    <button title="Delete article" type="button" class="btn btn-danger"
                                            data-toggle="modal"
                                            data-target="#delete_article_{{ $item->id  }}"><span
                                                class="fa fa-trash-o"></span>
                                    </button>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>

                <div class="input-group ">
                    {!! Form::open(['route'=>'calendar.store','files' => true]) !!}
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-2">
                            {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}
                        </div>

                    </div>


                    {!! Form::date('start_date',null, ['class'=>'form-control ']) !!}
                    {!! Form::date('end_date',null, ['class'=>'form-control ']) !!}
                    {!! Form::textarea('title',null,['class'=>'form-control ','placeholder' => 'Краткое Описание']) !!}




                    {!! Form::label('text', 'Краткое Описание'); !!}
                    <script>
                        CKEDITOR.replace('title');
                    </script>

                    {!! Form::close() !!}


                </div>

            </div>


            <div class="calendar col-md-7">
                <div class="panel panel-primary">

                    <div class="panel-heading">

                        MY Calender

                    </div>

                    <div class="panel-body">

                        {!! $calendar->calendar() !!}

                        {!! $calendar->script() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>



    {{--//modal--}}

    @foreach($calen as $item)
        <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('calendar.destroy', ['id' => $item->id]) }}" method="post">
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