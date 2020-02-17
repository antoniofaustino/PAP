
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

        <title>2D-Double Moments</title>

        
       
        <style>
        h3{
            color:#ddff99;
            font-size:20px;
            font-family:Courier, monospace;
        }
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('/photos/DSCF9168.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% ;
            }


            .fa {
                padding: 20px;
                font-size: 30px;
                width: 50px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
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
            .down-center{
                
                text-align:center;
                down: 18px;

            }

            .content {
                text-align: left;
                
            }

            .title {
                font-family:American Typewriter, serif;
                color:#040c33;
                font-size: 40px;
            }

            .links > a {
                color: #040c33;
                padding: 0 25px;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h3{
                margin-left:20px;
                color:#040c33;
            }
            .fa:hover {
    opacity: 0.7;
}

      
    
        </style>
    </head>
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

            {{-- <div class="content">
                <a class="links title m-b-md" style = "padding:20px;text-decoration:none;text-transform:uppercase;"href="{{url('/')}}">
                    Double Moments
                </a> --}}
<br>
<br>
<br>
                <div style="text-align:left;" class="links">
                    <a style = "font-size: 30px;"href="{{url('/')}}"><img src="/photos/logo" height="150" width="150" style="border-radius: 50%;"></a>
                    <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/People')}}">People</a>
                    <a href="{{url('/casamentos')}}">Casamentos</a>
                    <a href="{{url('/batizados')}}">Batizados</a>
                    <a href="{{url('/events')}}">Events</a>
                    <a href="{{url('/contacto')}}">Contact</a>
                </div> 
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="container" style="opacaty: 0.8;float:left; margin-top: 50px;">
                    <h3>Don't capture things,capture Moments</h3>
                    <h3>by Double Moments</h3>
                </div>
                
            </div>
        </div>
                </div>               

    
        <footer class="page-footer font-small cyan darken-3 down-center" >
                <a class="fb-ic" href="#">
                    <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a class="ins-ic" href="#">
                    <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                </a>   
        </footer>
    </body>
</html>
