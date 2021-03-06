@extends('layouts.app')

@section('content')
    @include('includes.sidenav')

    <div class="main">
        <h1>Edit homepage</h1>
        <table class="table table-bordered" align="center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Text button</th>
                <th>URL</th>
            </tr>
            </thead>
            <tbody>
@foreach ($cms as $kopjes)
    <tr>
    <td> {{$kopjes->id}} </td>
        <td><a href="{{route('admin.cms.edit', $kopjes->id)}}">{{$kopjes->title}}</a></td>
    <td> {{$kopjes->description}} </td>
    <td> {{$kopjes->button}} </td>
        <td> {{$kopjes->url}} </td>
    </tr>
@endforeach
            </tbody>
        </table>

        @stop

    </div>
