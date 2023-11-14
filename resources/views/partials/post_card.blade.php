<div class="p-2">
    <h2> <a href="/posts/{{$post->slug}}"> {{$post->title}} </a></h2>
    <p>{{substr($post->content, 0, 200) }}...</p>
</div>