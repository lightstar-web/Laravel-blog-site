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
<body class="w-full h-full bg-gray-100">
<div class=" mx-auto w-4/5 bg-indigo-600 mt-2 rounded-lg">
    <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex w-0 flex-1 items-center">
                <p class="ml-3 truncate font-medium text-white">
                    <span class="hidden md:inline font-bold text-2xl">All Blogs</span>
                </p>
            </div>
            <div class="order-3 mt-2 w-full flex-shrink-0 sm:order-2 sm:mt-0 sm:w-auto">
                <a href="{{ route('blog.create') }}"
                   class="flex items-center justify-center font-bold rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium text-indigo-600 shadow-sm hover:bg-indigo-50">
                    Add new blog
                </a>
            </div>
        </div>
    </div>
</div>

@if(session()->has('message'))
    <div id="message"
         class=" mx-auto w-4/5 my-3 py-3 px-4 bg-green-400 text-green-800 flex items-center justify-center font-bold rounded-lg">
        {{ session()->get('message') }}
    </div>
@endif

@foreach($posts as $post)
    <!-- Card 1 -->
    <div class=" grid w-4/5 mx-auto col-span-4 relative my-3 rounded-lg">
        <div
            class="group shadow-lg hover:shadow-2xl duration-200 delay-75 rounded-lg w-full bg-white rounded-sm py-6 pr-6 pl-9">

            <!-- Title -->
            <p class="text-2xl font-bold text-gray-500 group-hover:text-gray-700">
                {{ $post->title }}
            </p>

            <!-- Description -->
            <p class="text-sm font-semibold text-gray-500 group-hover:text-gray-700 mt-2 leading-6">
                {{ $post->excerpt }}
            </p>

            <p class="text-sm font-semibold text-gray-500 group-hover:text-gray-700 mt-2 leading-6">
                Added by <span
                    class=" text-blue-600">{{ $post->user->name }}</span> {{ $post->updated_at->diffForHumans() }}
            </p>

            <div class="btns mt-3 flex flex-row">
                <a href="{{ route('blog.show', $post->id) }}"
                   class="mt-2 mr-2 bg-blue-500 py-2 px-4 rounded-md text-white">
                    View
                </a>
                <a href="{{ route('blog.edit', $post->id) }}"
                   class="mt-2 mr-2 bg-green-500 py-2 px-4 rounded-md text-white">
                    Edit
                </a>
                <form action="{{ route('blog.destroy', $post->id) }}" method="POST">
                    @csrf()
                    @method('DELETE')
                    <button type="submit" class="mt-2 bg-red-500 py-2 px-4 rounded-md text-white">
                        Delete
                    </button>
                </form>
            </div>

            <!-- Color -->
            <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"></div>
        </div>
    </div>
    </div>
@endforeach
<div class="w-4/5 p-3 mx-auto">
    {{ $posts->links() }}
</div>
</body>

<script>
    const message = document.getElementById('message');
    setTimeout(() => {
        message.style.display = 'none';
    }, 3000);
</script>

</html>
