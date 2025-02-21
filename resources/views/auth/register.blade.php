<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Événements Communautaires</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <main class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Créer un compte</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nom</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                       class="mt-1 block w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                       class="mt-1 block w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Mot de passe</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="mt-1 block w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirmer le mot de passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="mt-1 block w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('password_confirmation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">Déjà inscrit ?</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    S'inscrire
                </button>
            </div>
        </form>
    </main>
   
</body>
</html>
