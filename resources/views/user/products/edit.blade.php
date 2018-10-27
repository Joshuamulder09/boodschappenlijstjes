@extends('layouts.app')

@section('content')
    @include('includes.sidenav')

    <div class="main">
    <h1>Edit producten</h1>


    <div class="col-sm-6">

        {!! Form::model($product, ['method'=>'PATCH', 'action'=> ['AdminProductsController@update', $product->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update product', ['class'=>'btn btn-primary col-sm-6 ']) !!}
        </div>
        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminProductsController@destroy', $product->id]]) !!}


        <div class="form-group">
            {!! Form::submit('Delete product', ['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}



    </div>








@stop
    </div>