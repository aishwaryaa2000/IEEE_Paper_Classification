<!DOCTYPE html>
<html lang="en">
<head>
  <title>IEEE-Institute of Electrical and Electronics Engineers</title>
  <link rel="shortcut icon" type="image/jpg" href="Assets/logos/nss.ico"/>
<meta http-equiv="refresh" content="9">
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (oional) -->
  <link href="Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
  <link href="Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
  <script type="text/javascript" src="Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/ES6.js"></script>
  <script src="Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>
 
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Permanent+Marker&display=swap');
.jumbotron.fluid-jumbotron.fixed-bottom
{
  opacity:0.8;
}


.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


.pricing-header {
  max-width: 700px;
}

      /* letter */
body {
  height: 100vh;
  padding: 0;
  margin: 0;
background: #0f0c29;  
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  
background: linear-gradient(to right, #24243e, #302b63, #0f0c29);

}

svg.intro {

    background: #41295a;  
background: linear-gradient(to right,  #120136, #035aa6);
  max-width: 800px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  box-shadow: 0 30px 50px -20px #2e0642;
  
  background-repeat:no-repeat;
  
}


svg.intro .text {
  display: none;
}
svg.intro.go .text {
  font-family: Arial, sans-serif;
  /* font-family: 'Montserrat Subrayada', sans-serif; */

  font-size: 20px;
  text-transform: uppercase;
  display: block;
}
svg.intro.go .text-stroke {
  fill: none;
  stroke: #51256f;
  stroke-width: 2.8px;
  stroke-dashoffset: -900;
  stroke-dasharray: 900;
  stroke-linecap: butt;
  stroke-linejoin: round;
  -webkit-animation: dash 2.5s ease-in-out forwards;
          animation: dash 2.5s ease-in-out forwards;
}
svg.intro.go .text-stroke:nth-child(2) {
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
svg.intro.go .text-stroke:nth-child(3) {
  -webkit-animation-delay: .9s;
          animation-delay: .9s;
}
svg.intro.go .text-stroke-2 {
  stroke: #f6bdfa;
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}
svg.intro.go .text-stroke:nth-child(5) {
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}
svg.intro.go .text-stroke:nth-child(6) {
  -webkit-animation-delay: 1.8s;
          animation-delay: 1.8s;
}

@-webkit-keyframes dash {
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes dash {
  100% {
    stroke-dashoffset: 0;
  }
}
.reload {
  position: absolute;
  bottom: 15px;
  right: 15px;
  background: #fff;
  border: none;
  border-radius: 20px;
  outline: none !important;
  font-size: 11px;
  line-height: 1.5;
  padding: 8px 12px;
  text-transform: uppercase;
  z-index: 10;
  cursor: pointer;
  box-shadow: 0 6px 7px #350e4c;
  -webkit-transition: all 0.1s cubic-bezier(0.67, 0.13, 0.1, 0.81);
  transition: all 0.1s cubic-bezier(0.67, 0.13, 0.1, 0.81);
}
.reload:hover {
  box-shadow: 0 4px 4px #350e4c;
  -webkit-transform: translateY(1px);
          transform: translateY(1px);
}
.reload:active {
  box-shadow: 0 1px 2px #244B94;
  -webkit-transform: translateY(2px);
          transform: translateY(2px);
}
.reload svg {
  vertical-align: middle;
  position: relative;
  top: -2px;
}
.intro:hover {
  opacity: 0.5;
}
/* particle js */
canvas {
  display: block;
  /* vertical-align: bottom; */
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  /* background: #00356B; */
}




/* BUTTON */

.btn{

   
/* border-color: #9f1c32; */
 padding:10px 20px;
    /* font-size: 20px; */
    
     cursor: pointer;
margin:10px;
position: relative;
overflow:hidden;
}


            .btn1,.btn2{
               color:#fff;
               
            }


            .btn1:hover,.btn2:hover {
               color:black;
               
            }


.btn::before{
content:"";
position: absolute;
left: 0;
width: 100%;
height: 0%;
background: #fff;
z-index: -1;
transition: 0.8s;
}

.btn1::before,.btn2::before{
top:0;
border-radius:0 0 50% 50%;
}


.btn1::before,.btn2::before{
height:0%
}

.btn1:hover::before,.btn2:hover::before{
height:180%;
}




</style>

</head>
<!-- <body translate="no"> -->
<body translate="no" onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>

<div onclick="developers()" id="particles-js"></div>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
  <h2 class="my-0 mr-md-auto font-weight-normal"><img src="Assets/logos/mulogo.png" style="height:10rem;width:15rem;" alt=""><font color = "white">NYU Courant Institute of Mathematical Sciences</font></h2>
  <nav class="my-2 my-md-0 mr-md-3">


   <a class="btn btn1" href="login"><b>LOGIN</b></a>
    <a class="btn btn1" href="register"><b>REGISTER</b></a>
    <!--  <button class=" btn btn2" type="button" onclick="window.location.href='ChangePassword';" margin-left:2rem><b>Change Password</b></button>
             <button class=" btn btn1"  type="submit" style=" margin-left: 5px"><b>Logout</b></button> -->
  </nav>
</div>

<svg class="intro" viewbox="0 0 200 86" >
<image width="5rem" height="4rem" x="97" y="9" xlink:href="Assets/logos/NSS_LOGO.png" clip-path="url(#myCircle)"/>
<!-- <text text-anchor="start" x="10" y="30" class="text text-stroke" clip-path="url(#text1)">Advancing</text>
<text text-anchor="start" x="10" y="50" class="text text-stroke" clip-path="url(#text2)">Technology</text>
<text text-anchor="start" x="10" y="70" class="text text-stroke" clip-path="url(#text3)">For Humanity</text>
<text text-anchor="start" x="10" y="30" class="text text-stroke text-stroke-2" clip-path="url(#text1)">Advancing</text>
<text text-anchor="start" x="10" y="50" class="text text-stroke text-stroke-2" clip-path="url(#text2)">Technology</text>
<text text-anchor="start" x="10" y="70" class="text text-stroke text-stroke-2" clip-path="url(#text3)">For Humanity</text>
<defs>
<clipPath id="text1">
<text text-anchor="start" x="10" y="30" class="text">Advancing</text>
</clipPath>
<clipPath id="text2">
<text text-anchor="start" x="10" y="50" class="text"> Technology</text>
</clipPath>
<clipPath id="text3">
<text text-anchor="start" x="10" y="70" class="text">For Humanity</text>
</clipPath>
</defs> -->
</svg>
<br>
<div>
</div>


<div class="jumbotron fluid-jumbotron fixed-bottom" style="margin-bottom: 0px; background-color: black; color: white; 
                font-family: 'Montserrat', sans-serif; max-width: 100%; height:21% ;padding-top:10px; margin-left: 0px; margin-right: 0px;">
            <center><div class="row">
                <div class="col" style="font-style:oblique;">
                    <i>Developed By
                    
                   
                    Aishwarya Anand<br>
                    Archita Arora<br>
                   Likhitha</i>
                </div>

            </div></center>
</div>
<script>
$(function () {
  $('.intro').addClass('go');

  $('.reload').click(function () {
    $('.intro').removeClass('go').delay(200).queue(function (next) {
      $('.intro').addClass('go');
      next();
    });

  });
});

    </script>
    <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
<script id="rendered-js">
// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 108,
      "density": {
        "enable": true,
        "value_area": 700 } },


    "color": {
      "value": "#000000" },

    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000" },

      "polygon": {
        "nb_sides": 5 } },


    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false } },


    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false } },


    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1 },

    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200 } } },



  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab" },

      "onclick": {
        "enable": true,
        "mode": "push" },

      "resize": true },

    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1 } },


      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3 },

      "repulse": {
        "distance": 200,
        "duration": 0.4 },

      "push": {
        "particles_nb": 4 },

      "remove": {
        "particles_nb": 2 } } },



  "retina_detect": true });

    </script> 

     <script src="Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>
</html>


