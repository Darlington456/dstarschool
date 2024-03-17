<?php
include 'config.php';
$sql = "SELECT * FROM `course1`";
$query = mysqli_query($conn,$sql);

$sql2 = "SELECT * FROM `course2`";
$query2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM `course3`";
$query3 = mysqli_query($conn,$sql3);

$sql4 = "SELECT * FROM `registeredusers`";
$query4 = mysqli_query($conn,$sql4);

?>

<!DOCTYPE html>
<html>
<head>
	<title>COURSES</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<style type="text/css">
		.pmk button,a{
			padding: 1px;
			text-decoration: none;
   			border-radius: 5px;
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
	padding:10px;
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
.post{
	background-color: lightgrey;
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
@media(max-width: 420px){
	.body2 img{
		margin-left: 170px;
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
       .post img{
       	max-width: 473px;
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
          <a class="nav-link" href="index.php#about"  aria-expanded="false"><b>ABOUT US</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php" aria-expanded="false">
              <b>COURSES</b>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#newsletter"><b>CONTACT US</b></a>
        </li>
      </ul>
      <div class="pmk">
      <form class="d-flex" role="search" method="post" action="coursecode.php">
      	<?php 
				while ($row = mysqli_fetch_assoc($query4)) {
					# code...
							?>
					<div style="margin-top: 15px;">	<b><?php echo $row['username']; ?></b>-</div>
				<?php } ?>
		<button type="submit" class="btn btn-primary" name="logout"><a href="logout.php"><b>Logout</b></a></button>

      </form>
  </div>
    </div>
  </div>
</nav>
<!-- header part -->
	<div class="container-fluid post">
		<div class="row pt-3 pb-3">
			<marquee><b>HAVE A GLANCE OF OUR SPECIALITIES </b></marquee>
			<h3 style="text-align: center;" id="webdev"><b>WEB DEVELOPMENT</b></h3>
				<div class="col-lg-6">				
					<p>
					Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services. A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development.

					Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding. Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.

					For larger organizations and businesses, Web development teams can consist of hundreds of people (Web developers) and follow standard methods like Agile methodologies while developing Web sites.
					Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of Web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers are responsible for behavior and visuals that run in the user browser, while back-end developers deal with the servers. To know more about <B><U>WEB DEVELOPMENT</U></B> register for the course with us now.
					</p>

						<?php 
				while ($row = mysqli_fetch_assoc($query)) {
					# code...
							?>
						<div class="form-group mt-2">
						NAME OF THE COURSE - <b><?php echo $row['name']; ?></b><hr>
					</div>
					<div class="form-group mt-2">
						DURATION OF THE COURSE - <b><?php echo $row['duration']; ?></b><hr>
					</div>
					<div class="form-group mt-2">
						PRICE - <b>&#8358;<?php echo $row['price']; ?></b><hr>
					</div>
				<?php } ?>
				</div>
			<div class="col-lg-6">
				<img src="s/webdev.png" style="width: 600px; height: 60vh;"><br><br>
					<b>Register with us today to learn the full basics of WEB DEVELOPMENT.</b>
				<form method="post" action="coursecode.php">
					<div class="form-group mt-2">
						<input type="text" name="fullname" placeholder="Fullname" class="form-control" required>
					</div>
					<div class="form-group mt-2">
						<input type="number" name="phone" placeholder="Phone" class="form-control" required>
					</div>
					<div class="form-group mt-2">
						<input type="email" name="email" placeholder="Email" class="form-control" required>
					</div>
					<div class="btn d-grid gap-2 mt-2">
						<button type="submit" class="btn btn-primary" name="Sign">Register</button>
					</div>
				</form>
			</div>
			
			</div><hr>

			<div class="row pt-3 pb-3">
				<h3 style="text-align: center;" id="python"><b>PYTHON</b></h3>
				<div class="col-sm-6">
					<img src="s/python1.jpeg" style="width: 600px; height: 60vh;"><br><br>
					<b>Register with us today to learn the full basics of PYTHON PROGRAMMING.</b>
				<form method="post" action="coursecode.php">
					<div class="form-group mt-2">
						<input type="text" name="fullname" placeholder="Fullname" class="form-control" required>
					</div>
					<div class="form-group mt-2">
						<input type="number" name="phone" placeholder="Phone" class="form-control" required>
					</div>
					<div class="form-group mt-2">
						<input type="email" name="email" placeholder="Email" class="form-control" required>
					</div>
					<div class="btn d-grid gap-2 mt-2">
						<button type="submit" class="btn btn-primary" name="regid">Register</button>
					</div>
				</form>
				</div>

				<div class="col-sm-6">
					<p>
						Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.

						Python is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly procedural), object-oriented and functional programming. It is often described as a "batteries included" language due to its comprehensive standard library.

						Guido van Rossum began working on Python in the late 1980s as a successor to the ABC programming language and first released it in 1991 as Python 0.9.0. Python 2.0 was released in 2000. Python 3.0, released in 2008, was a major revision not completely backward-compatible with earlier versions. Python 2.7.18, released in 2020, was the last release of Python 2.

						Python consistently ranks as one of the most popular programming languages, and has gained widespread use in the machine learning community.
						Python 2.0 was released on 16 October 2000, with many major new features such as list comprehensions, cycle-detecting garbage collection, reference counting, and Unicode support. Python 3.0, released on 3 December 2008, with many of its major features backported to Python 2.6.x and 2.7.x. Releases of Python 3 include the 2to3 utility, which automates the translation of Python 2 code to Python 3.
						As of October 2023, Python 3.12 is the stable release, and 3.12 and 3.11 are the only versions with active (as opposed to just security) support. Notable changes in 3.11 from 3.10 include increased program execution speed and improved error reporting.To know more about <B><U>PYTHON</U></B> register for the course with us now.
					</p>

						<?php 
				while ($row = mysqli_fetch_assoc($query2)) {
					# code...
							?>
						<div class="form-group mt-2">
						NAME OF THE COURSE - <b><?php echo $row['name']; ?></b><hr>
					</div>
					<div class="form-group mt-2">
						DURATION OF THE COURSE - <b><?php echo $row['duration']; ?></b><hr>
					</div>
					<div class="form-group mt-2">
						PRICE - <b>&#8358;<?php echo $row['price']; ?></b><hr>
					</div>
				<?php } ?>
					
				</div>
			</div><hr>

			<div class="row pt-3 pb-3">
				<h3 style="text-align: center;" id="graphics">GRAPHICS DESIGN(UI/UX)</h3>
				<div class="col-sm-6">
					<p>
						Graphic design is a profession, academic discipline and applied art whose activity consists in projecting visual communications intended to transmit specific messages to social groups, with specific objectives. Graphic design is an interdisciplinary branch of design and of the fine arts. Its practice involves creativity, innovation and lateral thinking using manual or digital tools, where it is usual to use text and graphics to communicate visually.

						The role of the graphic designer in the communication process is that of encoder or interpreter of the message. They work on the interpretation, ordering, and presentation of visual messages. Usually, graphic design uses the aesthetics of typography and the compositional arrangement of the text, ornamentation, and imagery to convey ideas, feelings, and attitudes beyond what language alone expresses. The design work can be based on a customer's demand, a demand that ends up being established linguistically, either orally or in writing, that is, that graphic design transforms a linguistic message into a graphic manifestation.

						Graphic design has, as a field of application, different areas of knowledge focused on any visual communication system. For example, it can be applied in advertising strategies, or it can also be applied in the aviation world or space exploration. In this sense, in some countries graphic design is related as only associated with the production of sketches and drawings, this is incorrect, since visual communication is a small part of a huge range of types and classes where it can be applied. To know more about <B><U>GRAPHICS DESIGN(UI/UX)</U></B> register for the course with us now.
					</p>

						<?php 
				while ($row = mysqli_fetch_assoc($query3)) {
					# code...
							?>
						<div class="form-group mt-2">
						NAME OF THE COURSE - <b><?php echo $row['name']; ?></b><hr>
					</div>
					<div class="form-group mt-2">
						DURATION OF THE COURSE - <b><?php echo $row['duration']; ?></b><hr>
					</div>
					<div class="form-group mt-2">
						PRICE - <b>&#8358;<?php echo $row['price']; ?></b><hr>
					</div>
				<?php } ?>
				</div>
				<div class="col-sm-6">
					<img src="s/graphics.webp" style="width: 600px; height: 60vh;"><br><br>
					<b>Register with us today to learn the full basics of GRAPHICS DESIGN(UI/UX).</b>
				<form method="post" action="coursecode.php">
					<div class="form-group mt-2">
						<input type="text" name="fullname" placeholder="Fullname" class="form-control" required>
					</div>
					<div class="form-group mt-2">
						<input type="number" name="phone" placeholder="Phone" class="form-control" required>
					</div>
					<div class="form-group mt-2">
						<input type="email" name="email" placeholder="Email" class="form-control" required>
					</div>
					<div class="btn d-grid gap-2 mt-2">
						<button type="submit" class="btn btn-primary" name="regis">Register</button>
					</div>
				</form>
				</div>
			<marquee><b>THIS IS A ONE TIME OPPORTUNITY. GRAB IT NOW WHILE YOU CAN!  </b></marquee>

			</div>
		
	</div>



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
							<li><a href="index.php#about">About Us</a></li>
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