<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 antialiased">
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-gray-100 to-gray-300">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-center text-gray-800">Bem-vindo</h1>
            <p class="mt-4 text-sm text-center text-gray-600">
                Acesse sua conta para continuar.
            </p>
            <div class="mt-6 text-center">
                <a href="{{ route('login') }}"
                   class="inline-block px-6 py-3 text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                   Login
                </a>
            </div>
        </div>
    </div>
</body>
</html>
