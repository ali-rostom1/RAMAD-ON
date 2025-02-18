@extends('layouts.app')
@section('title', 'Authentification')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-amber-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Welcome Section -->
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <h1 class="text-4xl font-bold text-amber-900 mb-4">Bienvenue sur RAMAD-ON</h1>
                <p class="text-lg text-gray-600 mb-8">Votre compagnon digital pour un Ramadan serein et organisé.</p>
                <div class="bg-amber-100 rounded-lg p-6 mb-8">
                    <h3 class="text-xl font-semibold text-amber-900 mb-3">Pourquoi nous rejoindre ?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Accédez à des recettes exclusives
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Partagez avec la communauté
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            Gérez votre planning
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Login Form -->
            <div class="w-full md:w-1/2">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-amber-900">Connexion</h2>
                        <p class="mt-2 text-gray-600">Heureux de vous revoir !</p>
                    </div>

                    <form class="space-y-6" action="{{route("login.store")}}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input type="email" id="email" name="email" required class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" id="password" name="password" required class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember-me" name="remember-me" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                            </div>
                            <a href="#" class="text-sm font-medium text-amber-600 hover:text-amber-500">Mot de passe oublié ?</a>
                        </div>

                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-amber-900 hover:bg-amber-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors duration-200">
                            Se connecter
                        </button>

                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600">
                                Vous n'avez pas de compte ? 
                                <a href="/register" class="font-medium text-amber-600 hover:text-amber-500 transition-colors duration-200">Créer un compte</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection