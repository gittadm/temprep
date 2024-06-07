<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Список авто</title>
</head>
<body>
<h1>Список всех авто</h1>
<a href="{{ route('cars.create') }}">Добавить авто</a><br><br>

@if(session('success'))
    <h3 style="color: green; font-size: 28px;">{{ session('success') }}</h3> <br>
@endif

@if(session('error'))
    <h3 style="color: red; font-size: 28px;">{{ session('error') }}</h3> <br>
@endif

<table>
    <tr>
        <td>ID</td>
        <td>Марка</td>
        <td>Модель</td>
        <td>ВИН</td>
        <td>Цвет</td>
        <td>Пробег</td>
        <td>Год</td>
        <td>Описание</td>
        <td>Добавлена</td>
        <td></td>
        <td></td>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->mark }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->vin }}</td>
            <td>{{ $car->color }}</td>
            <td>
                @if($car->length < 50000)
                    <span style="color: #157347; font-size: larger; font-weight: bold;">{{ $car->length }}</span>
                @else
                    {{ $car->length }}
                @endif
            </td>
            <td>{{ $car->year }}</td>
            <td>{{ \Illuminate\Support\Str::limit($car->description, 20) }}</td>
            <td>{{ $car->created_at }}</td>
            <td><button>Редактировать</button></td>
            <td><a href="{{ route('cars.delete', [$car->id]) }}">Удалить</a></td>
        </tr>
    @endforeach
</table>


</body>
</html>
