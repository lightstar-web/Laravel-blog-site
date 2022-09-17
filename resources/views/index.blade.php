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
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50 h-screen flex flex-col justify-center items-center py-12 sm:px-6 lg:px-8">
    <div
        class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex mb-3 lg:items-center lg:justify-between gap-3 lg:py-16 lg:px-8 flex-col">
        <h2 class="text-3xl font-bold flex flex-col gap-2 items-center justify-center tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">Abdel<span class="text-indigo-600">.</span> Blog</span>
            <span class="block text-indigo-600">Check out my latest posts</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('blog.index') }}"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">
                    Browse now
                </a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
                <a href="{{ route('blog.create') }}"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">
                    Add new blog
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
