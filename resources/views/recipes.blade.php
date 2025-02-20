@extends('layouts.app')
@section('title', 'Recettes pour Iftar et Suhoor')


@section('content')
<!-- Recipe Page Content -->
<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Filters Section -->
    <div class="mb-8 bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold text-amber-900 mb-4">Filtrer les Recettes</h2>
            <!-- New Post Button -->
            <div class="mb-8">
                <button class="bg-amber-900 text-white px-6 py-3 rounded-lg hover:bg-amber-800 transition flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Partager vos recettes</span>
                </button>
            </div>
        </div>
        <div class="flex flex-wrap gap-4">
            <a href="{{route('recipes')}}" class="px-6 py-2 bg-amber-900 text-white rounded-full hover:bg-amber-800 transition">Tous</a>
            @foreach ($categories as $category)
                <a href="/recipes/category/{{$category->id}}" class="px-6 py-2 bg-white text-amber-900 border border-amber-900 rounded-full hover:bg-amber-50 transition">{{$category->name}}</a>
            @endforeach
        </div>
    </div>

    <!-- Recipe Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($recipes as $recipe)
        <!-- Recipe Card  -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
            <img src="{{$recipe->imagePath}}" alt="Recipe" class="w-full h-48 object-cover"/>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-amber-900">{{$recipe->name}}</h3>
                    <span class="bg-amber-100 text-amber-800 text-sm px-3 py-1 rounded-full">{{$recipe->category->name}}</span>
                </div>
                <p class="text-gray-600 mb-4">{{$recipe->textContent}}</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>10 mins</span>
                    </div>
                    <button class="text-amber-900 hover:text-amber-700 font-medium">Voir la recette →</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Pagination -->
    <div class="mt-8 ">
        {{ $recipes->links()}}
        {{-- <nav class="flex items-center space-x-2">
            <button class="px-4 py-2 border border-amber-900 text-amber-900 rounded-md hover:bg-amber-50">Précédent</button>
            <button class="px-4 py-2 bg-amber-900 text-white rounded-md">1</button>
            <button class="px-4 py-2 border border-amber-900 text-amber-900 rounded-md hover:bg-amber-50">2</button>
            <button class="px-4 py-2 border border-amber-900 text-amber-900 rounded-md hover:bg-amber-50">3</button>
            <button class="px-4 py-2 border border-amber-900 text-amber-900 rounded-md hover:bg-amber-50">Suivant</button>
        </nav> --}}
    </div>
</div>
@endsection