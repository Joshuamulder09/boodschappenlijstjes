@extends('layouts.app')

@section('content')
    @include('includes.sidenav')
    <div class="main">



<div class="row">
    <div class="col-sm-3">
        <h1>Voeg toe</h1>
        {!! Form::open(['method'=>'POST', 'action'=> 'UserVoorraadProductsController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Productnaam:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('aantal', 'Aantal:') !!}
            {!! Form::text('aantal', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::submit('Voeg toe', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


        <div class="row">

            @include('includes.form-error')


        </div>
    </div>


    <div class="col-sm-6">


        @if($voorraadproducts)

            <h1>Mijn voorraad</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Aantal</th>

                </tr>
                </thead>
                <tbody>

                @foreach($voorraadproducts as $voorraadproduct)

                    <tr>
                        <td>{{$voorraadproduct->name}}</td>
                        <td>{{$voorraadproduct->aantal}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['UserVoorraadProductsController@destroy', $voorraadproduct->id]]) !!}


                        <div class="form-group">
                            {!! Form::submit('-', ['class'=>'btn btn-danger col-sm-6']) !!}
                        </div>
                        {!! Form::close() !!}
                            </td>
                        <td>
                            {!! Form::open(['method'=>'PUT', 'action'=> ['UserVoorraadProductsController@update', $voorraadproduct->id]]) !!}


                            <div class="form-group">
                                {!! Form::submit('+', ['class'=>'btn btn-danger col-sm-6']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                        <td>

                    </tr>

                @endforeach

                </tbody>
            </table>

        @endif




    </div>
        </div>




@stop

</div>