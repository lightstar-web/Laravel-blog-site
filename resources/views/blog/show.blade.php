<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-100">
    <h1 class=" title m-3 text-2xl text-white bg-emerald-600 font-bold p-3 text-center">
        {{ $post->title }}
    </h1>
</div>
</body>
</html>
