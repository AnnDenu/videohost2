<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center">Загрузите видео</h1>
                    <button type="button" class="btn btn-outline-dark"><a href = "video-upload">Жмяк</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @section('content')
                    <h1 class="text-center">Последние 10 видеороликов</h1>
                    @foreach($limits as $elem)
                        <div class = "alert alert-info">
                        <h3>{{$elem -> path}}</h3>
                        <p>{{$elem -> title}}</p>
                        <p>{{$elem -> description}}</p>
                        <p><small>{{$elem -> created_at}}</small></p>
                        </div>
                    @endforeach
                    @endsection
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
