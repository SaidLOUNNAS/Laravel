<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>
    <h1>Listes des Articles</h1>
    @foreach ($posts as $post )
    <h3>{{$post}}</h3>
    @endforeach


</body>

</html>
