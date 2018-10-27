@extends('layouts.app')

@section('content')

    <div class="main2">


        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h1>Voeg toe</h1>
                {!! Form::open(['method'=>'POST', 'action'=> 'AdminProductsController@store']) !!}
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


            <div class="col-sm-12 col-md-6 col-lg-4">


                @if($products)

                    <h1>Mijn boodschappenlijst</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Aantal</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)

                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->aantal}}</td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminProductsController@destroy', $product->id]]) !!}


                                    <div class="form-group">
                                        {!! Form::submit('-', ['class'=>'btn btn-danger col-sm-6']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'PUT', 'action'=> ['AdminProductsController@update', $product->id]]) !!}


                                    <div class="form-group">
                                        {!! Form::submit('+', ['class'=>'btn btn-danger col-sm-6']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>


                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                @endif


            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">

                @if($products)

                    <h1>Voorraad in huis</h1>
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

                    @endforeach
                    @endif
                            </tr>
                        </tbody>
                    </table>
            </div>
            </div>
        </div>


    </div>

@stop

