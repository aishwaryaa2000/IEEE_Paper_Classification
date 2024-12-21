<html>
    <head>
	<link href="../Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../Assets/bootstrap-4.5.0-dist/css/style.min.css" rel="stylesheet">
  <link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
  <script type="text/javascript" src="../Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v7.js"></script>

  <script src="../Assets/bootstrap-4.5.0-dist/js/onlynum.js"></script>
    <style>
#loading{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: #fff
	url('../Assets/SVG/loader.gif')
	/* url('https://loading.io/mod/spinner/dna/sample.gif') */
	 
	no-repeat center center;	
	z-index: 99999;
	
}
#h1 {
	top: 25%;
	position: absolute;
	text-align: center;
	left: 0;
	right: 0;
	margin-top: 60px;
	color: #242424;
	font-weight: 600;
	font-size: 35px;
}

#h2 {
	top: 35%;
	position: absolute;
	text-align: center;
	left: 0;
	right: 0;
	margin-top: 25px;
	color: #242424;
	font-weight: 600;
	font-size: 26px;
}
#h3 {
	top: 38%;
	position: absolute;
	text-align: center;
	left: 0;
	right: 0;
	margin-top: 25px;
	color: #242424;
	font-weight: 600;
	font-size: 26px;
}
    </style>
</head>
<body onload="myFunction();vec();">

<nav class="navbar navbar-light bg-light sticky-top justify-content-around">
    <img src="../Assets/logos/NSS_LOGO.png"  width="80" height="80" class="m" alt="">

    <ul class="navbar-nav">
      <li class="nav-item">
        <h4>Generating VEC</h4>
      </li>
    </ul>
    <!-- <a class="btn btn-info" style="background-color: #4A529D" href="index">BACK</a> -->
     </nav>


<div id="loading">
	<h1 id="h1">Have Patience ! Dont Close this page.</h1>
<h2 id="h2"></h2>
<h3 id="h3">  Generating VEC</h3>
</div>







<script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			
			// preloader.style.display = 'none';
		};
		function vec(){
			
			window.location.href="vecgenrate";
		};

	</script>


</body>
</html>