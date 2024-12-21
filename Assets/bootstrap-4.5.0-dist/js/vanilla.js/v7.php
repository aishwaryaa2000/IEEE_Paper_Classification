<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ABOUT THE DEVELOPERS</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  padding: 50px;
  text-align: center;
  height: 100%;
  width:100%;
  background-color:#07192F;
  overflow-x: hidden; 
}

/* HIDE SCROLLBAR  */
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}

/* CARDS CSS */
.container1{
  height: 250px;
  width: 250px;
  overflow: hidden;
  margin: 0 auto;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.3);
  /* background: linear-gradient(45deg, #7b00e0, #ae31d9); */
background: #1A2980;  
background: -webkit-linear-gradient(to right, #26D0CE, #1A2980);  
background: linear-gradient(to right, #26D0CE, #1A2980); 
}
.container1:hover{
  height: 470px;
  width: 350px;
  border-radius: 0.8rem;
  box-shadow: 0px 1px 35px 0px rgba(0,0,0,0.3);
}
.container1 .wrapper img{
  position: relative;
  z-index: 20;
  border-radius: 50%;
  display: block;
  height: 200px;
  width: 200px;
  border: 5px solid #fff;
  object-fit: cover;
  margin: 20px auto;
  transition: all 0.3s ease;
}
.container1:hover .wrapper img.active{
  height: 470px;
  width: 350px;
  margin: 0px auto;
  border: none;
  border-radius: 5px;
}
.wrapper .title{
  color: #fff;
  font-size: 30px;
  font-weight: 500;
  padding: 10px;
  line-height: 25px;
}
.wrapper .place{
  color: #fff;
  font-size: 17px;
  line-height: 0px;
  margin: 10px 0;
}
.content{
  color: #fff;
  font-size: 17px;
  margin-top: 10px;
  padding: 1px 20px 10px 20px!important;
}
.content .buttons{
  display: flex;
}
.buttons .btn{
  height: 40px;
  width: 150px;
  margin: 0 5px;
  margin-left:5rem !important;
}
.buttons .btn button{
  height: 100%;
  width: 100%;
  background: #fff;  
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 17px;
  font-weight: 500;
  border-radius: 5px;
  transition: all 0.3s;
}
.btn button:hover{
  transform: scale(0.95);
  background-position:right;
-webkit-box-shadow: 10px 10px 41px -9px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 41px -9px rgba(0,0,0,0.75);
box-shadow: 10px 10px 41px -9px rgba(0,0,0,0.75);
  color:black;
}
.container1 .icons{
  
  position: relative;
  margin-top: -435px;
  margin-left: 10px;
  list-style: none;
}
.container1 .icons.active{
  display: none;
}
.container1 .icons li{
  height: 40px;
  width: 40px;
  margin: 5px 0;
  opacity: 0;
  margin-left: -100px;
  transition: all 0.5s ease;
}
.container1:hover .icons li{
  opacity: 1;
  margin-left: 7px;
}
.container1:hover .icons li:nth-child(2){
  transition-delay: 0.2s;
}
.container1:hover .icons li:nth-child(3){
  transition-delay: 0.4s;
}
.container1 .icons li a{
  color: #7b00e0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  background: #fff;
  display: block;
  line-height: 40px;
  transition: all 0.3s;
}
.container1 .icons li a:hover{
  transform: scale(0.9);
-webkit-box-shadow: 10px 10px 41px -9px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 41px -9px rgba(0,0,0,0.75);
box-shadow: 10px 10px 41px -9px rgba(0,0,0,0.75);

}


.test1{
  margin: 130px auto 120px;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
  grid-gap:10px;
}
.test2{
  margin: 120px auto 120px;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
  grid-gap:5px;
}


@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
#heading1{
  font-family: 'Permanent Marker', cursive;
}


/* HEADING CSS */

.ml15 {
  font-weight: 800;
  font-size: 3.5em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
}

