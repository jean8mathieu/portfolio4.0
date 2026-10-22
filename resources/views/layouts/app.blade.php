<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Backend Developer Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">
    <nav class="fixed w-full bg-white dark:bg-gray-800 shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-xl font-bold text-gray-800 dark:text-white">JMDev</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="#about" class="inline-flex items-center px-1 pt-1 text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                        About
                    </a>
                    <a href="#skills" class="inline-flex items-center px-1 pt-1 text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                        Skills
                    </a>
                    <a href="#projects" class="inline-flex items-center px-1 pt-1 text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                        Projects
                    </a>
                    <a href="#contact" class="inline-flex items-center px-1 pt-1 text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 dark:text-gray-400">
                <p>&copy; {{ date('Y') }} JMDev. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
