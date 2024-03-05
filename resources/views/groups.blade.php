<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Группы пользователя</title>
</head>
<body>
<h2>Группы пользователя</h2>

@if($groups->isNotEmpty())
    <table border="1">
        <thead>
        <td>ID</td>
        <td>Название</td>
        </thead>
        @foreach($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->name }}</td>
            </tr>
        @endforeach
    </table>
@else
    <p>Пользователь не принадлежит ни к одной группе.</p>
@endif

</body>
</html>
