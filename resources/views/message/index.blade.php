@extends('layouts.admin')
@section('content')
    <h1>SMS Responses</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Command</th>
                <th>Message</th>
                <th>Created</th>
                <th>Updated</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $m)
                <tr>
                    <td>{!! $m->id !!}</td>
                    <td>{!! $m->name !!}</td>
                    <td>{!! $m->command !!}</td>
                    <td>{!! $m->content !!}</td>
                    <td>{!! $m->created_at !!}</td>
                    <td>{!! $m->updated_at !!}</td>
                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-xs-12">
            <a href="/message/create" class="btn btn-info btn-sm">New SMS</a>
        </div>
    </div>


@stop