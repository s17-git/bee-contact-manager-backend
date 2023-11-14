<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Page</title>
    @vite('resources/css/app.css')
    <style>
        .disabled {
            background: red;
        }
    </style>
</head>

<body>


    {{-- <div class="w-75 mx-auto">
        <h1>Page D'article <a href="/posts/create" class="text-white bg">+ Nouveau Article</a></h1>
        @foreach ($posts as $post)
            <div class="p-2">
                <h2> 
                    <a href="/posts/{{$post->slug}}" class="text-2xl text-indigo-500"> 
                        {{$post->title}} 
                    </a>
                </h2>
                <p>{{substr($post->content, 0, 200) }}...</p>
            </div>
        @endforeach
    </div> --}}

    {{-- <div class="w-75 mx-auto">
        <h1>Page D'article <a href="/posts/create" class="text-white bg">+ Nouveau Article</a></h1>
        @for ($i = 0; $i < count($posts); $i++)
            <h2>{{$posts[$i]->title}}</h2>
        @endfor
    </div> --}}

    {{-- <div class="w-75 mx-auto">
        <h1>Page D'article <a href="/posts/create" class="text-white bg">+ Nouveau Article</a></h1>
        @for ($i = 0; $i < count($posts); $i++)
            <h2>{{$posts[$i]->title}}</h2>
        @endfor
    </div> --}}

    {{-- <div class="w-75 mx-auto">
        <h1>Page D'article <a href="/posts/create" class="text-white bg">+ Nouveau Article</a></h1>
        @foreach ($posts as $post)
            @unless ($post->is_published)
                <h1>Pas Encore Publier</h1>
                <h2>{{$post->title}}</h2>
            @endif
        @endforeach
    </div> --}}

 

    <h1>Page D'article <a href="/posts/create" class="text-white bg">+ Nouveau Article</a></h1>
    <div class="mx-auto py-5 md:w-3/4 grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <div class="relative w-80 mx-auto md:w-auto flex  flex-col  rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="p-6">
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        {{$post->title}}
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        {{substr($post->content, 0, 150) }}...
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        @class(
                            [
                                'disabled' => !$post->is_published,
                                'select-none', 'rounded-lg', 'py-3', 'bg-indigo-500', 'px-6', 'text-center', 'align-midddle', 'font-sans',
                                'text-xs', 'font-bold', 'uppercase', 'text-white', 'shadow-md', 'shadow-indigo-500/20', 'transition-all', 'hover:shadow-lg', 'hover:shadow-indigo-500/40', 'focus:opacity-[0.85]', 'focus:shadow-none', 'active:opacity-[0.85]', 'active:shadow-none', 'disabled:opacity-50', 'disabled:shadow-none' ,
                            ]
                        )
                        type="button">
                        Read More
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
