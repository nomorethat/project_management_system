<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            margin: 0 auto;
            margin-top: 40px;
        }
        table tr td, table tr th{
            min-width: 200px;
            border: 1px solid #000;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <table cellpadding="0" cellspacing="0">

        <tr>
            <th>Пользователь</th>
            <th>Права доступа</th>
            <th>Зарегистрирован</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td><a href="/users/{{ $user -> id }}">{{ $user -> user }}</td>
                <td>{{ $user -> access_right }}</td>
                <td>{{ $user -> registered }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>