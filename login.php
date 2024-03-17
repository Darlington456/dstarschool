<?php 
include 'config.php';
?>			
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
          }
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
		
		

	</style>


	<div class="register">
		<form method="post" action="coursecode.php">
			<h2>Login To Your Account</h2><hr>
			<div>
				<input type="text" name="username" placeholder="Enter your username">
			</div>
			<div>
				<input type="email" name="email" placeholder="Enter your email">
			</div>
			<div>
				<input type="password" name="password" placeholder="Password">
			</div>
			

			<div class="btn">
				<button type="submit" name="login">Log In</button>
			</div>
			<div class="login"><a href="forgotten.php">Forgotten password?</a></div>
			<div class="login"><a href="register.php">Don't have an accout? REGISTER</a></div>
		</form>
	</div>

</body>
</html>