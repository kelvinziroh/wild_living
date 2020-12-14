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
            <h2 style="text-align: center; padding: 0px;">Make Orders</h2>
            <p style="text-align: center; margin-bottom: 25px;">
                Can't make it!?...<br>
                We've got you covered.<br>
                <strong>You can have a look at your orders in your profile</strong>
            </p>
            <div class="posts">
                <?php 
                    $query = "SELECT * FROM food";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='img_div'>";
                            echo "<img src='images/".$row['image']."' class='posted-images'>";
                            echo "<h3>".$row['foodName']."</h3>";
                            echo "<p style='margin-bottom: 1px;'>"."$".$row['price']."</p>";
                            echo "<form method='post' action='Orders.php' style='margin-top: 1px;'>";
                                echo "<input type='hidden' name='food' value='".$row['foodName']."'>";
                                echo "<input type='hidden' name='price' value='".$row['price']."'>";
                                echo "<div style='display: flex; flex-direction: column;'>";
                                    echo "<p style='margin-bottom: 5px; font-size: 15px; '>"."Quantity"."</p>";
                                    echo "<input type='number' name='quantity' value='' style='width: 65px; height: 30px; margin: 0px 10px;'>";
                                echo "</div>";
                                echo "<input type='submit' name='make-order' value='Order' class='admin-btn' style='width: 90px; height: 30px; margin: 10px 10px;'>";
                            echo "</form>";
                        echo "</div>";                    
                    }
                ?>
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