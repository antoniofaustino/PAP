<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About</title>
    <style>
    * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 300px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 100px) {
  .prev, .next,.text {font-size: 11px}
}
html, body {
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
<body style="background-color:black;">
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
                    <a href="{{url('/People')}}">People</a>
                    <a href="{{url('/casamentos')}}">Casamentos</a>
                    <a href="{{url('/batizados')}}">Batizados</a>
                    <a href="{{url('/events')}}">Events</a>
                    <a href="{{url('/contacto')}}">Contact</a>
                </div> 
                <br>
                <br>
    <p>A 2'M - Double Moments é uma equipa de dois jovens fotógrafos  apaixonados pelo seu trabalho e empenhados em satisfazer os seus clientes.</p>

     <p>Nasceram com o objectivo de captar os melhores momentos dos seus clientes,para que um dia os possa recordar,<br>
      tornando-os ainda mais únicos e especiais.
    Procura-se destacar pela elegância do seu trabalho e pela sua criatividade.</p>
    <p>Actualmente oferece aos seus clientes trabalhos de fotografia, vídeo e design.</p>
    <p>Possuem ainda um laboratório, que permite a produção de álbuns, impressão de imagens, entre outros serviços.</p>
    <p>"Não coleccione coisas, coleccione Momentos!"</p>
    <br>
    <br>
    <br>
    
    
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
                <img src="photos/img1.jpeg" style="width:100%">
                    <div class="text">Foto 1</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
                <img src="photos/img2.jpeg" style="width:100%">
                    <div class="text">Foto 2</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
                <img src="photos/img3.jpeg" style="width:100%">
                    <div class="text">Foto 3</div>
        </div>
       

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br>
<br>
<br>
    
   <footer class="page-footer font-small cyan darken-3 down-center" style=" padding:20px;text-align:center">
                <a class="fb-ic" href="#">
                    <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a class="ins-ic" href="#">
                    <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                </a>   
        </footer>
</body>
</html>