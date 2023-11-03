{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="icon" href="{{asset('img/main.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Righteous&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    @livewireScripts
    <section class="parent-cont">
        <div class="column-option">
            <div class="content-title">
                    <div class="contenedor-logo">
                        <img src="{{ asset('img/logo.png')}} ">
                    </div>
                    <h1>P R O S E C O R</h1>
            </div>
            <div class="content-nav">
                <nav class="nav">
                    <ul class="list-option">
                        <li class="option">  
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/admin1.png') }}" >
                                </div>
                                <a href="{{route('formAdmin')}}" id="go">{{__('Admin')}}</a>
                            </div>
                        </li>
                        <li class="option">  
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/group1.png') }}" >
                                </div>
                                <a href="{{route('registerEmployee')}}">{{__('Employees')}}</a>
                            </div>
                        </li>
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/database1.png') }}" >
                                </div>
                                <a href="{{route('records')}}">{{__('DataBase')}}</a>
                            </div>
                        </li>
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/list1.png') }}" >
                                </div>
                                <a href="{{('Assists')}}">{{__('Assists')}}</a>
                            </div>     
                        </li> 
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/exit1.png') }}" >
                                </div>
                                <a href="{{('login')}}">{{__('LogOut')}}</a>
                            </div>     
                        </li>     
                        
                    </ul>
                </nav>
            </div>
        </div>
        <div class="column-content">
            <div class="header-content">
            </div>
            <div class="content-section">
                <link rel="stylesheet" href="@yield('css')">
                @yield('content-section')   
              
                <script src="@yield('js')"></script>   
            </div>
        </div>
    </section> 
   
</body>
</html>