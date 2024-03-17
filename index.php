<?php 
include 'config.php';
$sql = "SELECT * FROM `registeredusers`";
$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>DSTAR SCHOOL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<style type="text/css">
		.pmk a{
			padding: 1px;
			text-decoration: none;
   			border-radius: 5px;
		}
		.slide img{
			max-width: 300px;
		}
		.slide p,h2{
			font-family: italic;
		}
		.slide h3{
			text-align: center;
		}
		.slide a{
			color: red;
			text-transform: uppercase;
			font-weight: 700;
		}
		.slide1{
			margin-right: 10px;
			max-width: 330px;
			max-height: 80vh;
			margin-left: 30px;
		}
		.sec{
			background-color: crimson;
			padding: 100px;
		}
		.sec h2{
			color: white;
		}
		.dd .d a{
       padding: 30px;
       height: 50px;
       font-size: 20px;
    }
    .d a{
        color: #fff;
        padding: 10px 25px;
        font-size: 20px;
    }
    .d a:hover{
        color: crimson;
        background-color: white;
        padding: 20px;
        font-size: 20px;
    }
    .nj a{
        color: white;
        font-size: 15px;
        padding: 10px 25px;
        float: left;
        
    }
    .nj a:hover{
        color: crimson;
        background-color: white;
    }
    .nj ul li a{
        text-decoration: none;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    }
    .nj ul li{
        padding-right: 100px;
        padding-left: 50px;
    }
