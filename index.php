<?php

session_start();

if (!isset($_SESSION['loggedin'])   || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username'];  ?> </title>
  </head>
  <body>



  <?php
  include("parcials/nav.php");
?>







<section class="home" >
	<div  class="container">
		<!-- <div class="img">
			<img src="image/1.png" alt="icon">
		</div> -->
		<div class="content">
			
    


        <!-- <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username'];  ?>  </h4>
              <p>Hey how are doing? welcome to Deepak company. You are logged in as <?php echo $_SESSION['username'];  ?>. 
              </p>
              <hr>
              <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">using this link</a> .</p>
        </div> -->


<!-- alert message -->


        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> Welcome - <?php echo $_SESSION['username'];  ?></strong> you are logged in. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

           
			
			<h6 class="text-center  navbar-light bg-light col-md-12 " 
			style="color:##000000; border-radius:20px; padding:5px 10px; font-size:15px; font-weight:700; box-shadow: inset -2px -2px 15px rgba(17, 17, 17, .8),
				2px 2px 15px rgba(34, 31, 31, 0.8); transform: translateY(20px ); " >
			 Hello! 👋 <?php echo $_SESSION['username'];  ?> </h6>
			
			
			<h1>I am  Deepak <br> & business  of <br>  web development</h1>
			<p>Create a successful and fulfilling career as a freelance web developer. We'll make <br> your the in-demand website you need to get there.</p>
			<div class="btn">
				<a href="#">Get Touch</a>
			</div>
		</div>
	</div>
</section>


<section class="about" id= 'about'>
	<div class="container">
		<div class="content">
			<div class="text">
				<h1>You just need a website<br> that works for you.
					And <br>I can make it for you.</h1>
			</div>
			<div class="text-1">
				<p>You bring the creativity and passion. We teach you the skills <br> you need to succeed as a freelance web designer. It all <br>happens online, no matter where you are.</p>
			</div>	
			<div class="img">
				<img src="image/deepak4.jpg">

			</div>

			<div class="img-video">
				<img src="image/dance-website.PNG" alt="">
			

			</div>	

			
		</div>

	</div>
</section>

<section class="service">
	<div class="container">
		<div class="content">
			<div class="text">
				<h1>The Dipex Method</h1>
				<p>We teach from experience. Our educators are top-tier freelance 
					<br>web designers who will show you the frameworks they <br>use in their
					 own businesses.</p>
			</div>

			<!-- FIRST SERVICE -->

			<div class="box">
				<div class="box-text">
					<img src="image/biking-person.svg" alt="bike-person">
					<h1>LEARN AT YOUR
						OWN PACE</h1>
					<p>Learn on your terms, but never alone. Enjoy lifetime access
						 to your website revise.</p>	
				</div>
				<div class="box-text">
					<div class="img">
					
						<img src="image/monitor.jpeg" alt="monitor">
					</div>
				</div>
			</div>


			<!-- second service-->

			<div class="box">
				<div class="box-text">
					
						<img src="image/plane-trip-international.svg" alt="bike-person">
						<h1>Build your network</h1>
						<p>Join a growing digital era, get peer insights, and discover exciting business 
							opportunities and expand your network.</p>
					</div>
					<div class="box-text">

					<div class="img">
						<img src="image/network.jpg" alt="monitor">
					</div>	
				</div>
				
			</div>

			<!-- third service -->

			<div class="box">
				<div class="box-text">
					<img src="image/head-set.svg" alt="bike-person">
					<h1>Get support </h1>
					<p>Our team of coaches and experts is always a
						 message away for answers and feedback.</p>	
				</div>
				<div class="box-text">
					<div class="img">

						<img src="image/support.jpeg" alt="monitor">
					</div>
				</div>
			</div>

			<div class="btn">
				<a href="#"></a>
			</div>
		</div>
	</div>
</section>

<!-- my methodelogy -->


<section class="methodology">
	<div class="container">
		<div class="content">
			<h1>my methodology</h1>
			<div class="box">
				<div class="box-text">
					<div class="img">
						<img src="image/Explorer.svg" alt="Explorer">

					</div>
					<h2><span>01</span> To explore</h2>
					<p>I put myself in your users' shoes 
						in order to understand their needs.</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/frame.svg" alt="Explorer">

					</div>
					<h2><span>02</span> Frame</h2>
					<p>We define together the framework of the experience and 
						will begin to formalize the user journey..</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/Imaginer.svg" alt="Explorer">

					</div>
					<h2><span>03</span> Imagine</h2>
					<p>We will generate several ideas to solve our problems.<p>
				</div>
			</div>
				<div class="box">

				<div class="box-text">
					<div class="img">
						<img src="image/Designer.svg" alt="Explorer">

					</div>
					<h2><span>04</span> Designate</h2>
					<p>We will design and create an interactive prototype.</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/Tester.svg" alt="Explorer">

					</div>
					<h2><span>05</span> Test</h2>
					<p>We will analyze the prototype with real users in order to
						 optimize and validate the solution.</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/Deployer.svg" alt="Explorer">

					</div>
					<h2><span>06</span> Deploy</h2>
					<p>Once the prototype has been validated. We will be able to 
						develop, launch and promote the product</p>
				</div>
				</div>

			</div>
		</div>
	</div>

</section>


<!-- my project -->

<section class="project">
	<div class="container">
		<div class="content">
			<h1>My Project</h1>
			<div class="box">
				<div class="box-text">
					<div class="img">
						<img src="image/dance-website.PNG" alt="Explorer">

					</div>
					<h2><span>01</span> To explore</h2>
					<p>I put myself in your users' shoes 
						in order to understand their needs.</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/frame.svg" alt="Explorer">

					</div>
					<h2><span>02</span> Frame</h2>
					<p>We define together the framework of the experience and 
						will begin to formalize the user journey..</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/Imaginer.svg" alt="Explorer">

					</div>
					<h2><span>03</span> Imagine</h2>
					<p>We will generate several ideas to solve our problems.<p>
				</div>
			</div>
				<div class="box">

				<div class="box-text">
					<div class="img">
						<img src="image/Designer.svg" alt="Explorer">

					</div>
					<h2><span>04</span> Designate</h2>
					<p>We will design and create an interactive prototype.</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/Tester.svg" alt="Explorer">

					</div>
					<h2><span>05</span> Test</h2>
					<p>We will analyze the prototype with real users in order to
						 optimize and validate the solution.</p>
				</div>
				<div class="box-text">
					<div class="img">
						<img src="image/Deployer.svg" alt="Explorer">

					</div>
					<h2><span>06</span> Deploy</h2>
					<p>Once the prototype has been validated. We will be able to 
						develop, launch and promote the product</p>
				</div>
				</div>

			</div>
		</div>
	</div>

</section>

<!-- contact -->


<section class="contact" id="contact">
	<div class="container">
		<div class="content">
			
			<!-- <h1>Contact</h1> -->
			<div class="box">

				<div class="box-text">
					<img src="image/msg.png" sizes="(max-width: 479px) 70px, (max-width: 767px) 50px, (max-width: 991px) 80px, (max-width: 1919px) 180px, 1vw" 
			srcset="image/msg.png 500w,image/msg.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
			 alt="" class="contact-element-3">
					<h1>Hello! 👋<br>
						I'm glad that you're here! </h1>
						<img src="image/ring.svg" sizes="(max-width: 479px) 40px, (max-width: 767px) 30px, (max-width: 991px) 50px, (max-width: 1919px) 100px, 1vw" 
						srcset="image/ring.svg 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
						 alt="" class="contact-element-3">		
				</div>
				<div class="box-text">
					<img src="image/telegram.png" sizes="(max-width: 479px) 40px, (max-width: 767px) 30px, (max-width: 991px) 50px, (max-width: 1919px) 70px, 1vw" 
						srcset="image/telegram.png 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
						 alt="" class="contact-element-3">
					<div class="box-contact">
						


						



						<form action="welcome.php" method="post">
							<input type="text" name="name" placeholder="Your Name" Required>
							<input type="email" name="email" placeholder="Your Email" Required>
							<input type="text" name="subject" placeholder="Your Subject" >
							<!-- <label for="msg">Tell us more about your project. How can I help ?</label> -->
							<p>Tell us more about your project. How can I help ?</p>
							<textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message" Required></textarea>
							<button name="send">Send</button>
						</form>

					</div>
					<img src="image/spare.svg" sizes="(max-width: 479px) 40px, (max-width: 767px) 30px, (max-width: 991px) 50px, (max-width: 1919px) 40px, 1vw" 
						srcset="image/spare.svg 500w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message-p-800.png 800w, https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5f781a28133859ba1c02c8b9_Message.png 1000w"
						 alt="" class="contact-element-3 center" >

				</div>
			</div>
		</div>
	</div>
</section>

<!-- copyright -->

<section class="copy-right">
	<div class="container">
		Copyright © 2020 - <?php echo date("Y"); ?> by Deepak
		 

	</div>
</section>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$(".ham-burger, .box .nav a").click(function () {
				$(".box .nav").toggleClass("open")
				$(".ham-burger").toggleClass("active");
			})
		})





</script>

	




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
