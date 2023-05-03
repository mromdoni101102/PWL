<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program</title>
</head>
<body>
    <h1>{{$judul}}</h1>
    <ol>
        @foreach ($list as $list)
        <li>{{$list}}</li>
        @endforeach
    </ol>
    
</body>
</html>