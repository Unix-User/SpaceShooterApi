<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GYN0HVPHM8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GYN0HVPHM8');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML Meta Tags -->
    <title>SpaceShooter</title>
    <meta name="description" content="Explore o Universo com a nossa emocionante demonstração do SpaceShooter e embarque em uma aventura intergaláctica sem igual.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://spaceshooter.udianix.com.br">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SpaceShooter">
    <meta property="og:description" content="Explore o Universo com a nossa emocionante demonstração do SpaceShooter e embarque em uma aventura intergaláctica sem igual.">
    <!--
  You can generate this image URL dynamically: https://ogcdn.net/e4b8c678-7bd5-445d-ba03-bfaad510c686/v3/{site_text}/{title_text}/{image_url}/og.png
  Replace the variables in the brackets with your own values and use this URL in the image tag below this comment. Ensure values are URL encoded.
  For more information, read: https://www.opengraph.xyz/blog/how-to-implement-dynamic-open-graph-images
-->
    <meta property="og:image" content="https://ogcdn.net/e4b8c678-7bd5-445d-ba03-bfaad510c686/v3/spaceshooter.udianix.com.br/SpaceShooter/https%3A%2F%2Fopengraph.b-cdn.net%2Fproduction%2Fdocuments%2Fa22dad26-ccd8-45d8-8467-bf4b451d8c45.png%3Ftoken%3DUEq6zUufOUCLP_-czMZdiUFNwwEHB-IejZiudVjn1PY%26height%3D609%26width%3D343%26expires%3D33245303181/og.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="spaceshooter.udianix.com.br">
    <meta property="twitter:url" content="https://spaceshooter.udianix.com.br">
    <meta name="twitter:title" content="SpaceShooter">
    <meta name="twitter:description" content="Explore o Universo com a nossa emocionante demonstração do SpaceShooter e embarque em uma aventura intergaláctica sem igual.">
    <!--
  You can generate this image URL dynamically: https://ogcdn.net/e4b8c678-7bd5-445d-ba03-bfaad510c686/v3/{site_text}/{title_text}/{image_url}/og.png
  Replace the variables in the brackets with your own values and use this URL in the image tag below this comment. Ensure values are URL encoded.
  For more information, read: https://www.opengraph.xyz/blog/how-to-implement-dynamic-open-graph-images
