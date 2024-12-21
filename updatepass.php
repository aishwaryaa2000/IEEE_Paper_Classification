<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Assets/bootstrap-4.5.0-dist/css/loader.css" rel="stylesheet">
    <title>Change Password</title>
    <link rel="shortcut icon" type="image/jpg" href="Assets/logos/nss.ico"/>
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
	width: 300px;
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
    .confirm-message{
        margin-left: 3rem;
        padding: 2rem;
        font-size: .8em;
   
    } 
 
    ::placeholder{
	color: #9a9a9a;
	font-weight: 400;
}
.eyee{
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

</head>

<body onload="myFunction()">
<div id="loading">


<!-- <img class="loader"src="Assets/logos/nss.png" > -->
  
	<h1 id="h1">IEEE-Institute of Electrical and Electronics Engineers.</h1>
<h2 id="h2"></h2>
<h3 id="h3">Loading..</h3>
</div>



<img class="wave" src="Assets/img/wave1.png">
	<div class="container">
		<div class="img">
			<img src="Assets/logos/nss.png">
		</div>
		   <div class="login-content">
                <form method="post">
                            <img src="Assets/SVG/forgot_man.svg">
                            <br>
                            <br>
                            <h3 class="title">CREATE A NEW PASSWORD</h3>
                            <br>
                            <div class="input-div one">
                                        <div class="i">
                                                <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="div">
                                                <h5>One Time Password</h5>
                                                <input type="text" class="input" name="eotp" required>
                                        </div>
                            </div>
                            <div class="input-div pass">
                                        <div class="i"> 
                                                <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="div">
                                                <h5>New Password</h5>
                                                <input type="password"  id="password2" onkeyup="checkPass();" class="input" name="new" required>
                                                <span class="eyee">
			<i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
		</span>
                                        </div>
                            </div>
                            <div class="input-div pass">
                                        <div class="i"> 
                                                <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Confirm Password</h5>
                                                <input type="password" id="confirm2" onkeyup="checkPass();" class="input" name="confrim" required><br<br><br>
                                                <br<br><br><br<br><br>
                                                <span id="confirm-message2" class="confirm-message" style="color:red;"> </span>
                                                
                                        </div>
                                        
                            </div>
                            <br>
                            
                            <input type="submit" class="btn" value="CHANGE PASSWORD" name="change">
                </form>
         </div>
         
    </div>

     <script>
		var state= false;
		function toggle(){
			if(state){
				document.getElementById("password2").setAttribute("type","password");
				document.getElementById("eye").style.color='#7a797e';
				state = false;
			}
			else{
				document.getElementById("password2").setAttribute("type","text");
				document.getElementById("eye").style.color='#5887ef';
				state = true;
			}
		}
	</script>
</body>
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
   
    <?php
    include 'conn.php';
    $conn = db_connection();
    if (isset($_POST['change']))
    {
        //session_start();
        $user_id = $_SESSION['user_id'];
        $otp = $_SESSION['otp'];
        $new = $_POST['new'];

        $confrim = $_POST['confrim'];
        $eotp = $_POST['eotp'];

        if ($otp == $eotp) 
        {
            if ($new == $confrim) 
            {
               // echo $user_id;
                
                $hashpassword = md5($new);
                //po change
                if (@substr_compare($user_id, 'PO', 0, 2) == 0) 
                {
                    $query_po = "UPDATE `po_login_details` SET `po_password`='$hashpassword' WHERE `po_user_id`='$user_id'";
                    $res_po = mysqli_query($conn, $query_po);
                    if ($res_po) 
                    {
                        echo "<script>alert('Password Update Successful.')</script>";
                        header('refresh:0,url=logout');
                    }
                }
                // volunteer change
                else if (@substr_compare($user_id, 'VOL', 0, 3) == 0 || @substr_compare($user_id,'MH09',0,4)==0) 
                {
                    $query_vol = "UPDATE `vol_personal_details` SET `password`='$hashpassword' WHERE `vol_user_id`='$user_id'";
                    $res_vol = mysqli_query($conn, $query_vol);
                    if ($res_vol) 
                    {
                        echo "<script>alert('Password Update Successful.')</script>";
                        header('refresh:0,url=logout');
                    }
                }
                // principal change
                else if (@substr_compare($user_id, 'PRIN', 0, 4) == 0) 
                {
                    $query_prin = "UPDATE `principal_login_details` SET `password`='$hashpassword' WHERE `principal_user_id`='$user_id'";
                    $res_prin = mysqli_query($conn, $query_prin);
                    if ($res_prin) 
                    {
                        echo "<script>alert('Password Updated Successfully.')</script>";
                        header('refresh:0,url=logout');
                    }
                    else
                    {
                        echo "<script>alert('Password Update Unsuccessful!')</script>";

                    }
                }
                // nss head change
                else if ($user_id=='nsshead') 
                {
                    
                    $query_head = "UPDATE `head_details` SET `password`='$hashpassword' WHERE `head_user_id`='$user_id'";
                    $res_head = mysqli_query($conn, $query_head);
                    if ($res_head) 
                    {
                        echo "<script>alert('Password Update Successful.')</script>";
                        header('refresh:0,url=logout');
                    }
                }
            } 
            else 
            {
                echo "<script>alert('Password Mismatch.')</script>";
            }
        } 
        else 
        {
            echo "<script>alert('Incorrect OTP')</script>";
        }
    }


    ?>



    	<!-- Login Input labels ke liye -->
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
<script src="Assets/bootstrap-4.5.0-dist/js/loader.js"></script> 
</body>

</html>