.ml15 .word {
  display: inline-block;
  line-height: 1em;
  color:#EDC729;
}

    </style>
  </head>

  <body id="element2">

    <h1 class="ml15">
      <span class="word">ABOUT </span>
      <span class="word">THE</span>
      <span class="word">DEVELOPERS</span>
    </h1>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<div class="test1">

  <!--         CARD 1           -->
<div class="container1">
  <div class="wrapper">
    <a href="#">
      <img src="initials/shashi.jpg" alt="">

    </a>
    <div class="title">
      <b>Shashikant Prajapati</b></div>
<div class="place">
  RAIT, Nerul</div>
</div>
<div class="content">
    <p>
      Computer Engineering undergrad <br>Team leader<br>
</p>
<div class="buttons">
      <div class="btn">
        <a href="mailto:anonshashianon@gmail.com"><button>Message</button></a>
      </div>
      
</div>
</div>
<div class="icons">
  <li><a href="https://www.github.com/anonshashianon"><span class="fab fa-github"></span></a></li>
  <li><a href="https://www.instagram.com/_shashikant___/"><span class="fab fa-instagram"></span></a></li>
  <li><a href="https://www.facebook.com/shashikant.prajapati.291198"><span class="fab fa-facebook-f"></span></a></li>
</div>
</div>

  <!--           CARD 2               -->
<div class="container1" >
  <div class="wrapper">
    <a href="#">
      <img src="initials/kalwa.png" alt="">
    </a>
    <div class="title">
      <b>Sahil Chavan</b></div>
<div class="place">
  RAIT, Nerul</div>
</div>
<div class="content">
    <p>
      Computer Engineering undergrad <br>Team Member<br></p>
<div class="buttons">
      <div class="btn">
        <a href="mailto:magicalkiller786@gmail.com"><button>Message</button></a>
      </div>

</div>
</div>
<div class="icons">
  <li><a href="https://www.github.com/Sahil-Chavan"><span class="fab fa-github"></span></a></li>
  <li><a href="https://www.instagram.com/magicalkiller786/"><span class="fab fa-instagram"></span></a></li>
  <li><a href="https://www.facebook.com/sahil.chavan.96558"><span class="fab fa-facebook-f"></span></a></li>
</div>
</div>

  <!--           CARD 3           -->
<div class="container1" >
  <div class="wrapper">
    <a href="#">
      <img src="initials/aishu.jpg" alt="">
    </a>
    <div class="title">
      <b>Aishwarya Anand</b></div>
<div class="place">
  RAIT, Nerul</div>
</div>
<div class="content">
    <p>
      Computer Engineering undergrad <br>Team Member<br></p>
<div class="buttons">
      <div class="btn">
        <a href="mailto:aishwaryaramani.anand@gmail.com"><button>Message</button></a>
      </div>

</div>
</div>
<div class="icons">
  <li><a href="https://www.github.com/aishwarya2000"><span class="fab fa-github"></span></a></li>
  <li><a href="https://www.instagram.com/aishwaryaa_a/"><span class="fab fa-instagram"></span></a></li>
  <li><a href="https://www.facebook.com/aishwarya.anand.904"><span class="fab fa-facebook-f"></span></a></li>
</div>
</div>

  <!--           CARD 4            -->
<div class="container1" >
  <div class="wrapper">
    <a href="#">
      <img src="initials/sharry.jpg" height="200" alt="">
    </a>
    <div class="title">
      <b>Sharvay Chavan</b></div>
<div class="place">
  RAIT, Nerul</div>
</div>
<div class="content">
    <p>
      Computer Engineering undergrad <br>Team Member<br></p>
<div class="buttons">
      <div class="btn">
        <a href="mailto:sharvay.chavan07@gmail.com"><button>Message</button></a>
      </div>

</div>
</div>
<div class="icons">
  <li><a href="https://github.com/Sharvay"><span class="fab fa-github"></span></a></li>
  <li><a href="https://www.instagram.com/_sharry_7"><span class="fab fa-instagram"></span></a></li>
  <li><a href="https://www.facebook.com/sharvay.chavan/"><span class="fab fa-facebook-f"></span></a></li>
