@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- Hero Section -->
    <div class="bg-emerald-900 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Bienvenue dans votre espace Ramadan</h1>
            <p class="text-xl mb-8">Partagez vos expériences, découvrez des recettes et enrichissez votre spiritualité</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-white text-emerald-900 px-6 py-3 rounded-lg font-semibold hover:bg-emerald-100 transition">Découvrir</a>
                <a href="#" class="border-2 border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-emerald-900 transition">Partager</a>
            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Recipes Card -->
            <a href="/recipes" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">
                <div class="text-emerald-900 text-4xl mb-4">🍽️</div>
                <h3 class="text-xl font-bold mb-2">Recettes</h3>
                <p class="text-gray-600">Découvrez et partagez des recettes traditionnelles pour l'iftar et le suhoor.</p>
            </a>

            <!-- Experiences Card -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">
                <div class="text-emerald-900 text-4xl mb-4">📿</div>
                <h3 class="text-xl font-bold mb-2">Expériences</h3>
                <p class="text-gray-600">Partagez vos moments spirituels et vos réflexions pendant ce mois sacré.</p>
            </div>

            <!-- Daily Tips Card -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">
                <div class="text-emerald-900 text-4xl mb-4">🌟</div>
                <h3 class="text-xl font-bold mb-2">Conseil du Jour</h3>
                <p class="text-gray-600">Recevez quotidiennement des conseils inspirants pour votre cheminement spirituel.</p>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="bg-emerald-800 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">150+</div>
                    <div class="text-emerald-200">Recettes Partagées</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">300+</div>
                    <div class="text-emerald-200">Membres Actifs</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">450+</div>
                    <div class="text-emerald-200">Expériences</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">30</div>
                    <div class="text-emerald-200">Conseils du Jour</div>
                </div>
            </div>
        </div>
    </div>
@endsection