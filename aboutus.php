<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wild Living | About Us</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body class="page-color">
        <?php if (isset($_SESSION["Uname"])): ?>
            <header>
                <div class="navbar">
  					<h3>Wild Living</h3>
                    <a href="index.php">Bar & Restaurant</a>
                    <a href="Orders.php">Order</a>
					<a href="gallery.php">Gallery</a>
					<a href="aboutus.php" style="margin-right: 350px;">About Us</a>
					<div class="dropdown">
                        <button class="dropbtn"><?php echo $_SESSION['Uname']; ?><i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="profile.php">My Profile</a>
                            <a href="index.php?logout='1'">Logout</a>
                        </div> 
                    </div> 
                </div>
            </header>
        <?php else: ?>
            <header>
                <div class="navbar">
  					<h3>Wild Living</h3>
					<a href="index.php">Bar & Restaurant</a>
					<a href="gallery.php">Gallery</a>
					<a href="aboutus.php">About Us</a>
					<a href="login.php" class="login">Log in</a> 
				</div>
            </header>
        <?php endif ?>
        <main>
            <h1 style="text-align: center; font-family: 'Anton', sans-serif; margin: 30px auto 15px auto;">About Us</h1>
            <div class ="paragraphs">
                <div class = "paragraph">
                    <h2>What is Wild Living</h2>
                    <p>
                        Wild living is a revolutionary culture...nope just kidding ;). Wild living is 
                        an open bar & restaurant for all who just want to relax and enjoy themselves. 
                        Whether you've been on a long drive or had a long day at work. To most of our 
                        customers or members, Wild living is just another home and are welcome any day, 
                        any time. Wild living is more than just a place, it's more of an experience and 
                        we just can't wait to share it with you.
                    </p>
                </div>

                <div class = "paragraph">
                    <h2>Where to find us</h2>
                    <p>
                        Wild Living is located in a quiet serene coastal town called Kilifi.
                        Kilifi is located at the kenyan coast placed between major coastal landmarks 
                        , Mombasa and Malindi. To be specific, wild living is located next to the 
                        Mombasa-Malindi highway with a stunning view of the sunrise and a small beautiful 
                        airstrip on the other side of the road. The area is populated by diverse culture 
                        where there's lots of stuff to do and lots of friends to make as well.
                    </p>
                </div>

                <div class = "paragraph">
                    <h2>What we stand for</h2>
                    <p>
                        Wild Living is all about community, nurturing diversity and having fun. Wild Living
                        stands for creating beautiful experiences as well as memories. We don't mind who 
                        you are or where you are from, we just want to make sure that you feel at home, make 
                        as much friends and memories as you want. Whether you just feel hungry, need a place 
                        to chill and take lot's of pictures or just listen to contemporary music. This is thee 
                        place for you.
                    </p>
                </div>
            </div>
            <div class="comm-img">
                <div class="comm-container">
                    <h1 style="text-align: center; color: #cf9206; font-family: 'Kaushan Script', cursive; font-size: 60px; margin: 0px;">Wild Living</h1>
                    <h3 style="font-family: 'Bree Serif', serif; text-align: center; color: white; font-size: 40px; margin: 0px;">We are all about community!</h3>
                    <p style="text-align: center; color: white; margin: 10px;">
                        <a href="signup.php" style="color: #cf9206; text-decoration: none;">Join us</a> and get a feel of what it's like to be part of our diverse and vibrant community.
                    </p>
                </div>
            </div>
        </main>
        <footer style="margin-top: 0px;">
            <h3 class="footer-logo">Wild Living</h3>
			<div class="footer-subbox">
				<h3 class="footer-headings">Address</h3>
				<p>
					Wild Living,<br>
					Mnarani,<br>
					P.O Box 4400 - 80108,<br>
					Kilifi.
				</p>
			</div>
			<div class="footer-subbox">
				<h3 class="footer-headings">Contact Us</h3>
				<p>
					Email: wliving@gmail.com<br>
					Tel: +254793856704<br>
					Hotline: 0200-220042
				</p>
				<ul>
					<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
                </ul>
			</div>
			<div class="footer-subbox">
				<h3 class="footer-headings">Quick Links</h3>
				<p>
					<a href="#">Sign Up</a><br>
					<a href="#">Log In</a><br>
					<a href="#">Menu</a><br>
					<a href="#">About Us</a>
				</p>
            </div>
        </footer>
    </body>
</html>