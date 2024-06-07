<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Добавить авто</title>
</head>
<body>
<h1>Новое авто</h1>
<a href="{{ route('cars.index') }}">Вернуться к списку авто</a><br><br>
<form action="{{ route('cars.store') }}" method="post">
    @csrf
    <label>Марка:</label>
    <input type="text" name="mark" value="Ауди" required autocomplete="off"><br><br>
    <label>Модель:</label>
    <input type="text" name="model" value="A4" required autocomplete="off"><br><br>
    <label>Год:</label>
    <input type="number" min="1980" max="2025" name="year" value="2000" required autocomplete="off"><br><br>
    <label>Описание:</label><br><br>
    <textarea name="description" rows="10">В отличном состоянии</textarea><br><br>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>
