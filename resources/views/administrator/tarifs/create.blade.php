@extends('layouts.cms.admin')

@section('title','Добавить тариф')



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


                            {{--@foreach($categories as $tarif)--}}
                                {{--<table class="table">--}}

                                    {{--<tr>--}}
                                        {{--<td>--}}
                                            {{--<a href="{{ route('post', [$categories->slug, $tarif->id]) }}">--}}
                                                {{--{{ $tarif->id }}--}}
                                            {{--</a>--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--<a href="{{ route('post', [$categories->slug, $tarif->id]) }}">--}}
                                                {{--{{ $tarif->plan }}--}}
                                            {{--</a>--}}

                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--<span class="date">{!! Carbon\Carbon::parse($tarif->created_at)->format('/d/m/Y H:i:s') !!}</span>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}

                                {{--</table>--}}
                            {{--@endforeach--}}

                            <nav aria-label="Page navigation ">
                                {{ $tarif->links() }}
                            </nav>

                        </div>

                    </div>

{{--table--}}
                    <div class="table-responsive">
                        <table class="table ">

                            <th class="prime-text">Тариф</th>
                            <th class="prime-text">Прайс</th>
                            <th class="prime-text">Прайс-Инфо</th>

                            @foreach($tarif as $item)
                                <div class="container-fluid">
                                    <tr>

                                        <td class="col-md-3">{!! $item->plan !!}</td>
                                        <td class="col-md-2">{!! $item->price !!}</td>
                                        <td class="col-md-7">{!! $item->priceinfo !!}</td>


                                    <tr>
                                        <td class="col-md-3">

                                            {{--Edit--}}
                                            <a title="Edit article" href="{{ url('adm/tarifs/'.$item->id.'/edit') }}"
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
                        {!! Form::open(['route'=>'tarifs.store','files' => true]) !!}
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
    </div>

    {{--//modal--}}

    @foreach($tarif as $item)
        <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('tarifs.destroy', ['id' => $item->id]) }}" method="post">
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
                            Are you sure to delete article: <b>{{ $item->plan }} </b>?

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
