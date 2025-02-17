@extends('layouts.app')
@section('title', ' Ramadan Experiences')

@section('content')
<!-- Experiences Page Content -->
<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- New Post Button -->
    <div class="mb-8">
        <button class="bg-amber-900 text-white px-6 py-3 rounded-lg hover:bg-amber-800 transition flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Partager votre expérience</span>
        </button>
    </div>

    <!-- Posts Grid -->
    <div class="space-y-6">
        <!-- Post 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Post Header -->
            <div class="p-6">
                <div class="flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="User Avatar" class="w-12 h-12 rounded-full"/>
                    <div>
                        <h3 class="font-semibold text-gray-900">Ahmed Benali</h3>
                        <p class="text-sm text-gray-500">Il y a 2 heures</p>
                    </div>
                </div>
            </div>

            <!-- Post Content -->
            <div class="px-6 pb-4">
                <p class="text-gray-700 mb-4">
                    Aujourd'hui marque mon 10ème jour de Ramadan. Je suis reconnaissant pour cette période de réflexion et de spiritualité. Le fait de jeûner m'a permis de développer plus d'empathie envers ceux qui sont dans le besoin. #Ramadan2025 #Gratitude
                </p>
                <img src="/api/placeholder/800/400" alt="Post Image" class="rounded-lg w-full object-cover mb-4"/>
                
                <!-- Interaction Buttons -->
                <div class="flex items-center space-x-6 text-gray-500">
                    <button class="flex items-center space-x-2 hover:text-amber-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span>125 J'aime</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-amber-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>23 Commentaires</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-amber-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                        <span>Partager</span>
                    </button>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="px-6 py-4 bg-gray-50 border-t">
                <div class="space-y-4">
                    <div class="flex space-x-4">
                        <img src="/api/placeholder/32/32" alt="Commenter Avatar" class="w-8 h-8 rounded-full"/>
                        <div class="flex-1">
                            <p class="font-semibold text-sm text-gray-900">Sarah Mansouri</p>
                            <p class="text-gray-700 text-sm">MashaAllah, que Allah accepte vos actes d'adoration 🤲</p>
                        </div>
                    </div>
                </div>
                <!-- Add Comment -->
                <div class="mt-4 flex items-center space-x-4">
                    <img src="/api/placeholder/32/32" alt="Your Avatar" class="w-8 h-8 rounded-full"/>
                    <input type="text" placeholder="Ajouter un commentaire..." class="flex-1 border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:border-amber-500"/>
                    <button class="text-amber-900 font-medium">Publier</button>
                </div>
            </div>
        </div>

        <!-- Post 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="User Avatar" class="w-12 h-12 rounded-full"/>
                    <div>
                        <h3 class="font-semibold text-gray-900">Fatima Zahra</h3>
                        <p class="text-sm text-gray-500">Il y a 5 heures</p>
                    </div>
                </div>
            </div>
            <div class="px-6 pb-4">
                <p class="text-gray-700 mb-4">
                    Premier iftar organisé avec ma famille cette année. Le moment de partage par excellence ! La table est remplie de plats traditionnels préparés avec amour. Ces moments sont précieux. ❤️ #FamilyTime #Ramadan
                </p>
                <img src="/api/placeholder/800/400" alt="Post Image" class="rounded-lg w-full object-cover mb-4"/>
                
                <div class="flex items-center space-x-6 text-gray-500">
                    <button class="flex items-center space-x-2 hover:text-amber-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span>89 J'aime</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-amber-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>12 Commentaires</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-amber-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                        <span>Partager</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Load More -->
    <div class="mt-8 text-center">
        <button class="px-6 py-3 border-2 border-amber-900 text-amber-900 rounded-lg hover:bg-amber-50 transition">
            Voir plus d'expériences
        </button>
    </div>
</div>
@endsection 