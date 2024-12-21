<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://beta.nssmu.org.in/Assets/logos/nss.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="break/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="break/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="break/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="break/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="break/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="break/css/util.css">
	<link rel="stylesheet" type="text/css" href="break/css/main.css">
<!--===============================================================================================-->
</head>
<style>



body {
  overflow-y: hidden; /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}


	</style>
<body>
	
	
	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
		<span></span>


		<div class="flex-col-c p-t-50 p-b-50">
			<img class="logo" style="height:15rem;width:15rem;" src="http://nssmu.org.in/launch/images/NSS_LOGO.png">
			<h3 class="l1-txt1 txt-center p-b-10">
				Coming Soon
			</h3>

			<p class="txt-center l1-txt2 p-b-60">
				Our website is under construction
			</p>

			<div class="flex-w flex-c cd100 p-b-82">
				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 days" id="day"></span>
					<span class="s1-txt1">Days</span>
				</div>
			

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 hours" id="hour"></span>
					<span class="s1-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 minutes" id="minute"></span>
					<span class="s1-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 seconds " id="second"></span>
					<span class="s1-txt1">Seconds</span>
				</div>
			</div>

			<!-- <div id="clockdiv">
				<div>
				  <span class="days"></span>
				  <div class="smalltext">Days</div>
				</div>
				<div>
				  <span class="hours"></span>
				  <div class="smalltext">Hours</div>
				</div>
				<div>
				  <span class="minutes"></span>
				  <div class="smalltext">Minutes</div>
				</div>
				<div>
				  <span class="seconds"></span>
				  <div class="smalltext">Seconds</div>
				</div>
			  </div> -->
			  



		</div>

		<span class="s1-txt3 txt-center">
			<!-- @ IEEE-Institute of Electrical and Electronics Engineers -->
		</span>
		
	</div>

	<!-- Modal Login -->
	<div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="modal-subscribe where1-parent bg0 bor2 size4 p-t-54 p-b-100 p-l-15 p-r-15">


				

					
					<p class="s1-txt5 txt-center wsize2 m-lr-auto p-t-20">
						
					</p>
				</div>
			</div>

		</div>
	</div>

	

<!--===============================================================================================-->	
	<script src="break/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="break/vendor/bootstrap/js/popper.js"></script>
	<script src="break/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="break/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="break/vendor/countdowntime/moment.min.js"></script>
	<script src="break/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="break/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="break/vendor/countdowntime/countdowntime.js"></script>
	<script>

var deadline = new Date("July 11, 2020 23:00:00").getTime(); 
  
  var x = setInterval(function() { 
	
  var now = new Date().getTime(); 
  var t = deadline - now; 
  var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
  var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
  var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
  var seconds = Math.floor((t % (1000 * 60)) / 1000); 
  document.getElementById("day").innerHTML =days ; 
  document.getElementById("hour").innerHTML =hours; 
  document.getElementById("minute").innerHTML = minutes;  
  document.getElementById("second").innerHTML =seconds;  
  if (t < 0) { 
		  clearInterval(x); 
		//   document.getElementById("demo").innerHTML = "TIME UP"; 
		  document.getElementById("day").innerHTML ='0'; 
		  document.getElementById("hour").innerHTML ='0'; 
		  document.getElementById("minute").innerHTML ='0' ;  
		  document.getElementById("second").innerHTML = '0'; } 
  }, 1000); 



// const second = 1000,
//       minute = second * 60,
//       hour = minute * 60,
//       day = hour * 24;

// let countDown = new Date('July 2, 2020 23:00:00').getTime(),
//     x = setInterval(function() {    

//       let now = new Date().getTime(),
//           distance = countDown - now;

//       document.getElementById('days').innerText = Math.floor(distance / (day)),
//         document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
//         document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
//         document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

//     }, second)
      
// 	if (t < 0) { 
//         clearInterval(x); 
        
//         document.getElementById("days").innerHTML ='0'; 
//         document.getElementById("hours").innerHTML ='0'; 
//         document.getElementById("minutes").innerHTML ='0' ;  
//         document.getElementById("seconds").innerHTML = '0'; } 
// }, 1000); 




		// $('.cd100').countdown100({
			// Set Endtime here
			// Endtime must be > current time
			// endtimeYear: 0,
			// endtimeMonth: 0,
			// endtimeDate: 0,
			// endtimeHours: 1,
			// endtimeMinutes: 0,
			// endtimeSeconds: 0,
			// timeZone: "" 
			// ex:  timeZone: "America/New_York", can be empty
			// go to " http://momentjs.com/timezone/ " to get timezone
		// });
// __________________________________________________________________________________________________new one
// 		function getTimeRemaining(endtime) {
//   const total = Date.parse(endtime) - Date.parse(new Date());
//   const seconds = Math.floor((total / 1000) % 60);
//   const minutes = Math.floor((total / 1000 / 60) % 60);
//   const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
//   const days = Math.floor(total / (1000 * 60 * 60 * 24));
  
//   return {
//     total,
//     days,
//     hours,
//     minutes,
//     seconds
//   };
// }

// function initializeClock(id, endtime) {
//   const clock = document.getElementById(id);
//   const daysSpan = clock.querySelector('.days');
//   const hoursSpan = clock.querySelector('.hours');
//   const minutesSpan = clock.querySelector('.minutes');
//   const secondsSpan = clock.querySelector('.seconds');

//   function updateClock() {
//     const t = getTimeRemaining(endtime);

//     daysSpan.innerHTML = t.days;
//     hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
//     minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
//     secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

//     if (t.total <= 0) {
//       clearInterval(timeinterval);
//     }
//   }

//   updateClock();
//   const timeinterval = setInterval(updateClock, 1000);
// }

// const deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
// initializeClock('clockdiv', deadline);



// Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();
    
//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;
    
//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
//   // Output the result in an element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
    
//   // If the count down is over, write some text 
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);



	</script>
<!--===============================================================================================-->
	<script src="./break/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="./break/js/main.js"></script>

</body>
</html>