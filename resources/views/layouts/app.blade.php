<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    
    <link rel="stylesheet" href="@yield('style-content')">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
  
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
                                <a href="{{route('formAdmin')}}">{{__('Admin')}}</a>
                            </div>
                        </li>
                        <li class="option">  
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/group1.png') }}" >
                                </div>
                                <a href="{{route('formEmployee')}}">{{__('Employees')}}</a>
                            </div>
                        </li>
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/database1.png') }}" >
                                </div>
                                <a href="{{route('formRecord')}}">{{__('DataBase')}}</a>
                            </div>
                        </li>
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/list1.png') }}" >
                                </div>
                                <a href="{{('formAssists')}}">{{__('Assits')}}</a>
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
                @yield('content-section')
            </div>
        </div>
    </section> 
    <script src="@yield('section-logic')"></script>
</body>
</html>

