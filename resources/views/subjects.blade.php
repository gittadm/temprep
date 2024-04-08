<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Subjects</title>
</head>
<body>
<h1>Subjects</h1>
<hr>
<p>Все работает</p>
{{ $subject }}
<br>
{{ $name . '!' }}
<br>
@if($count<=4)
    <h2>Заказы доступны. У вас {{ $count }} заказов</h2>
@else
    <h2>Заказы недоступны</h2>
@endif

@php
    $number = 2025;
@endphp

<ol>
    @foreach($subjects as $subject)
        @php $number++; @endphp
        @if($subject === 'Математика')
            <li style="color: red;">{{ $subject }}</li>
        @else
            <li>{{ $subject }} {{ $number }}</li>
        @endif
    @endforeach
</ol>

@for($i = 0; $i < $count; $i++)
    {{ $i }} - ***;
@endfor

</body>
</html>
