<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Students</title>
</head>
<body>
@foreach($students as $student)
    <p>{{ $student->id }} {{ $student->surname }} {{ $student->name }} {{ $student->year }}</p>
@endforeach
</body>
</html>
