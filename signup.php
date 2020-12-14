<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Wild Living | Sign Up</title>
		<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<header class="signup-header">
			<div id="opac-color">
				<div class="navbar">
  					<h3>Wild Living</h3>
					<a href="index.php">Bar & Restaurant</a>
					<a href="gallery.php">Gallery</a>
					<a href="aboutus.php">About Us</a>
					<a href="login.php" class="login">Log in</a> 
				</div>
				<div id="intro">
					<div id="intro-text">
						<h1 id="intro-logo">Wild Living</h1>
						<p>A merrier world for food, cheer and song lovers where moments are worth more than hoarded Gold.</p>
					</div>
					<div id="intro-form">
						<form method="post" action="signup.php">
							<!-- validity errors -->
							<?php include('errors.php'); ?>
							<div class="input-group">
								<label>Username</label>
								<input type="text" name="Uname" value="<?php echo $username; ?>">
							</div>
							<div class="input-group">
								<label>Email</label>
								<input type="text" name="email" value="<?php echo $email; ?>">
							</div>
							<div class="input-group">
								<label>Password</label>
								<input type="password" name="pass">
							</div>
							<div class="input-group">
								<button type="submit" name="signup" class="btn">Sign Up</button> 	 
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div id="welcome">
				<h2>Welcome</h2>
				<p>
					Wild Living's community has never been happier to have you create memorable moments around an experience we all have 
					a connection to, <strong>Food!</strong> it's not just a place, it's an experience. We hope you don't mind a teaser of 
					some of our specialties ;)
				</p>
				<!-- <h3>Taste your paradise</h3> -->
			</div>
			<div class="cards_container">
				<div class="trading_card">
					<!-- Food Picture goes here-->
					<img src="img/orijit-chatterjee-wEBg_pYtynw-unsplash.jpg" alt="Pasta" class="card-image">
					<div class="description">
						<!-- Food Name goes here-->
						<h3>Pasta</h3>
						<!-- Food interesting fact goes here -->
						<ul>
							<!-- Food list information goes here -->
							<li><span>Origin</span>: Italy</li>
							<li><span>Popularity</span>: 6 stars</li>
							<li><span>Price Range</span>: $7.50 - $12.00</li>
						</ul>
						<!-- Food description goes here -->
					</p> 
						<p><a href="https://en.wikipedia.org/wiki/Pasta" target="_blank">Learn More</a> about Pasta.</p>
					</div>
				</div>
				<div class="trading_card">
					<!-- Food Picture goes here-->
					<img src="img/ivan-torres-MQUqbmszGGM-unsplash.jpg" alt="Pizza" class="card-image">
					<div class="description">
						<!-- Food Name goes here-->
						<h3>Pizza</h3>
						<!-- Food interesting fact goes here -->
						<ul>
							<!-- Food list information goes here -->
							<li><span>Origin</span>: Italy</li>
							<li><span>Popularity</span>: 6 stars</li>
							<li><span>Price Range</span>: $7.50 - $12.00</li>
						</ul>
						<!-- Food description goes here -->
						<p><a href="https://en.wikipedia.org/wiki/Pizza" target="_blank">Learn More</a> about Pizza.</p>
					</div>
				</div>
				<div class="trading_card">
					<!-- Food Picture goes here-->
					<img src="img/sk-uVPV_nV17Tw-unsplash.jpg" alt="Burger" class="card-image">
					<div class="description">
						<!-- Food Name goes here-->
						<h3>Burger</h3>
						<!-- Food interesting fact goes here -->
						<ul>
							<!-- Food list information goes here -->
							<li><span>Origin</span>: Germany, United States</li>
							<li><span>Popularity</span>: 6 stars</li>
							<li><span>Price Range</span>: $7.50 - $12.00</li>
						</ul>
						<!-- Food description goes here -->
						<p><a href="https://en.wikipedia.org/wiki/Hamburger" target="_blank">Learn More</a> about Burgers.</p>
					</div>
				</div>
			</div>
			<div id="services">
				<h3>How it works</h3>
			</div>
			<div id="rendor">
				<div class="onsite">
					<p>
						To experience the vibrant community of food lovers, Wild Living is definitely the place to be. At wild Living, 
						you can make friends, party with us and who knows, maybe find your significant other. So what are you waiting for? 
						Hit the Sign in button and book yourself a reservation.
					</p>
					<a href="">Sign in</a>
				</div>
				<div class="online">
					<p>
						We understand that some of our prospective customers have tight schedules. Not to worry. We have made this online 
						experience just for you where you can order your favorite food, drinks or desert at the comfort of your cozy couch. 
						Sign in to access our online services.
					</p>
					<a href="">Sign in</a>
				</div>
			</div>
			<div id="test-intro">
				<h3>Testimonials</h3>
				<p>See what people say about Wild Living's community and it's experience.</p>
			</div>
			<div id="testimonials">
				<div class="test-cards">
					<img src="img/jessica-felicio-_cvwXhGqG-o-unsplash.jpg" alt="Nora Allen">
					<h3>Nora Allen</h3>
					<p>
						"Wild living is definitely my go to place with friends just incase we need to catch up. The food their just brings 
						back my childhood memories. The view and the vibe you get from that place is just intoxicating. I'd definitely 
						recommend it to anyone seeking time off from busy city routines."
					</p>
				</div>
				<div class="test-cards">
					<img src="img/ivana-cajina-_7LbC5J-jw4-unsplash.jpeg" alt="Ralph Dibny">
					<h3>Ralph Dibny</h3>
					<p>
						"By far the best place I found to shoot mini-events like birthdays. I loved the music that just blended in with the
						moment as people had their food. This helped me capture my subjects in their natural state. The aroma, the ambient 
						light from the sunset, the music and the smiles. Just beautiful."
					</p>
				</div>
				<div class="test-cards">
					<img src="img/autumn-goodman-vTL_qy03D1I-unsplash.jpeg" alt="Iris West">
					<h3>Iris West</h3>
					<p>
						"There's one word i'd use to describe my feelings every time I depart Wild Living's space, 
						<strong>Nostalgic</strong>. My Husband showed this place to me once and now my kids and I treat ourselves there once
						or twice in every two weeks. I've never been bored by their services, especially their food."
					</p>
				</div>
			</div>
		</main>
		<footer>
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