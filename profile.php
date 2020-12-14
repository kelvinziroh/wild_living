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
            <div class="profile-welcome">
                <h2>Profile</h2>
            </div>
            <div class="profile-info">
                <img src="img/user-profile.jpg" style="width: 200px; height: 200px; border-radius: 50%; border: 2px outstep silver;">
                <?php if (isset($_SESSION["Uname"])): ?>
                    <h3 style="font-size: 40px;"><?php echo $_SESSION['Uname']; ?></h3>
                <?php endif ?> 
            </div>
            <h3 style="text-align: center; margin-top: 0px;">My orders</h3>
            <table style="width: 50%;">
                <thead>
                    <tr style="background-color: black;">
                        <th>Food </th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php while ($row = mysqli_fetch_array($results1)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['foodName']; ?></td>
                            <td>$<?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>
                                <a href="server.php?cancel=<?php echo $row['orderID']; ?>" class="del_btn">Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
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