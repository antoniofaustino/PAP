<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    <title>Contact</title>


<style>
    html, body {
                 background: linear-gradient(to bottom, black 0%,black 50%,#000000 50%,white 50%,white 100%);
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
}
    .links > a {
                color: #999966;
                padding: 30px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .position-ref {
                position: relative;
            }
            .full-height {
                height: 100vh;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .down-center{
                text-align:center;
                down: 18px;

            }
            p{
                margin-left:20px;
            }
            div{
                color:#999966;
            }


    </style>
</head>
<body>
    <body>
<div class=" position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <br>
    <br>
    <br>
    

                <div style="text-align:left;" class="links">
                 <a style = "font-size: 30px;"href="{{url('/')}}">Double Moment</a>
                 <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/People')}}">People</a>
                    <a href="{{url('/casamentos')}}">Casamentos</a>
                    <a href="{{url('/batizados')}}">Batizados</a>
                    <a href="{{url('/events')}}">Events</a>
                    
                </div> 
                <div>
                    <p style="white-space:pre-wrap;">
                    <strong style="font-size:20px;">E-mail:</strong>
                    geral@2mdoublemoments.com
                </div>

                <div>
                    <p style="white-space:pre-wrap;">
                    <strong style="font-size:20px;">E-mail:</strong>
                    comercial@2mdoublemoments.com
                </div>

                <div>
                    <p style="white-space:pre-wrap;font-color: black;">
                    <strong style="font-size:20px;">Telefone:</strong>
                    244611135
                </div>

                <div>
                    <p style="white-space:pre-wrap;font-color: black;">
                    <strong style="font-size:20px;">Telemovel:</strong>
                    916644180
                </div>
    <br>
    <br>
    <br>

    <footer class="page-footer font-small cyan darken-3 down-center" >
                <a class="fb-ic" href="https://pt-pt.facebook.com/photography2M/">
                    <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a class="ins-ic" href="https://www.instagram.com/p/BzEC89MHGIT/">
                    <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                </a>   
        </footer>
</body>
</html>  