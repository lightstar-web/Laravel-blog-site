<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Abdellatif Laghjaj</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-100">
    @forelse($posts as $post)
        <h1 class=" title m-3 text-2xl text-white bg-emerald-600 font-bold p-3 text-center">
            {{ $loop->index }}
        </h1>
    @empty
        <h1 class=" title m-3 text-2xl text-red-800 bg-red-400 font-bold p-3 text-center">
            No posts !
        </h1>
    @endforelse
</div>
</body>
</html>
