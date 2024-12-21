<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/jpg" href="Assets/logos/nss.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="Assets/bootstrap-4.5.0-dist/js/vanilla.js/js/v8.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Forgot Password</title>


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

</style>

</head>
<body>

<img class="wave" src="Assets/img/wave1.png">
	<div class="container">
		<div class="img">
			<img onclick="loaddata()" src="Assets/logos/nss.png">
		</div>
		   <div class="login-content">
                <form action="" method="post">
                            <img src="Assets/SVG/forgot_man.svg">
                            <br>
                            <br>
                            <h3 class="title">CREATE A NEW PASSWORD</h3>
                            <br>
                            <div class="input-div one">
                                        <div class="i">
                                                <i class="fas fa-user"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Username</h5>
                                                <input type="text" class="input" name="user_id" required>
                                        </div>
                            </div>
                            <div class="input-div pass">
                                        <div class="i"> 
                                                <i class="fas fa-user"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Email ID</h5>
                                                <input type="email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="input" name="email" required>
                                        </div>
                            </div>
                            <br>
                            
                            <input type="submit" class="btn" value="SUBMIT" name="submit">
                </form>
         </div>
         
    </div>
    <!-- <form method="POST"> 
    <label>User ID:-</label>
    <input type="text" name='user_id' id=''><br><br>

    <label>Email ID:-</label>
    <input type="email" name='email' id=''><br><br>

    <input type="submit" value="submit" name="submit">
    </form> -->

<?php
include 'conn.php';
include 'mailsetup.php';
$conn=db_connection();
if(@$_POST['submit'])
{
    $user_id=$_POST['user_id'];
    $email=$_POST['email'];

    
    
    //program officer login
    if(@substr_compare($user_id,'PO',0,2)==0)
    {
        $login_verify_query="SELECT * FROM `po_login_details` WHERE `po_user_id`='$user_id' AND `po_invalid`='0' AND `po_email`='$email'  AND `po_password` IS NOT NULL";
        $res_login=mysqli_query($conn,$login_verify_query);
        if(@mysqli_num_rows($res_login)>0)
        {
          //  session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            
            // generate otp
            $str='1234567890qwaszxedcrfvtgbyhnujmkopQWERTYUOPASDFGHJKZXCVBNM0987654321';
            $shuffled = str_shuffle($str);
            $otp = substr($shuffled, 5, 6);
            $_SESSION['otp']=$otp;
            $to=$email;
            $sub="OTP for reset password";
            $body="Your one time password for reset password is: - ".$otp;
            
            //phpmailer
            
            $mail->addAddress($to);     // Add a recipient
            $mail->Subject = $sub;
            $mail->Body = $body;
            if($mail->send())
            {
                echo "<script>alert('Check your registered mail id for OTP.')</script>";
                header('refresh:0,url=updatepass');
            }
            else 
            {
                echo $mail->ErrorInfo;
            }
          
        }
        else
        {
			
			echo "<script>alert('INVALID USERNAME OR EMAIL')</script>";
        }

	}
	//volunteer login
    else if(@substr_compare($user_id,'VOL',0,3)==0 || @substr_compare($user_id,'MH09',0,4)==0)
    {
        $login_verify_query="SELECT * FROM `vol_personal_details` WHERE `vol_user_id`='$user_id' AND `email_id`='$email'AND `password` IS NOT NULL";
        $res_login=mysqli_query($conn,$login_verify_query);
        if(@mysqli_num_rows($res_login)>0)
        {
            //session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            
            // generate otp
            $str='1234567890qwaszxedcrfvtgbyhnujmkopQWERTYUOPASDFGHJKZXCVBNM0987654321';
            $shuffled = str_shuffle($str);
            $otp = substr($shuffled, 5, 6);
            $_SESSION['otp']=$otp;
           
            $to=$email;
            $sub="OTP for reset password";
            $body="Your one time password for reset password is: - ".$otp;
            //phpmailer
            
            $mail->addAddress($to);     // Add a recipient
            $mail->Subject = $sub;
            $mail->Body = $body;
            if($mail->send())
            {
                echo "<script>alert('Check your registered mail id for OTP.')</script>";
                header('refresh:0,url=updatepass');
            }
        }
        else
        {
            echo "<script>alert('INVALID USERNAME OR EMAIL')</script>";
        }

	}
	// principal login
	else if(@substr_compare($user_id,'PRIN',0,4)==0)
    {
        $login_verify_query="SELECT * FROM `principal_login_details` WHERE `principal_user_id`='$user_id' AND  `principal_email`='$email' AND `password` IS NOT NULL ";
        $res_login=mysqli_query($conn,$login_verify_query);
        if(@mysqli_num_rows($res_login)>0)
        {
            //session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            
            // generate otp
            $str='1234567890qwaszxedcrfvtgbyhnujmkopQWERTYUOPASDFGHJKZXCVBNM0987654321';
            $shuffled = str_shuffle($str);
            $otp = substr($shuffled, 5, 6);
            $_SESSION['otp']=$otp;
           
            $to=$email;
            $sub="OTP for reset password";
            $body="Your one time password for reset password is: - ".$otp;
            //phpmailer
            
            $mail->addAddress($to);     // Add a recipient
            $mail->Subject = $sub;
            $mail->Body = $body;
            if($mail->send())
            {
                echo "<script>alert('Check your registered mail id for OTP.')</script>";
                header('refresh:0,url=updatepass');
            }
          
        }
        else
        {
            echo "<script>alert('INVALID USERNAME OR EMAIL')</script>";
        }

    }
    // nss head
    else if($user_id=='nsshead')
    {
        $query_select_head="SELECT * FROM `head_details` WHERE `head_user_id`='$user_id' AND `email_id`='$email'" ;
        $res_check=mysqli_query($conn,$query_select_head);
        if(@mysqli_num_rows($res_check)>0)
        {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            
            // generate otp
            $str='1234567890qwaszxedcrfvtgbyhnujmkopQWERTYUOPASDFGHJKZXCVBNM0987654321';
            $shuffled = str_shuffle($str);
            $otp = substr($shuffled, 5, 6);
            $_SESSION['otp']=$otp;
           
            $to=$email;
            $sub="OTP for reset password";
            $body="Your one time password for reset password is: - ".$otp;
            //phpmailer
            
            $mail->addAddress($to);     // Add a recipient
            $mail->Subject = $sub;
            $mail->Body = $body;
            if($mail->send())
            {
                echo "<script>alert('Check your registered mail id for OTP.')</script>";
                header('refresh:0,url=updatepass');
            }
        }
        else
        {
            echo "<script>alert('INVALID USERNAME OR EMAIL')</script>";
        }

    }
	else
	{
		echo "<script>alert('INVALID ID')</script>";
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
</body>
</html>