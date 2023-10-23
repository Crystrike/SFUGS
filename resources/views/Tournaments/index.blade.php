@extends('layout')
@section('title', 'Tournaments')
<title>Турниры</title>
@section('content')
    <div class="tournaments">
        @foreach ($tournaments as $tournament)
            <div class="tournament">
                <p>{{ $tournament->title }}</p>


            </div>
        @endforeach

    </div>
    <button id="addTournamentButton" class="btn btn-primary">Добавить</button>
    <script>
        document.getElementById('addTournamentButton').addEventListener('click', function() {

            window.location.href = "{{ route('tournaments.create') }}";
        });
    </script>
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
