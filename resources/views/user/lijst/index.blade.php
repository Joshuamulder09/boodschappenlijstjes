@extends('layouts.app')

@section('content')

    <div class="main">
        <h1>Mijn Boodschappenlijst maken</h1>

        @if($products)

            <div class="row">
                <div class="col-sm-6">
            <table class="table">
                <thead>
                <tr>
                    <th>Producten</th>
                    <th>Aantal</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>

                        {!! Form::open(['method'=>'POST', 'action'=> 'UserLijstjesController@store']) !!}
                        <td>{{$product->name}}</td>
                        <td>{{ Form::number('name', 'value')}}</td>
                        <td>  {!! Form::submit('Voeg toe', ['class'=>'btn btn-primary col-sm-6']) !!}</td>
                        {!! Form::close() !!}
                    </tr>
                @endforeach

                </tbody>
            </table>
                </div>
        @endif

        @stop

    </div>
    </div>