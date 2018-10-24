@extends('layouts.app')

@section('content')
    @include('includes.sidenav')
    <div class="main">

    <h1>Producten</h1>

<div class="row">
    <div class="col-sm-5">

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminProductsController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Productnaam:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Maak product aan', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}



    </div>


    <div class="col-sm-4">


        @if($products)


            <table class="table">
                <thead>
                <tr>
                    <th>Producten</th>

                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)

                    <tr>
                        <td><a href="{{route('admin.products.edit', $product->id)}}">{{$product->name}}</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>
        </div>




@stop

</div>