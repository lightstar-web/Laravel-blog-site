<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create blog</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-full bg-gray-100">
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create a blog</h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px rounded-md shadow-sm">
                <div class="my-2">
                    <label for="title" class="sr-only">Title</label>
                    <input id="title" name="title" type="text" autocomplete="title" required
                           class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Blog Title">
                </div>

                <div class="my-2">
                    <label for="excerpt" class="sr-only">Excerpt</label>
                    <input id="excerpt" name="excerpt" type="text" autocomplete="excerpt" required
                           class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Blog Excerpt">
                </div>

                <div class="my-2">
                    <label for="body" class="sr-only">Body</label>
                    <textarea id="body" name="body" type="text" autocomplete="body" required
                              class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                              placeholder="Blog Body"></textarea>
                </div>

                <div class="my-2">
                    <label for="category" class="sr-only">Minutes to read</label>
                    <input id="min_to_read" name="min_to_read" type="number" min="1" autocomplete="min_to_read" required
                           class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Blog reading duration">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="is_published" name="is_published" type="checkbox"
                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="is_published" class="ml-2 block text-sm text-gray-900">Is Published</label>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="mb-3 w-96">
                    <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Blog image</label>
                    <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
                </div>
            </div>

            <div>
                <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Create blog
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


