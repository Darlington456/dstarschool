<?php 
include 'config.php';

if (isset($_POST['alter'])) {
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $passwordh = password_hash($password, PASSWORD_DEFAULT);

     $sql3 = "UPDATE `registeredusers` SET `password`='$passwordh' WHERE (`password`='$password')";

     $query = mysqli_query($conn, $sql3);
     if ($query) {
          session_start();
          $_SESSION['user_id']=$sql;
          header('location:login.php');
     }
}

?>               
<!DOCTYPE html>
<html>
<head>
     <title>Reset your password</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0S">
</head>
<body>
     <style type="text/css">
          .register{
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translateX(-50%) translateY(-50%);
               border: 5px solid red;
               padding: 30px;
               border-radius: 10px;
               background-image: url(s/a1.jpg);
               box-shadow: 0px 0px 10px 10px white;
          }
          .register:hover{
               background-image: url(s/a2.jpg);
          }
          body{
               background-color: lime;
          }
          h2{
               text-transform: uppercase;
               color: goldenrod;
               font-family: sans-serif;
               background-color: white;
               padding: 20px;
          }
          div,input,button{
               margin-bottom: 6px;
          }
          input{
               width: 96%;
               border: 0;
               padding: 10px;
               background-color: lime;
               border-radius: 5.5px;
               opacity: .7;

               z-index: 1;
          }
          input:hover{
               background-color: skyblue;
          }
          input:focus{
               border: 6px solid crimson;
          }
          button{
               width: 100%;
               padding: 7px;
               font-size: 15px;
               color: crimson;
               cursor: pointer;
               box-shadow: 0px 0px 7px 7px #45633c;
          }
          button:hover{
               background-color: lime;
          }
          body{
               background-image: url(DARLINGTON/linar4to.jpg);
               background-position: center;
               background-size: cover;
               height: 100vh;
          }/*
          .login{
               text-align: center;
          }
          .login a{
               text-decoration: crimson;
          }

          }
          .btn{
               text-align: center;
               justify-content: center;
               margin-top: 20px;
          }
          .btn a{
               
               background-color: crimson;
               padding: 10px;
               color: #ffffff;
               font-weight: 800;
               text-transform: uppercase;
               font-family: sans-serif;
               border-radius: 20px;
          }
          
          
*/
     </style>


     <div class="register">
          <form method="post">
               <h2>Reset password</h2><hr>
               <div>
				<label for="password">Password</label>
				<i class="fas fa-lock"></i>
				<input type="password" name="password" id="password" placeholder="***" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lower case, and at least 8 character">
				<i class="fas fa-exclamation-circle failure-icon"></i>
				<i class="fas fa-check-circle success-icon"></i>
				<div class="error"></div>
			</div>


			<div>
				<label for="password">Confirm Password</label>
				<i class="fas fa-lock"></i>
				<input type="password" name="cpassword" id="password" placeholder="***" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lower case, and at least 8 character">
				<i class="fas fa-exclamation-circle failure-icon"></i>
				<i class="fas fa-check-circle success-icon"></i>
				<div class="error"></div>
			</div>
               <button type="submit" id="submit" name="alter">Proceed</button>
				<a href="login.php" style="margin-top: 30px; text-align: center; text-decoration: none; text-transform: capitalize;">Back to Login</a>
          </form>
     </div>

</body>
</html>