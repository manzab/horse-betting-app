<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr class="table-danger">
                <td>Name</td>
                <td>Runs</td>
                <td>Wins</td>
                <td>About</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($horses as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->wins }}</td>
                <td>{{ $data->runs }}</td>
                <td>{{ $data->about }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>