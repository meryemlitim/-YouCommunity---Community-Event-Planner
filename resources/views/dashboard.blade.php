<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestion des Événements</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-600 text-white min-h-screen p-6">
        <a href="index.html" class="flex items-center text-primary">
            <h1 class="text-3xl font-extrabold uppercase text-white-600 flex items-center space-x-3">
                <i class="fas fa-book-reader text-5xl"></i>
                <span>community <br> Event</span>
            </h1>
        </a>        
        <nav class="space-y-10 mt-10">
            <a href="#" class="block px-4 py-2 bg-blue-700 rounded hover:bg-blue-800">📅 Mes Événements</a>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="block w-full text-left px-4 py-2 bg-red-500 hover:bg-red-600 rounded">🚪 Déconnexion</button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Mes Événements</h1>
            <a href="/events/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">➕ Ajouter un Événement</a>
        </header>

        <!-- Event List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Event Card -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Nom de l'Événement</h3>
                <p class="text-gray-600 mt-2">Description brève de l'événement...</p>
                <div class="mt-4 flex justify-between">
                    <a href="#" class="text-blue-600 hover:underline">Modifier</a>
                    <button class="text-red-600 hover:underline">Supprimer</button>
                </div>
            </div>
            <!-- Duplicate this div for more events -->
        </div>
    </main>

</body>
</html>
