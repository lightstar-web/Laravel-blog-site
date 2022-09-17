<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <div>
                    <h1 class="text-xl font-bold pt-8 pb-2">
                        Posts of: {{ Auth::user()->name }}
                    </h1>

                    @foreach(Auth::user()->posts as $post)
                        <h2>{{ $post->title }}</h2>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
