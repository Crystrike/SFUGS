@extends('layout')
@section('title', 'Tournaments')
<title id ='tournament_id'>{{$tour->title}}</title>
@section('content')
    <h1>Детали турнира</h1>
    <div>
        <strong>Название:</strong> {{$tour->title}}
        @if($parc == true)
        <form  method="post" action="{{ route('create-parc') }}" enctype="multipart/form-data">
            @csrf
            <label for="user_id" class="hidden-element"></label>
            <input type="number" class="hidden-element"  id="user_id" name="user_id" value="{{Auth::user()->id}}">
            <label for="tournament_id_id" class="hidden-element"></label>
            <input type="number" class="hidden-element" id="tournament_id" name="tournament_id" value="{{$tour->id}}">
            <button type="submit" class="btn btn-primary">Записаться</button>
        </form>
        @else
            <p>Вы уже записаны</p>
        @endif

    </div>
    <style>
        .hidden-element {
            display: none;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
