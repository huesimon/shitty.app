<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        {{-- <header class="max-w-4xl mx-auto">
            <nav class="flex flex-row justify-between">
                <div>Logo</div>
                <div>Search</div>
                <div>Login or signup</div>
            </nav>
        </header> --}}

        <div class="flex flex-row h-screen">
            <div class="flex flex-col justify-between items-center w-16 bg-gray-200 p-4">
                <div class="flex flex-col space-y-4">
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                </div>
                <div class="flex flex-col space-y-4">
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                    <a href="#">
                        <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                    </a>
                </div>


            </div>
            <div class="flex flex-col space-y-4 w-64 p-4 bg-gray-100">
                <div class="flex flex-row justify-between items-center mb-6 ">
                    <h1 class="text-2xl">Inbox</h1>
                    <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <div class="bg-red-200 h-64 ">a</div>
                <div class="bg-red-200 h-64 ">a</div>
            </div>
            <div class="flex-grow bg-white rounded-tl-xl shadow-xl">main content</div>
        </div>
    </body>

    @livewireScripts
</html>
