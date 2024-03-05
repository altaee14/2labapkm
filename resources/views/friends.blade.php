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
<h2>{{$user_friends ? "Список друзей пользователя ".$user_friends->user1_id : "Список друзей пуст"}}</h2>
@if($user_friends)
<table border="1">
    <thead>
    <td>id 1</td>
    <td>id 2</td>
    </thead>
    @foreach($user_friends->users as $friends)
        <tr>
            <td>{{$friends->user1_id}}</td>
            <td>{{$friends->name}}</td>
        </tr>
    @endforeach
</table>
@endif
</body>
</html>


