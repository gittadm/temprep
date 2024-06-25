<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Добавить авто</title>
</head>
<body>
<h1>Новое авто</h1>
<a href="{{ route('cars.index') }}">Вернуться к списку авто</a><br><br>
@if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('cars.store') }}" method="post">
    @csrf
    <label>Марка:</label>
    <input type="text" name="mark" value="{{ old('mark', 'Ауди') }}" autocomplete="off"><br><br>
    <label>Модель:</label>
    <input type="text" name="model" value="{{ old('model', 'А4') }}" autocomplete="off"><br><br>
    <label>Год:</label>
    <input type="number" name="year" value="{{ old('year', '2000') }}" required autocomplete="off"><br><br>
    <label>Описание:</label><br><br>
    <textarea name="description" rows="10">{{ old('description', 'В отличном состоянии') }}</textarea><br><br>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>
