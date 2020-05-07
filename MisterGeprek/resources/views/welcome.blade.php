<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>SiPeMa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: crimson;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                /* background-image: url({{asset('asset/MisterGeprek-logo.png')}});
                background-size:500px;
			    background-attachment: fixed; */
                
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
                font-size: 94px;
                font-family: arial;
                font-weight: 600;
                letter-spacing: 3px;
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
            .pesan{
                font-weight: 600;
                font-size: 15px;
            }
            .titlee{
                font-weight: 600;
                font-size: 18px;
                letter-spacing: 5px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
<!--             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color:white;">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

                <div class="bg-homes">
                    <div class="content" style="color:white">
                        <div class="title m-b-md">
                            SiPeMa
                        </div>
                        <p style="margin-top:-40px;margin-bottom:40px;" class="titlee">Mister Geprek</p>
                        <a href="pesan">                        
                            <div class="btn btn-danger btn-lg pesan">
                                PESAN MAKANAN
                             </div></a>
                    </div>
                </div>
        </div>
    </body>
</html>
