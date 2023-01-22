<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="h-full">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        <div class="min-h-full">
            <nav class="bg-indigo-600">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300"
                                    alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                                    <a href={{ route('home') }}
                                        class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium"
                                        aria-current="page">Home</a>

                                    {{-- <a href="#"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium">Team</a>

                                    <a href="#"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                    <a href="#"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium">Calendar</a>

                                    <a href="#"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium">Reports</a> --}}
                                </div>
                            </div>
                        </div>
                        {{-- Profile section --}}
                        {{-- <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button type="button"
                                    class="rounded-full bg-indigo-600 p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600">
                                    <span class="sr-only">View notifications</span>
                                    <!-- Heroicon name: outline/bell -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                    </svg>
                                </button>

                                <!-- Profile dropdown add links prop -->
                                <x-partials.dropdown />
                            </div>
                        </div> --}}
                        <div
                            x-data=""
                            class="-mr-2 flex md:hidden">
                            <!-- Mobile menu button -->
                            <button
                                @click="$dispatch('foo')"
                                type="button"
                                class="inline-flex items-center justify-center rounded-md bg-indigo-600 p-2 text-indigo-200 hover:bg-indigo-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!--
                            Heroicon name: outline/bars-3

                            Menu open: "hidden", Menu closed: "block"
                          -->
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!--
                            Heroicon name: outline/x-mark

                            Menu open: "block", Menu closed: "hidden"
                          -->
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <x-layouts.mobile-nav/>
            </nav>

            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-lg font-semibold leading-6 text-gray-900">Dashboard</h1>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    <!-- Replace with your content -->
                    {{ $slot }}
                    <!-- /End replace -->
                </div>
            </main>
            {{-- named slot for footer --}}
            @if ($footer ?? false)
            <footer class="fixed bottom-0 w-full bg-white shadow">
                <div class="flex justify-center mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                    <div class="text-sm text-gray-500">
                        {{ $footer ?? ''  }}
                    </div>
                </div>
            </footer>
            @endif
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
