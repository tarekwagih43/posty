<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">

    <!-- Navbar -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                <h1 class="text-white text-lg font-bold"> Tour Guide </h1>
                </div>
                <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ route('/') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="{{ route('services') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
                </div>
            </div>
            <div class="flex item-center sm:items-stretch">
                @if(auth()->user())
                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ auth()->user()->name }}</a>
                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="p-3 inline text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                @endif

            </div>
        </div>
    </div>
</nav>

<div class="flex justify-center mb-5 mt-5">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <div class="flex item-center sm:items-stretch">
            <a href="{{ route('dashboard') }}" class="px-2 rounded-md text-md font-medium hover:text-blue-700 hover:bg-gray-100">Dashboard</a>
            <a href="{{ route('services.admin') }}" class="px-2 rounded-md text-md font-medium hover:text-blue-700 hover:bg-gray-100">Services</a>
            <a href="{{ route('inbox') }}" class="px-2 rounded-md text-md font-medium hover:text-blue-700 hover:bg-gray-100">Inbox</a>
            <a href="{{ route('setting') }}" class="px-2 rounded-md text-md font-medium hover:text-blue-700 hover:bg-gray-100">Setting</a>
        </div>
    </div>
</div>

@yield('content')

    <!-- Footer -->
    <div class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <span class="flex p-2 rounded-lg bg-indigo-800">
                    <!-- Heroicon name: speakerphone -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </span>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden">
                            We announced a new product!
                        </span>
                        <span class="hidden md:inline">
                            Big news! We're excited to announce a brand new product.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
