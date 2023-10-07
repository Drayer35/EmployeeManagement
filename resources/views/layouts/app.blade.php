<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
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
                                <a href="{{route('formAdmin')}}">Admin</a>
                            </div>
                        </li>
                        <li class="option">  
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/group1.png') }}" >
                                </div>
                                <a href="{{route('formEmployee')}}">Employees</a>
                            </div>
                        </li>
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/database1.png') }}" >
                                </div>
                                <a href="{{route('formRecordEmployee')}}">DataBase</a>
                            </div>
                        </li>
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/list1.png') }}" >
                                </div>
                                <a href="{{('formAssists')}}">Assists</a>
                            </div>     
                        </li> 
                        <li class="option">
                            <div class="background-option">
                                <div class="contenedor-imagen">
                                    <img src="{{ asset('img/exit1.png') }}" >
                                </div>
                                <a href="{{('login')}}">Log Out</a>
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
</body>
</html>

