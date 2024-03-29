<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda-Tool</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
        </style>
    </head>
    <body>
    <header>
    @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a class="nabar-brand" href="{{ route('login') }}">Login</a>
            
                @if (Route::has('register'))
                    <a class="nabar-brand" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </nav>
    @endif
    </header>
            <div class="content">
                <div class="title m-b-md">
                    Agenda Tool
                </div>
                @auth
                <div class="links">
                    <a href="127.0.0.1:8000/events">Events</a>
                @endauth
                
                    <div class="container">
                        <h1>Welkom, Log in voor het zien van je agenda. </h1>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
