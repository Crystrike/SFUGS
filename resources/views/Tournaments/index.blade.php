@extends('layout')
@section('title', 'Tournaments')
@section('content')
    <div class="tournaments">
        @foreach ($tournaments as $game)
            <div class="tournament">
                <p>{{ $game->title }}</p>


            </div>
        @endforeach
    </div>
@endsection
<style>
    .tournaments {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Определяем три равные колонки */
        gap: 10px; /* Расстояние между элементами */
    }

    .tournament {
        border: 1px solid #ddd; /* Пример стиля для каждой игры */
        padding: 10px;
        text-align: center;
    }
</style>
