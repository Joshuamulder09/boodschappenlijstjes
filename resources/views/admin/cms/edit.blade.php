@extends('layouts.app')

@section('content')
    @include('includes.sidenav')
    <div class="main">
        <h1>Edit homepagina</h1>


        <div class="row">
            <div class="col-sm-9">

                {!! Form::model($cms, ['method'=>'PATCH', 'action'=> ['CmsController@update', $cms->id]]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Titel:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'beschrijving:') !!}
                    {!! Form::text('description', null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('button', 'Text op de button:') !!}
                    {!! Form::text('button', null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('url', 'Websitelink:') !!}
                    {!! Form::text('url', null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update kopje', ['class'=>'btn btn-primary col-sm-6']) !!}
                </div>
                {!! Form::close() !!}


            </div>


        </div>



    {{--<div class="row">--}}

    {{--@include('includes.form-error')--}}


    {{--</div>--}}





@stop