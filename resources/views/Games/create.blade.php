<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление игры</title>
</head>
<body>

<form method="post" action="{{ route('games.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="col-8">
            <h1>Добавить игру</h1>
            <div class="form-group">
                <label for="title">Название игры</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="genre">Категория</label>
                <select class="form-control" id="genre_id" name="genre_id">
                    <option value="1">MOBA</option>
                    <option value="2">Shooter</option>
                    <!-- Добавьте другие опции для доступных жанров -->
                </select>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </div>
</form>


</body>
</html>
