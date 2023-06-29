<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script> -->
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/example.js'])
    </head>
    <body id="top" class="font-sans antialiased">

        @if (session('feedback.success'))
        <!-- <p class="text-green-500">{{ session('feedback.success') }}</p> -->
        <x-result-modal>{{session('feedback.success')}}</x-result-modal>
        @endif


        <div class="min-h-screen">
            @include('layouts.navigation')


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-800 dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main id="main" class="max-w-7xl mx-auto p-5">
                {{ $slot }}
            </main>
        </div>

        <button class="fixed bottom-10 right-10 px-4 py-2 bg-gray-600 hover:bg-gray-900 text-white rounded-md transition" onclick="location.href='#top'">TOP</button>
    </body>
</html>
