<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Редактирование авто</title>
</head>
<body>
<h1>Редактирование авто</h1>
<a href="{{ route('cars.index') }}">Вернуться к списку авто</a><br><br>
@if($errors->any())
    <div style="color: red;">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
<form action="{{ route('cars.update', [$car->id]) }}" method="post">
    @csrf
    <label>Марка:</label>
    <input type="text" name="mark" value="{{ old('mark', $car->mark) }}" autocomplete="off"><br><br>
    <label>Модель:</label>
    <input type="text" name="model" value="{{ old('model', $car->model) }}" autocomplete="off"><br><br>
    <label>Год:</label>
    <input type="number" name="year" value="{{ old('year', $car->year) }}" required autocomplete="off"><br><br>
    <label>Описание:</label><br><br>
    <textarea name="description" rows="10">{{ old('description', $car->description) }}</textarea><br><br>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>
