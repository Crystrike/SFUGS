@extends('layout')
@section('title', 'Participations')
<title>Ваши турниры</title>
@section('content')
    @foreach($parc as $parc1)
        <h1>Ваши турниры</h1>
        @if(Auth::user()->id = $parc1->user_id)
            <p>{{$parc1->tournament->title}}</p>
        @endif
    @endforeach
@endsection