</div>
</div>

</div>

  <!-- ROW 2 -->
<div class="test2">
 
    <!--             CARD 5                      -->
  <div class="container1" >
    <div class="wrapper">
      <a href="#">
        <img src="initials/sushil.jpg" alt="">
      </a>
      <div class="title">
        <b> Sushil Dubey</b></div>
  <div class="place">
    RAIT, Nerul</div>
  </div>
  <div class="content">
      <p>
        Computer Engineering undergrad <br>Team Member<br></p>
  <div class="buttons">
        <div class="btn">
          <a href="mailto:sushilanildubey@gmail.com"><button>Message</button></a>
        </div>
  
  </div>
  </div>
  <div class="icons">
  
  <li><a href="https://github.com/sushil-2803"><span class="fab fa-github"></span></a></li>
  <li><a href="https://www.instagram.com/sushil_2803"><span class="fab fa-instagram"></span></a></li>
  <li><a href="https://www.facebook.com/sushil.dubey.9887"><span class="fab fa-facebook-f"></span></a></li>
  </div>
  </div>
  
    <!--         CARD 6        -->
  <div class="container1">
    <div class="wrapper">
      <a href="#">
        <img src="initials/kau.jpg" alt="">
    
      </a>
      <div class="title">
        <b>Kaustubh Bhure</b></div>
  <div class="place">
    RAIT, Nerul</div>
  </div>
  <div class="content">
      <p>
        Computer Engineering undergrad <br>Team Member<br></p>
  <div class="buttons">
        <div class="btn">
          <a href="mailto:bhurekaustubh70@gmail.com"><button>Message</button></a>
        </div>
  
  </div>
  </div>
  <div class="icons">
    <li><a href="https://github.com/kaustubh0402"><span class="fab fa-github"></span></a></li>
    <li><a href="https://www.instagram.com/kaustubh040200"><span class="fab fa-instagram"></span></a></li>
    <li><a href="https://www.facebook.com/kaustubh.bhure.5"><span class="fab fa-facebook-f"></span></a></li>
  </div>
  </div>
  
    <!--        CARD 7            -->
  <div class="container1">
    <div class="wrapper">
      <a href="#">
        <img src="initials/ojaswi.jpg" alt="">
      </a>
      <div class="title">
        <b>Ojaswi Deshmukh</b></div>
  <div class="place">
  RAIT, Nerul</div>
  </div>
  <div class="content">
      <p>
        Computer Engineering undergrad <br>Team Member<br></p>
  <div class="buttons">
        <div class="btn">
          <a href="mailto:ojaswideshmukh13@gmail.com"><button>Message</button></a>
        </div>
        
 
  </div>
  </div>
  <div class="icons">
    <li><a href="https://www.github.com/OzzDm"><span class="fab fa-github"></span></a></li>
    <li><a href="https://www.instagram.com/deshmukhojaswi/"><span class="fab fa-instagram"></span></a></li>
    <li><a href="https://www.facebook.com/ojaswi.deshmukh"><span class="fab fa-facebook-f"></span></a></li>
  </div>
  </div> 

  </div>

<!-- LETTER KA JS -->
<script>
  anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  
 </script>
 <!-- BACKGROUND JS  -->
 <script src="three.r95.min.js"></script>
<script src="vanta.birds.min.js"></script>

 <script>
VANTA.BIRDS({
  el: "#element2",
  mouseControls: true,
  touchControls: true,
  minHeight: 250.00,
  minWidth: 200.00,
  scale: 2.00,
  scaleMobile: 1.00
})

</script>
<!-- fullcard image js -->
<!-- <script>
      const img = document.querySelector("img");
      const icons = document.querySelector(".icons");
      img.onclick = function(){
        this.classList.toggle("active");
        icons.classList.toggle("active");
      }
    </script> -->

  </body>
</html>
