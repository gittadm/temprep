<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>HTML5</title>
</head>
<body>
<h1>Lessons</h1>
<?php echo \App\Http\Controllers\LessonsController::class;?>
<br>
{{ $email }}
<br>
{!! $email !!}
<br>
@if($email !== '')
    {!! $email9 !!}
@endif
<br>
@foreach ($lessons as $lesson)
    <p>{{ $lesson }}</p>
@endforeach
<br>
<?php echo $one; ?>
</body>
</html>
