<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Page</title>
</head>
<body>
    <div class="w-75 mx-auto">
        <h1>Page D'article <a href="/posts/create">Nouveau Article</a></h1>
       @foreach ($posts as $post)
           <div class="p-2">
                <h2> <a href="/posts/{{$post->id}}"> {{$post->title}} </a></h2>
                <p>{{substr($post->content, 0, 200) }}...</p>
           </div>
       @endforeach
    </div>
</body>
</html>