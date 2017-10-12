<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Playball|Quicksand" rel="stylesheet">
        <link href="/images/logofav.png" rel="shortcut icon">
    </head>
<body>
<?php
    $cpage=$_SESSION['cpage'];
?>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
                            <a href="index.php"><font align="center">Hotel Jan Palace Leh<br></font></a>
                                <li <?php if($cpage==="hotel") echo "class='active'"?>><a href="index.php">hotel</a><li> |
				<li <?php if($cpage==="room") echo "class='active'"?>><a href="rooms.php">rooms</a><li> |
				<li <?php if($cpage==="act") echo "class='active'"?>><a href="activities.php">activities</a><li> |
				<li <?php if($cpage==="loc") echo "class='active'"?>><a href="locate.php">locate</a><li>
				<div class="clear"></div>
			</ul>
			<!-- start profile_details -->
		</div>
		<div class="clear"></div>
		<div class="top-nav">
                    <nav class="clearfix">
                        <ul>
                            <li class="active"><a href="index.php">hotel</a></li> 
                            <li><a href="rooms.php">rooms & suits</a></li> 
                            <li><a href="reservation.html">reservation</a></li> 
                            <li><a href="activities.php">activities</a></li> 
                            <li><a href="locate.php">contact</a></li>
                        </ul>
			<a href="#" id="pull">Menu</a>
                    </nav>
		</div>
	</div>
</div>
</div>
</body>
</html>
