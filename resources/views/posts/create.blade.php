<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Page</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="w-80 p-2 mx-auto border-1 border-gray-200">
        <form class="space-y-4" action="/posts" method="post">
            @csrf
            <div class="w-full flex flex-col">
                <label for="title" class="text-gray-500">Titre:</label>
                <input type="text" placeholder="Exp: First Post" 
                class="rounded-md h-10 border-0 px-4 py-3 shadow placeholder-gray-300" name="title">
            </div>
            <div class="w-full">
                <label for="content" class="text-gray-500">Contenu:</label>
                <textarea class="w-full rounded-md border-0 px-4 py-3 shadow placeholder-gray-300" name="content" id="content" cols="30" rows="5"></textarea>
            </div>
            <button class="rounded-md p-2 bg-indigo-500 text-white">Enregistrer</button>
        </form>
    </div>
</body>
</html>