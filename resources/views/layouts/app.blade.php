

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="navbar-nav ms-auto">--}}
{{--    <!-- Authentication Links -->--}}
{{--    @guest--}}
{{--        @if (Route::has('login'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}

{{--        @if (Route::has('register'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                <img src="/avatars/{{ Auth::user()->avatar }}" style="width: 30px; border-radius: 10%">--}}
{{--                {{ Auth::user()->name }}--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                <a href="{{ route('dashboard') }}" class="dropdown-item">Profile</a>--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                             document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endguest--}}
{{--</ul>--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="firstrec">
            <div >
                {{ $header }}
            </div>
        </header>
    @endif
    <!-- Page Content -->
    <main class="secondrec">
{{--        @if(Auth::user()->image)--}}
{{--            <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">--}}
{{--        @endif--}}
        {{ $slot }}
    </main>
</div>
</body>
</html>
