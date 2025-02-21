<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements Communautaires</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white py-4 px-6 flex justify-between items-center">
        <a href="index.html" class="flex items-center text-primary">
            <h1 class="text-3xl font-extrabold uppercase text-white-600 flex items-center space-x-3">
                <i class="fas fa-book-reader text-5xl"></i>
                <span>community                 <br>                    Event</span>
            </h1>
        </a>
        <div class="flex items-center space-x-4">
            <nav class="space-x-4">
                <a href="#" class="hover:underline">Home</a>
                <a href="#" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Contact Us</a>
            </nav>
        </div>
        <div class="space-x-4">
            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
        </div>
    </header>
    
    <main class="max-w-6xl mx-auto my-10 p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">📅 Liste des Événements</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-200 p-4 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Événement 1</h3>
                <p class="mt-2">Description de l'événement 1.</p>
                <p class="mt-2 font-semibold">📍 Lieu : Paris</p>
                <p class="mt-2 font-semibold">📅 Date : 10 Mars 2025</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Événement 2</h3>
                <p class="mt-2">Description de l'événement 2.</p>
                <p class="mt-2 font-semibold">📍 Lieu : Lyon</p>
                <p class="mt-2 font-semibold">📅 Date : 15 Mars 2025</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Événement 3</h3>
                <p class="mt-2">Description de l'événement 3.</p>
                <p class="mt-2 font-semibold">📍 Lieu : Marseille</p>
                <p class="mt-2 font-semibold">📅 Date : 20 Mars 2025</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Événement 4</h3>
                <p class="mt-2">Description de l'événement 4.</p>
                <p class="mt-2 font-semibold">📍 Lieu : Toulouse</p>
                <p class="mt-2 font-semibold">📅 Date : 25 Mars 2025</p>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <nav class="flex space-x-2">
                <a href="#" class="px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">&laquo; Précédent</a>
                <a href="#" class="px-3 py-2 bg-gray-300 text-gray-700 rounded-lg">1</a>
                <a href="#" class="px-3 py-2 bg-gray-300 text-gray-700 rounded-lg">2</a>
                <a href="#" class="px-3 py-2 bg-gray-300 text-gray-700 rounded-lg">3</a>
                <a href="#" class="px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Suivant &raquo;</a>
            </nav>
        </div>
    </main>
    
    {{-- <footer class="bg-blue-600 text-white text-center py-4 mt-10">
        <p>&copy; 2025 Plateforme Événements Communautaires - Tous droits réservés</p>
    </footer> --}}
</body>
</html>
