<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado</h1>

    @foreach ($posts as $post)
    <p>
        <strong>{{ $post['id'] }}</strong>
        <a href="">{{ $post['titel'] }} </a>
    </p>
    @endforeach
</body>
</html>