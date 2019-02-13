<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
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

            @foreach($projects as $project)
               <tr>
                   <td>{{ $project -> user }}</td>
                   <td>{{ $project -> access_right }}</td>
                   <td>{{ $project -> registered }}</td>
               </tr>
            @endforeach
        </table>
    </body>
</html>
