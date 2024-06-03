<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Занятие 03.06</title>
</head>
<body>
<p>
    Дан массив целых чисел. После каждого числа определенного вида вставить заданное число.
</p>
<form action="{{ route('session.store.task1') }}" method="post">
    @csrf
    <input type="text" name="data" value="{{ session()->exists('data') ? session('data') : '12 -3 9 -4 -3 23 12' }}" required autocomplete="off"><br><br>
    <input type="text" name="number" value="{{ session()->exists('number') ? session('number') : 0 }}" placeholder="например, 0" required autocomplete="off"><br><br>
    <select name="type" autocomplete="off">
        <option value="1" @if(session('type') == '1') selected @endif>после отрицательного</option>
        <option value="2" @if(session('type') == '2') selected @endif>после положительного</option>
    </select><br><br>
    <button type="submit">Выполнить</button>
</form>

<br>
{{ session('solution') }}

</body>
</html>