.mainheader2 img{
	margin-left: 100px;
}
.mainheader2 article{
	font-size: 60px;
	font-family: italic;
	position: absolute;
	top: 10%;
	left: 30%;
}
.text a{
	color: black;
	font-size: 60px;
}
.text a:hover{
	text-decoration: underline;
	color: black;
}
.txt{
	font-size: 25px;
}
.miss{
	font-size: 50px;
	color: crimson;
	font-family: italic;
}
.body img{
	width: 1347px;
	height: 80vh;
}
.body2 img{
	width: 600px;
	height: 58vh;
	margin-bottom: 55px;
	margin-left: 170px;
}
.paragraph1{
	font-family: sans-serif;
	margin-left: 60px;
}
.paragraph1 button{
	padding-right: 50px;
	padding-left: 50px;
	background-color: inherit;
}
.paragraph1 button:hover{
	border-radius: 8px;
	background-color: crimson;
}
.paragraph1 button a{
	color: black;
}
.round-btn{
	display: inline; height: 40px; width: 40px;
	background: #fff; border-radius: 50%; float: left;
	margin: 15px 8px; box-shadow: 2px 2px 5px 0px rbg(82,0 67);
	border: 1px solid;
}
.round-btn a{
	display: block !important; padding: 7px 12px;
	font-size: 18px; border-radius: 50%;
}
.round-btn .icon{
	padding: 3px;
}
.round-btn .icon img{
	height: 24px; width: 32px; margin-top: 6px;
}
.btn-facebook a{color: #3b5998; padding: 8px 13px;}
.btn-linkedin a{color: #007bb6;}
.btn-twitter a{color: #1c9dcb;}
.btn-instagram a{color: #dd3f5c;}
.btn-whatsapp a{color: #155e54;}
.btn-envelope a{color: #d6403a; font-size: 15px; padding: 9px 12px;}

.standard_header .standard_social_links{margin-left: 1rem;}

.footer-wrap{padding: 23px; background-size: cover;}
.footer-wrap h3{
	color: #fff;
	font-size: 17px;
	text-transform: uppercase;
	margin-bottom: 25px;
}
.plan textarea,input{
	width: 300px;
}
.plan button{
	width: 260px;
}
.footer-wrap p{
	font-size: 13px;
	line-height: 24px;
	color: #b3b3b3;
	margin-top: 15px;
}
.footer-wrap p,a{
	color: #fff;
	text-decoration: underline;
}
.footer-wrap p,a:hover{
	text-decoration: none;
	color: #ff7800;
}
.footer-links li:before{
	content: "\f185";
	font-family: :Fontawesome;
	padding-right: 10px;
	color: #ccc;
}
.footer-category li,a{
	font-size: 13px;
	line-height: 30px;
	color: #ccc;
	text-decoration: none;
}
.footer-category li:before{
	content: "\f105";
	font-family: 'Fontawesome';
	padding-right: 10px;
	color: #b3b3b3;
}
.fa-fax:before{
	content: "\f1ac";
}
.copyright{
	border-top: 1px solid #111;
	font-size: 14px;
	color: #ccc;
	padding-top: 15px;
	text-align: center;
	padding-bottom: 15px;
	background: #222;
}
footer .first_class{
	padding-bottom: 21px;
	border-bottom: 1px solid #444;
}
footer .first_class p, footer .first_class h3{
	margin: 0 0;
}
footer{
	background-color: #222;
}
footer .newsletter input[type=text]{
	width: 80%;
	background: #fff;
	color: #333;
	border:1px solid #222;
	padding: 200px;
	/*border-radius: 50px;*/
	margin-top: 12px;
}
.newsletter .newsletter_submit_btn{
	background: #fff;
	position: absolute;
	border:0;
	font-size: 8px;
	color: #333;
	margin-top: 0.3px;
	padding: 10px;
}
.footer-logo img{
	max-width: 100%;
}

#carouselExampleSlidesOnly img{
	max-height: 100vh;
}
footer .second_class_bdr{
	padding-top: 25px;
	border-top: 1px solid #222;
}
footer .btn-facebook a{
	padding: 6px 14px !important;
}
footer .btn-envelope a{
	color: #d6403a;
	font-size: 15px;
	padding: 12px 12px;
}
footer .round-btn{
	box-shadow: 2px 2px 5px 0px #222 !important;
	margin: 15px 4px;
}
.footer-links .footer-category ul li{
	padding-left: 5px;
	list-style: none;
}
@media(max-width: 768px){
	.footer-wrap h3{
		margin-top: 27px;
	}
	footer .round-btn{
		margin: 15px 4px;
	}
	@media(max-width: 420px){
		.copyright{
			font-size: 13px;
			color: green;
		}
	}
}
 @media(max-width: 600px){
        .dd .d a{ 
            padding: 7px;
            height: 45px;
            font-size: 20px;
       }
       .dd{
        display: flex;
        flex-direction: row;
       }
       .dd .d{
        margin: 0px 0px 0px 50px;
       }
       .mainheader2 img{
        height: 15vh;
        margin-left: 25px;
       }
       .mainheader2 a{
        font-size: 30px;
       }
       .mainheader2 article{
        top: 3%;
        left: 35%;
       }
       .txt{
        font-size: 15px;
        margin-top: -15px;
       }
       .nj ul li{
        padding-left: 10px;
       }
       .body2 img{
       	max-width: 400px;
       		margin-left: 60px;
       }
       .body img{
       	width: 485px;
       }
       .slide img{
			max-width: 260px;
		}
		.slide1{
			margin-right: 10px;
			max-width: 330px;
			max-height: 80vh;
			margin-left: 1px;
			margin-bottom: 40px;
		}
   }

	</style>

	<!-- header 1-->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
        <ul class="navbar-nav dd">
      <li class="d"><a href="https://wa.me/message/NMNQWHASEQYBL1"><i class="fab fa-whatsapp"></i></a></li>
        <li class="d"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="d"><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
</div>
</nav>
<!-- header 1 -->


	<header class="mainheader2">
		<img src="s/all.png">
		<article class="text">
			<a href="index.php">DSTAR SCHOOL</a>
			<div class="txt">Learn to CODE with EASE...</div>	
		</article>
	</header>



<!-- header part -->
<nav class="navbar navbar-expand-lg bg-danger nj">
  <div class="container-fluid">
    <p class="navbar-brand text-white" href="#"><B></B></p>
    <button class="navbar-toggler navbar-light bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="index.php"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-expanded="false" href="#about"><b>ABOUT US</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php"  aria-expanded="false">
              <b>COURSES</b>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#newsletter"><b>CONTACT US</b></a>
        </li>
      </ul>
      <div class="pmk">
      <form class="d-flex" role="search">
      	<?php 
				while ($row = mysqli_fetch_assoc($query)) {
					# code...
							?>
					<div style="margin-top: 15px;">	<b><?php echo $row['username']; ?></b>-</div>
				<?php } ?>
				<a href="logout.php" class="bg-primary"><b>Logout</b></a>

      </form>
  </div>
    </div>
  </div>
</nav>
<!-- header part -->
	

<div class="body">
	<img src="s/ghg.jpg"><br><br>
	<marquee style="font-size: 20px; font-family: italic;"><b>DSTAR SCHOOL...THE BEST CHOICE TO LEARN FULLY BACKEND PROGRAMMING...JOIN US TODAY AND HAVE THE BEST EXPERIENCE...</b></marquee><br><br><br>
	<div class="container-fluid" id="about">
		<div class="row">
			<div class="col-lg-4">
				<div class="paragraph1">
					<div><b>ABOUT US</b></div>
					<div class="miss"><b>Mission & <br>Philosophy</b></div><br>
					<p style="font-family: serif;">
						Dstar School is a well-equipped school dedicated to preparing interested individuals for a successful future in programming world by educating, supporting, and inspiring all learners to becoming great professionals. <br>
					We also have qualified personels who are specialist in GRAPHICS DESIGNING(UI/UX). So therefore we also offer it as a course. 
					</p>
					<button type="submit" class="border-1" id="btn"><a href="courses.php" id="courses"><b>Courses</b></a></button><br><br>
				</div>
				
			</div>
			<div class="col-lg-8 body2">
				<img src="s/mm2.jpg">
			</div>
		</div>
	</div>
</div>

<section class="sec">
	<header>
		<h2 style="text-align: center;">COURSES OUTLINE</h2>
		<div id="sec">
			<p style="text-align: center;">
				<a href="courses.php">
					<b>VIEW OUR COURSES <i class='fas fa-angle-right' style="font-size: 20px;"></i> </b>
				</a>
			</p>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row slide">
			<div class="col-lg-4 bg-white slide1">
				<img src="s/webdev.png">
				<h3><b>WEB DEVELOPMENT</b></h3>
				<p>Get to know the basics of building a simple websites with HTML, CSS, BOOTSTRAP e.t.c<br>
				   PERIOD OF CLASSES: 3 HOURS per day.<BR>
				   NB: CLASSES ARE 3 DAYS PER WEEK.
				 </p>
				<a href="courses.php#webdev">Read More</a>
			</div>
			<div class="col-lg-4 bg-white slide1">
				<img src="s/python1.jpeg">
				<h3><B>PYTHON</B></h3>
				<p>
				   Learn to use python programming language to build your website.<br>
				   PERIOD OF CLASSES: 4 HOURS per day.<BR>
				   NB: CLASSES ARE 3 DAYS PER WEEK.
				</p>
				<a href="courses.php#python">Read More</a>
			</div>
			<div class="col-lg-4 bg-white slide1">
				<img src="s/ui2.png">
				<h3><B>GRAPHICS DESIGN</B></h3>
				<p>
				   Learn the basics of graphics designing, edit images like a pro.<br>
				   PERIOD OF CLASSES: 2 HOURS per day.<BR>
				   NB: CLASSES ARE 3 DAYS PER WEEK.
				</p>
				<a href="courses.php#graphics">Read More</a>
			</div>
		</div>
	</div>
</section>




<!-- footer -->
<footer>
	<div class="footer-wrap" style="font-family: italic;">
		<div class="container first_class">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<h3>BE THE FIRST TO KNOW</h3>
					<P>
						Get all the latest information on our products & sign up fo our newsletter today
					</P>
				</div>
				<div class="col-md-4 col-sm-6 plan">
					<form class="newsletter" id="newsletter" method="post" action="coursecode.php">
						<input type="email" name="email" placeholder="Email address">
					<div class="form-group">
						<textarea class="form-control area" rows="4" name="complain" placeholder="Write something..."></textarea>
					</div>
						<div class="btn d-grid">
						<button type="submit" class="btn btn-primary" name="plane">Submit</button>
					</div>
					</form>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="col-md-12">
						<div class="standard_social_links">
							<div>
								<li class="round-btn btn-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>

								<li class="round-btn btn-whatsapp"><a href="https://wa.me/message/NMNQWHASEQYBL1"><i class="fab fa-whatsapp"></i></a></li>

								<li class="round-btn btn-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>

								<li class="round-btn btn-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>

							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="col-md-12"><h3 style="text-align: center;">Stay Connected</h3></div>
				</div>
			</div>
		</div>
		<div class="second_class">
			<div class="container second_class_bdr">
				<div class="row">
					<div class="col-md-4 col-sm-6">
					<div class="footer-logo"><img src="s/all.png"
						alt="logo"></div>
						<p>Your one-stop career platform to learn FULLSTACK CODING with all types of script languages</p>
					</div>
					<div class="col-md-2 col-sm-6">
					<h3>Quick Links</h3>
						<ul class="footer-links" style="padding-left: 5px;">
							<li><a href="index.php">Home</a></li>
							<li><a href="#index">Dstar School</a></li>
							<li><a href="#about">About Us</a></li>
							<li><a href="#newsletter">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Our Services</h3>
						<ul class="footer-category" style="padding-left: 5px; list-style: none;">
							<li><a href="#">Dstar - Internship &amp; Projects</a></li>
							<li><a href="#">Resume Edge - Resume writing Services</a></li>
							<li><a href="#">Reader Gallaries - Guaranteed Library</a></li>
							<li><a href="#">Dstar - Company Ambassadors</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 col-sm-6">
						<h3>Dstar School</h3>
						<ul class="footer-links" style="padding-left: 5px; ">
							<li><a href="#">Events</a></li>
							<li><a href="#">Jobs &AMP; Internships For 2023</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="container-fluid">
				<div class="copyright"> Copyright | All rights Reserved by Dstar School of Coding</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer -->

<script type="text/javascript" src="b5/js/bootstrap.js"></script>

</body>
</html>