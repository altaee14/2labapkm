<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Друзья</title>
</head>
<body>
    <h2>{{$friend ? "Список друзей ".$friend->id : 'Список друзей пуст' }}</h2>
    @if($friend)
    <table border="1">
        <thead>
            <td>id</td>
            <td>Имя</td>
        </thead>
@foreach($friend->$users as $user)
    <tr>
       <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
    </tr>
@endforeach
    </table>
    @endif
</body>
</html>
