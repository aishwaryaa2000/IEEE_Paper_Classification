<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['vol_user_id']))
{
    header('location:../logout');
}
include '../conn.php';
$conn=db_connection();
$vol_user_id=$_SESSION['vol_user_id'];



?>
<head>
	<link rel="shortcut icon" type="image/jpg" href="../Assets/logos/nss.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">



    <style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 400px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 2.9rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #1c92d2;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #8396D8;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #1c92d2;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}

span{
	position: absolute;
	right: 15px;
	transform: translate(0,-50%);
	top: 50%;
	cursor: pointer;
}
.fa{
	font-size: 20px;
	color: #7a797e;
}
</style>
<?php
ob_start();
?>

</head>

<body  onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>

<img class="wave" src="../Assets/img/wave1.png">

	<div class="container">
		<div class="img">
			<img src="../Assets/SVG/vol_password.svg">
		</div>
		<div class="login-content">
			<form method="POST">
				<img src="../Assets/SVG/forgot_man.svg">
				<h3 class="title">Change your password</h3>
                <br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Old password</h5>
           		   		<input type="password" id="password" class="input" name="old_password" required>
                              <span><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></span>
           		   </div>
           		</div>
           		<div class="input-div pass">
                        <div class="i"> 
                                <i class="fas fa-key"></i>
                        </div>
           		   <div class="div">
           		    	<h5>New Password</h5>
           		    	<input type="password" class="input" id="password2" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,30}$" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters along with a special character" onkeyup="checkPass();" name="new_password" required>
						   <span><i class="fa fa-eye" aria-hidden="true" id="eyee" onclick="toggle1()"></i></span>
			
					</div>
                </div>

				<p style="color:#66cc66; font-size:0.9rem; display:none;" id="messageg">Password strength is good </p>
                <p style="color:red; font-size:0.6rem;" id="message">* Password must contain atleast one uppercase,one lower case,one digit,one special character and should have a minimum length of 8</p>
                   
                <div class="input-div pass">
                        <div class="i"> 
                                <i class="fas fa-key"></i>
                        </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" class="input" id="confirm2"  onkeyup="checkPass();" name="confrim_password" required>
                           <br><br><br>
                           <p id="confirm-message2" class="confirm-message" style="color:red;"> </p>
						   
					</div>

                </div>

				<script>
    var myInput = document.getElementById("password2");
    myInput.onkeyup = function() {

  var lowerCaseLetters = /[a-z]/g;
  var numbers = /[0-9]/g;
  var upperCaseLetters = /[A-Z]/g;
  var spl=/\W|_/g;

  if(myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) && myInput.value.match(numbers) && myInput.value.match(spl) && (myInput.value.length >= 8)) {  
    document.getElementById("message").style.display = "none";
    document.getElementById("messageg").style.display = "block";

  } else {
    document.getElementById("message").style.display = "block";
    document.getElementById("messageg").style.display = "none";

  }
  
  

}
    </script>

				<script>
		var state= false;
		function toggle(){
			if(state){
				document.getElementById("password").setAttribute("type","password");
				document.getElementById("eye").style.color='#7a797e';
				state = false;
			}
			else{
				document.getElementById("password").setAttribute("type","text");
				document.getElementById("eye").style.color='#5887ef';
				state = true;
			}
		}
	</script>
		<script>
		var state= false;
		function toggle1(){
			if(state){
				document.getElementById("password2").setAttribute("type","password");
				document.getElementById("eyee").style.color='#7a797e';
				state = false;
			}
			else{
				document.getElementById("password2").setAttribute("type","text");
				document.getElementById("eyee").style.color='#5887ef';
				state = true;
			}
		}
	</script>
     <br> <br>      	
            	<input type="submit" class="btn" value="Update password" name="change">
            </form>
        </div>
    </div>
    <script type="text/javascript">
function checkPass()
{
    
    var password = document.getElementById('password2');
    var confirm  = document.getElementById('confirm2');
   
    var message = document.getElementById('confirm-message2');

    var good_color = "#66cc66";
    var bad_color  = "#ff6666";

    if(password.value == confirm.value){

        // confirm.style.backgroundColor = good_color;
        message.style.color           = good_color;
        document.getElementById('confirm-message2').innerHTML= "Passwords Match!";
    }else{
 
        // confirm.style.backgroundColor = bad_color;
        message.style.color           = bad_color;
        document.getElementById('confirm-message2').innerHTML= "Passwords do not Match!";
    }
}  
</script>


<!-- <form method="POST">

<label>Old Password</label>
<input type="text" name="old_password" id=""><br><br>

<label>New Password</label>
<input type="text" name="new_password" id=""><br><br>

<label>Confrim Password</label>
<input type="text" name="confrim_password" id=""><br><br>

<input type="submit" name="change" value="Update Password">
</form> -->
    
    <?php
    
    if(@isset($_POST['change']))
    {
        $old=$_POST['old_password'];
        $new=$_POST['new_password'];
        $confirm=$_POST['confrim_password'];
        $old_password=md5($old);
        $new_password=md5($new);
        $confirm_password=md5($confirm);
        $query_check="SELECT * FROM `vol_personal_details` WHERE `vol_user_id`='$vol_user_id' and `password`='$old_password'";
        $res_check=mysqli_query($conn,$query_check);
        if(mysqli_num_rows($res_check)>0)
        {
            if($new==$confirm)
            {
                $query_update="UPDATE `vol_personal_details` SET `password`='$new_password' WHERE `vol_user_id`='$vol_user_id'";
                $res_update=mysqli_query($conn,$query_update);
                if($res_update)
                {
					echo "<script>alert('Password Updated')</script>";
					header('refresh:0,url=index');
                }
            }
            else
            {
                echo "<script>alert('Passwords Mismatch')</script>";
            }
        }
        else
        {
            echo"<script>alert('Incorrect Old Password')</script>";
        }
    }

    ?>


    
<script type="text/javascript" >    
const inputs = document.querySelectorAll(".input");

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
    
 </script>
<?php
ob_flush();

?>
<script src="../Assets/bootstrap-4.5.0-dist/js/loader.js"></script>
</body>
</html>