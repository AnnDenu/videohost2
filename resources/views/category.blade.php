<x-app-layout>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-white">Категории</h3>
        <div class="h-1 bg-gray-800 w-48"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($categories as $category)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <div class="items-center justify-between mb-5">
                        <h3 class="text-gray-700 uppercase">{{ $category->name }}</h3>
                        <p class="mt-2 text-gray-500 font-semibold">Описание:{{ $category->description }}</p>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>