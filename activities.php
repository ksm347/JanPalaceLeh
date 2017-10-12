<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
    session_start();
    $_SESSION['cpage']="act";
?>
<html>
<head>
<title>The Paradise-Hotel Website Template | Activities :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</head>
<body>
<?php require_once 'header.php';?>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
<!-- start main_content -->
				<ul class="service_list">
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic1.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details.html"><h3>Sed condimentum</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details.html">Lorem ipsum</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic2.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details.html"><h3>Integer facilisis</h3></a>
						 <p class="para">Our website design and development provides quality web,</p>
						 <h4><a href="details.html">Nulla accumsan</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic3.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details.html"><h3>Morbi sit amet mauris</h3></a>
						 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						 <h4><a href="details.html">Vestilum feliing</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic4.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						<a href="details.html"><h3>Nulla commodo erat</h3></a>
						 <p class="para">Lorem ipsum dolor sit amet, consectetur elit,EIUSMOD tempor,</p>
						 <h4><a href="details.html">Nulla commodo</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
				<ul class="service_list top">
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic5.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details.html"><h3>Nulla commodo erat</h3></a>
						 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a  href="details.html">Lorem ipsum</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic6.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details.html"><h3>Morbi sit amet mauris</h3></a>
						 <p class="para">Lorem ipsum dolor sit amet, consectetur elit,EIUSMOD tempor,</p>
						 <h4><a href="details.html">Nulla accumsan</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic7.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						 <a href="details.html"><h3>Integer facilisis</h3></a>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a href="details.html">Vestilum feliing</a></h4>
											
					</li>
					<li>
						<div class="ser_img">
							<a href="details.html">
								<img src="images/ser_pic8.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>		
						 <a href="details.html"><h3>Sed condimentum</h3></a>
						 <p class="para">Our website design and development provides quality web,</p>
						<h4><a  href="details.html">Lorem ipsum</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
		<div class="clear"></div>
	<!-- end main_content -->

	</div>
</div>
</div>		
<!--start main -->
<?php include_once 'footer.php'; ?>
</body>
</html>