<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $post->meta->meta_description ? $post->meta->meta_description : ''}}">
    <meta name="keyword" content="{{ $post->meta->meta_keywords ? $post->meta->meta_keywords : ''}}">
    <meta name="keyword" content="{{ $post->meta->meta_robots ? $post->meta->meta_robots : ''}}">
    <title>{{ $post->title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<!-- component -->
<section class="bg-white h-screen dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                 src="{{ $post->image_path }}"
                 alt="">

            <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                @foreach($post->categories as $category)
                    <span class="px-4 py-2 bg-yellow-400 text-white rounded-md mr-2">
                        {{ $category->title }}
                    </span>
                @endforeach

                <a href="#"
                   class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                    {{ $post->title }}
                </a>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                    {{ $post->excerpt }}
                </p>

                <p class="mt-3 text-sm font-bold text-gray-500 dark:text-gray-300 md:text-sm">
                    {{ $post->body }}
                </p>

                <div class="flex items-center mt-6">
                    <img class="object-cover object-center w-10 h-10 rounded-full"
                         src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                         alt="">

                    <div class="mx-4">
                        <h1 class="text-sm text-gray-700 dark:text-gray-200">{{  $post->user->name }}</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $post->updated_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
