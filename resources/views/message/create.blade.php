@extends('layouts.admin')
@section('content')
{{Form::open(array('url'=>'/message'))}}
<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            {{Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Name'))}}
            <p class="help-block">A reader friendly name to help us identify what this message is.</p>
        </div>
        <div class="form-group">
            {{Form::text('command', null, array('class'=>'form-control', 'placeholder'=>'Command'))}}
            <p class="help-block">What command prompts this message.  What does the user types that prompts this message? </p>

        </div>
        <div class="form-group">
            {{Form::text('content', null, array('class'=>'form-control', 'placeholder'=>'Message'))}}
            <p class="help-block">The message sent to the user.</p>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label class="text-center" for="response">
                    Response to user text message?

                </label>
                {{Form::checkbox('response', true, array('class'=>'text-left'))}}
            </div>
            <p class="help-block">Is this a response to user input?  This helps block system texts from being generated by incoming user texts.</p>
        </div>
        <div class="form-group text-left">
            {{Form::textarea('notes', null, array('class'=>'form-control', 'placeholder'=>'Notes'))}}
            <p class="help-block">Internal notes about this message.</p>
        </div>
        {{Form::submit()}}
    </div>
</div>







{{Form::close()}}

    @endsection