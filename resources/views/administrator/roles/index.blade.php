@extends('layouts.cms.admin')

@section('title','Добавить роль')

@section('content')


<div class="container">
    <div class="input-group input-group-sm">
        <div class="input-group-btn"><a href="{!! route('roles.create') !!}">
                <button type="submit" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Add New</button>
            </a></div>
    </div>
    <div class="box-body table-responsive no-padding">
        @if (count($roles) > 0)
            <table class="table table-bordered table-striped {{ count($roles) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>
                    <th>Title</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr data-entry-id="{{ $role->id }}">
                        <td></td>
                        <td>{{ $role->title }}</td>
                        <td><a href="{{ route('roles.show',[$role->id]) }}" class="btn btn-xs btn-primary">View</a>
                            <a href="{{ route('roles.edit',[$role->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            {!! Form::open(array(
                                                                       'style' => 'display: inline-block;',
                                                                       'method' => 'DELETE',
                                                                       'onsubmit' => "return confirm('Are you sure?');",
                                                                       'route' => ['roles.destroy', $role->id])) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        @else
            <div class="well text-center">No entries in table.</div>
        @endif
    </div>
</div>


@endsection

