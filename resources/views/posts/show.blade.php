<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Page</title>
</head>
<body>
    <div class="w-75 mx-auto border-1 border-gray-200">
        <h2> {{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <a href="/posts">Retour</a>
    </div>
</body>
</html>