-->
    <meta name="twitter:image" content="https://ogcdn.net/e4b8c678-7bd5-445d-ba03-bfaad510c686/v3/spaceshooter.udianix.com.br/SpaceShooter/https%3A%2F%2Fopengraph.b-cdn.net%2Fproduction%2Fdocuments%2Fa22dad26-ccd8-45d8-8467-bf4b451d8c45.png%3Ftoken%3DUEq6zUufOUCLP_-czMZdiUFNwwEHB-IejZiudVjn1PY%26height%3D609%26width%3D343%26expires%3D33245303181/og.png">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:340,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!-- <link href="https://unpkg.com/tailwindcss@^3/dist/tailwind.min.css" rel="stylesheet"> -->
    @vite('resources/css/app.css')


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.querySelector('.menu-toggle');
            const menu = document.querySelector('.mobile-menu');

            toggleButton.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex flex-col justify-center items-center p-10">
                <h1 class="text-5xl font-bold mb-4 dark:text-white">SpaceShooter</h1>
                <div class="flex justify-center items-center">
                    <img src="storage/logo.png" alt="SpaceShooter Logo" class="h-32 w-32">
                </div>
            </div>
            <nav class="bg-white dark:bg-gray-800 rounded-lg">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="storage/logo.png" alt="SpaceShooter">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <a href="#home" class="dark:text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                    <a href="#score" class="dark:text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Leaderboard</a>
                                    <a href="#about" class="dark:text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            <button class="menu-toggle bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-200 focus:outline-none focus:bg-gray-200 focus:text-white dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Open main menu</span>
                                <!-- Icon when menu is closed. -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                                <!-- Icon when menu is open. -->
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu, toggle classes based on menu state. -->
                <div class="mobile-menu md:hidden hidden">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="#home" class="dark:text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                        <a href="#score" class="dark:text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Leaderboard</a>
                        <a href="#about" class="dark:text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
                    </div>
                </div>
            </nav>

            <div id="home" class="mt-16">
                <div class="text-center bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold text-xl p-10 rounded-lg shadow-lg">
                    <h2 class="text-3xl font-bold">Bem-vindo ao SpaceShooter!</h2>
                    <p>Explore o Universo com a nossa emocionante demonstração do SpaceShooter e embarque em uma aventura intergaláctica sem igual.</p>
                </div>

                <h2 class="text-3xl font-bold text-center mt-16 dark:text-white">Downloads</h2>
                <div class="grid grid-cols-3 gap-6 lg:gap-8 text-center mt-4">

                    <a href="https://github.com/Unix-User/SpaceShooter" class="flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="h-7 px-2" fill="currentColor">
                            <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg>
                    </a>
                    <a href="/storage/SpaceShooter.exe" class="flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7 px-2" fill="currentColor">
                            <path d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z" />
                        </svg>
                    </a>
                    <a href="/storage/SpaceShooter.apk" class="flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-7 px-2" fill="currentColor">
                            <path d="M420.6 301.9a24 24 0 1 1 24-24 24 24 0 0 1 -24 24m-265.1 0a24 24 0 1 1 24-24 24 24 0 0 1 -24 24m273.7-144.5 47.9-83a10 10 0 1 0 -17.3-10h0l-48.5 84.1a301.3 301.3 0 0 0 -246.6 0L116.2 64.5a10 10 0 1 0 -17.3 10h0l47.9 83C64.5 202.2 8.2 285.6 0 384H576c-8.2-98.5-64.5-181.8-146.9-226.6" />
                        </svg>
                    </a>
                </div>
            </div>


            <div id="score" class="mt-16">
                <h2 class="text-3xl font-bold text-center mb-4 dark:text-white">Leaderboard</h2>
                <div class="flex justify-end space-x-2 mb-4">
                    <a href="?orderBy=id&direction=asc#score" class="h-8 w-8 p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="white" d="M450.7 38c8.3 6 13.3 15.7 13.3 26v96h16c17.7 0 32 14.3 32 32s-14.3 32-32 32H432 384c-17.7 0-32-14.3-32-32s14.3-32 32-32h16V108.4l-5.9 2c-16.8 5.6-34.9-3.5-40.5-20.2s3.5-34.9 20.2-40.5l48-16c9.8-3.3 20.5-1.6 28.8 4.4zM160 32c9 0 17.5 3.8 23.6 10.4l88 96c11.9 13 11.1 33.3-2 45.2s-33.3 11.1-45.2-2L192 146.3V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V146.3L95.6 181.6c-11.9 13-32.2 13.9-45.2 2s-13.9-32.2-2-45.2l88-96C142.5 35.8 151 32 160 32zM445.7 364.9A32 32 0 1 0 418.3 307a32 32 0 1 0 27.4 57.9zm-40.7 54.9C369.6 408.4 344 375.2 344 336c0-48.6 39.4-88 88-88s88 39.4 88 88c0 23.5-7.5 46.3-21.5 65.2L449.7 467c-10.5 14.2-30.6 17.2-44.8 6.7s-17.2-30.6-6.7-44.8l6.8-9.2z" />
                        </svg>
                    </a>
                    <a href="?orderBy=id&direction=desc#score" class="h-8 w-8 p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="white" d="M450.7 38c-8.3-6-19.1-7.7-28.8-4.4l-48 16c-16.8 5.6-25.8 23.7-20.2 40.5s23.7 25.8 40.5 20.2l5.9-2V160H384c-17.7 0-32 14.3-32 32s14.3 32 32 32h48 48c17.7 0 32-14.3 32-32s-14.3-32-32-32H464V64c0-10.3-4.9-19.9-13.3-26zM160 480c9 0 17.5-3.8 23.6-10.4l88-96c11.9-13 11.1-33.3-2-45.2s-33.3-11.1-45.2 2L192 365.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V365.7L95.6 330.4c-11.9-13-32.2-13.9-45.2-2s-13.9 32.2-2 45.2l88 96C142.5 476.2 151 480 160 480zM418.3 307a32 32 0 1 1 27.4 57.9A32 32 0 1 1 418.3 307zM405.1 419.8l-6.8 9.2c-10.5 14.2-7.5 34.2 6.7 44.8s34.2 7.5 44.8-6.7l48.8-65.8c14-18.9 21.5-41.7 21.5-65.2c0-48.6-39.4-88-88-88s-88 39.4-88 88c0 39.2 25.6 72.4 61.1 83.8z" />
                        </svg>
                    </a>
                    <a href="?orderBy=score&direction=desc#score" class="h-8 w-8 p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="white" d="M151.6 42.4C145.5 35.8 137 32 128 32s-17.5 3.8-23.6 10.4l-88 96c-11.9 13-11.1 33.3 2 45.2s33.3 11.1 45.2-2L96 146.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V146.3l32.4 35.4c11.9 13 32.2 13.9 45.2 2s13.9-32.2 2-45.2l-88-96zM320 480h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-17.7 0-32 14.3-32 32s14.3 32 32 32z" />
                        </svg>
                    </a>
                    <a href="?orderBy=score&direction=asc#score" class="h-8 w-8 p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="white" d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                        </svg>
                    </a>
                    <a href="?orderBy=name&direction=asc#score" class="h-8 w-8 p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="white" d="M183.6 42.4C177.5 35.8 169 32 160 32s-17.5 3.8-23.6 10.4l-88 96c-11.9 13-11.1 33.3 2 45.2s33.3 11.1 45.2-2L128 146.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V146.3l32.4 35.4c11.9 13 32.2 13.9 45.2 2s13.9-32.2 2-45.2l-88-96zM320 64c0 17.7 14.3 32 32 32h50.7l-73.4 73.4c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H429.3l73.4-73.4c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8H352c-17.7 0-32 14.3-32 32zm96 192c-12.1 0-23.2 6.8-28.6 17.7l-64 128-16 32c-7.9 15.8-1.5 35 14.3 42.9s35 1.5 42.9-14.3l7.2-14.3h88.4l7.2 14.3c7.9 15.8 27.1 22.2 42.9 14.3s22.2-27.1 14.3-42.9l-16-32-64-128C439.2 262.8 428.1 256 416 256zM395.8 400L416 359.6 436.2 400H395.8z" />
                        </svg>
                    </a>
                    <a href="?orderBy=name&direction=desc#score" class="h-8 w-8 p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="white" d="M183.6 469.6C177.5 476.2 169 480 160 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L128 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 64c0-17.7 14.3-32 32-32H480c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9L429.3 160H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H352c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9L402.7 96H352c-17.7 0-32-14.3-32-32zm96 192c12.1 0 23.2 6.8 28.6 17.7l64 128 16 32c7.9 15.8 1.5 35-14.3 42.9s-35 1.5-42.9-14.3L460.2 448H371.8l-7.2 14.3c-7.9 15.8-27.1 22.2-42.9 14.3s-22.2-27.1-14.3-42.9l16-32 64-128c5.4-10.8 16.5-17.7 28.6-17.7zM395.8 400h40.4L416 359.6 395.8 400z" />
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    @foreach ($scores as $score)
                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full h-16 w-16">
                                <img src="storage/logo.png" alt="SpaceShooter Logo" class="h-16 w-16">
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $score->name }}</h2>
                                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    {{ $score->score }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-8">
                    @include('vendor.pagination.spaceshooter-tailwind', ['paginator' => $scores])
                </div>
            </div>


            <div id="about" class="mt-16">
                <div class="grid grid-cols-1 gap-6 lg:gap-8 text-center bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold text-xl p-10 rounded-lg shadow-lg">
                    Mergulhe nas possibilidades infinitas do universo digital com a nossa avançada demonstração
                    técnica do SpaceShooter. Este projeto destaca-se pela combinação da robustez da linguagem PHP
                    na construção da API com a flexibilidade da Godot Engine no desenvolvimento do jogo, ressaltando
                    nossa capacidade de criar soluções inovadoras e integrar tecnologias de ponta.
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-left">
                    &nbsp;
                </div>

                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>