@extends('layouts.app')

@section('content')
    @include('includes.sidenav')

    <div class="main">
        <h1>Edit homepage</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Text button</th>

            </tr>
            </thead>
            <tbody>
@foreach ($cms as $kopjes)
    <tr>
    <td> {{$kopjes->id}} </td>
        <td><a href="{{route('admin.cms.edit', $kopjes->id)}}">{{$kopjes->title}}</a></td>
    <td> {{$kopjes->description}} </td>
    <td> {{$kopjes->button}} </td>
    </tr>
@endforeach
            </tbody>
        </table>

        @stop

    </div>
