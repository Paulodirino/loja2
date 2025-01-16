<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD
    <head>
=======
 <head>
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
<<<<<<< HEAD
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
=======
 </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
 @include('product.partials.header')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
 </div>
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
<<<<<<< HEAD
        </div>
    </body>
</html>
=======
 </div>
 </body>
 </html>
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
