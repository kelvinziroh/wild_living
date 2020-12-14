<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wild Living | Bar & Restaurant</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
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
            <div class="menu-welcome">
                <h2>Welcome! <br>What's on the menu?<br></h2>
            </div>
            <h2 style="text-align: center; position: relative; bottom: 20px;">Best way to kickstart your day...</h2>
            <div class="breakfast-container">
                <img src="img/alex-motoc-lIOmJ2ApubI-unsplash.jpg" style="width: 55%; height: 1135px; margin-left: 100px;">
                <div class="breakfast-content">
                    <h3>BREAKFAST</h3>
                    <h3>COUNTRY FRIED STEAK</h3>
                    <P>
                        Hand battered sirloin steak deep fried<br>
                        golden brown, mashed potatoes, sauteed<br>
                        bacon & onion, steemed green beans, side<br>
                        of black pepper cream gravy<br>
                        $26.00
                    </P>
                    <h3>BACON & EGGS</h3>
                    <P>
                        Candied bacon, BBQ spiced devaled eggs<br>
                        just BBQ spiced Deviled Eggs<br>
                        $10.00
                    </P>
                    <h3>WAFFLES & EGGS</h3>
                    <P>
                        Waffles with your egg cooked to perfection<br>
                        $7.99
                    </P>
                    <h3>BACON OR SAUSAGE & EGGS</h3>
                    <P>
                        To fresh eggs, any style with 4 bacon<br>
                        strips or 4 sausage links or 2 country<br>
                        sausage patties served with three fluffy<br>
                        made from scratch buttermilk pancakes &<br>
                        hash browns.<br>
                        $10.99
                    </P>
                    <h3>BISCUITS & GRAVY WITH EGGS</h3>
                    <P>
                        Two fresh eggs, any style, with grilled<br>
                        sausage patties set aside with two fresh<br>
                        cooked buttermilk biscuits, smothered in<br>
                        country sausage gravy, served with hash<br>
                        browns<br>
                        $11.99
                    </P>
                    <h3>CORN BEEF & HASH</h3>
                    <P>
                        Traditional corned beef hash, 2 fresh eggs<br>
                        any style, served with 3 fluffy buttermilk<br>
                        pancakes and hash browns<br>
                        $9.99
                    </P>
                    <h3>CRANBERRY NUT OATMEAL</h3>
                    <P>
                        Topped with sweet dried cranberries and<br>
                        pecans, served with milk, brown sugar and<br>
                        fresh fruit<br>
                        $26.00
                    </P>
                </div>
            </div>
            <h2 style="text-align: center;">Knock your buds out with some of our hot beverages!</h2>
            <div class="cards_container">
				<div class="trading_card">
					<!-- Food Picture goes here-->
					<img src="img/albert-s-FkNfVgHVzkI-unsplash.jpg" alt="Cappucino" class="card-image">
					<div class="description">
						<!-- Food Name goes here-->
						<h3>Cappucino</h3>
						<!-- Food interesting fact goes here -->
						<ul>
							<!-- Food list information goes here -->
							<li><span>Price</span>: $7.50</li>
						</ul>
						<!-- Food description goes here --> 
                        <p>espresso-based prepared with steamed milk foam and flavored with cinnamon or chocolate powder.</p>
					</div>
				</div>
				<div class="trading_card">
					<!-- Food Picture goes here-->
					<img src="img/nathan-dumlao-eUaQgpVMaU8-unsplash.jpg" alt="Espresso" class="card-image">
					<div class="description">
						<!-- Food Name goes here-->
						<h3>Espresso</h3>
						<!-- Food interesting fact goes here -->
						<ul>
							<!-- Food list information goes here -->
							<li><span>Price</span>: $7.50</li>
						</ul>
						<!-- Food description goes here -->
						<p>espresso-based prepared with steamed milk foam and flavored with cinnamon or chocolate powder.</p>
					</div>
				</div>
				<div class="trading_card">
					<!-- Food Picture goes here-->
					<img src="img/patrick-fore-5PRp-FvsI0Q-unsplash.jpg" alt="Americano" class="card-image">
					<div class="description">
						<!-- Food Name goes here-->
						<h3>Americano</h3>
						<!-- Food interesting fact goes here -->
						<ul>
							<!-- Food list information goes here -->
							<li><span>Price</span>: $7.50</li>
						</ul>
						<!-- Food description goes here -->
						<p>espresso-based prepared with steamed milk foam and flavored with cinnamon or chocolate powder.</p>
					</div>
				</div>
            </div>
            <h2 style="text-align: center;">Main course menu</h2>
            <div class="backpic">
                <div class="maincourse-container">
                    <div class="maincourse-content">
                        <h3>CABBAGE ROLLS</h3>
                        <P>
                            Hand battered sirloin steak deep fried<br>
                            golden brown, mashed potatoes, sauteed<br>
                            bacon & onion, steemed green beans, side<br>
                            of black pepper cream gravy<br>
                            $8.00
                        </P>
                        <h3>MEATBALL HOAGIE</h3>
                        <P>
                            Candied bacon, BBQ spiced devaled eggs<br>
                            just BBQ spiced Deviled Eggs<br>
                            $6.00
                        </P>
                        <h3>MEXICAN EGGROLLS</h3>
                        <P>
                            Waffles with your egg cooked to perfection<br>
                            $7.99
                        </P>
                        <h3>MEATBALL SQUARES</h3>
                        <P>
                            To fresh eggs, any style with 4 bacon<br>
                            strips or 4 sausage links or 2 country<br>
                            sausage patties served with three fluffy<br>
                            made from scratch buttermilk pancakes &<br>
                            hash browns.<br>
                            $11.99
                        </P>
                        <h3>CHICKEN</h3>
                        <P>
                            Two fresh eggs, any style, with grilled<br>
                            sausage patties set aside with two fresh<br>
                            cooked buttermilk biscuits, smothered in<br>
                            country sausage gravy, served with hash<br>
                            browns<br>
                            $8.99
                        </P>
                        <h3>HAM & CHEESE SANDWITCH</h3>
                        <P>
                            Traditional corned beef hash, 2 fresh eggs<br>
                            any style, served with 3 fluffy buttermilk<br>
                            pancakes and hash browns<br>
                            $10.99
                        </P>
                        <h3>FRENCH FRIES</h3>
                        <P>
                            Topped with sweet dried cranberries and<br>
                            pecans, served with milk, brown sugar and<br>
                            fresh fruit<br>
                            $3.00
                        </P>
                    </div>
                    <div class="maincourse-content">
                        <h3>DOUBLE EGG BURGER</h3>
                        <P>
                            Hand battered sirloin steak deep fried<br>
                            golden brown, mashed potatoes, sauteed<br>
                            bacon & onion, steemed green beans, side<br>
                            of black pepper cream gravy<br>
                            $26.00
                        </P>
                        <h3>BACON BURGER</h3>
                        <P>
                            Candied bacon, BBQ spiced devaled eggs<br>
                            just BBQ spiced Deviled Eggs<br>
                            $10.00
                        </P>
                        <h3>PASTA & MEATBALLS</h3>
                        <P>
                            Waffles with your egg cooked to perfection<br>
                            $7.99
                        </P>
                        <h3>HAWAIAN CHICKEN SPICY PIZZA</h3>
                        <P>
                            To fresh eggs, any style with 4 bacon<br>
                            strips or 4 sausage links or 2 country<br>
                            sausage patties served with three fluffy<br>
                            made from scratch buttermilk pancakes &<br>
                            hash browns.<br>
                            $10.99
                        </P>
                        <h3>BBQ BEEF STEAK PIZZA</h3>
                        <P>
                            Two fresh eggs, any style, with grilled<br>
                            sausage patties set aside with two fresh<br>
                            cooked buttermilk biscuits, smothered in<br>
                            country sausage gravy, served with hash<br>
                            browns<br>
                            $11.99
                        </P>
                        <h3>MUSHROOM PIZZA</h3>
                        <P>
                            Traditional corned beef hash, 2 fresh eggs<br>
                            any style, served with 3 fluffy buttermilk<br>
                            pancakes and hash browns<br>
                            $9.99
                        </P>
                        <h3>APPLEWOOD SMOKED CHEDAR PIZZA</h3>
                        <P>
                            Topped with sweet dried cranberries and<br>
                            pecans, served with milk, brown sugar and<br>
                            fresh fruit<br>
                            $26.00
                        </P>
                    </div>
                </div>
            </div>
            <div class="menu-drinks-container">
                <div class="menu-drinks">
                    <h2 style="font-size: 40px; text-align: center;">Cheers!</h2>
                </div>
            </div>
            <div class="drinks-background">
                <div class="drinks-container">
                    <div class="drinks-content">
                        <h2>COCKTAILS</h2>
                        <h3>WATERMELON CLEANSER</h3>
                        <p>
                            Fresh watermelon, Bombay suphire Gin, Campari,
                            Rum & Raisin Glaze, Vietnamese Mint.<br>
                            $17.00
                        </p>
                        <h3>COCO SPICE</h3>
                        <p>
                            Captain Morgan Spiced Rum, Midori, Pineapple Juice
                            Angostura Bitters, Pink Pineapple Glaze, Coconut
                            Foam.<br>
                            $17.00
                        </p>
                        <h3>MOJITO JUG</h3>
                        <p>
                            Havana Club, Shinomine Chobara Sake, Lemongrass
                            Ginger Hibiscuss Syrup, Lime, Mint, Soda.<br>
                            $30.00
                        </p>
                        <h3>TEQUILA SUNRISE</h3>
                        <p>
                            Tequila, Orange Juice, Grenadine.<br>
                            $17.00
                        </p>
                    </div>
                    <div class="drinks-content">
                        <h2>BEERS</h2>
                        <h3>PREMIUM DRAFT PINTS</h3>
                        <p>
                            Sam Adams, Seasonal.<br>
                            $7.00
                        </p>
                        <h3>PREMIUM BOTTLES</h3>
                        <p>
                            Heinken<br>
                            Amstel Light<br>
                            Bluemoon<br>
                            Corona.<br>
                            $6.25
                        </p>
                        <h3>DOMESTIC BOTTLES</h3>
                        <p>
                            Budwieser<br>
                            Miller Light<br>
                            Coors Light<br>
                            Bud Light.<br>
                            $5.25
                        </p>
                    </div>
                    <div class="drinks-content">
                        <h2>MOCKTAILS</h2>
                        <h3>TROPICALISMA</h3>
                        <p>
                            Mango Juice, Pomegranate Juice, Passionfruit Syrup,
                            Cranberry Juice.<br>
                            $17.00
                        </p>
                        <h3>FRIENDLY ZOMBIE</h3>
                        <p>
                            Apricot Puree, Cherry Syrup, Pineapple Juice,
                            Squeezed Lime Wedges.<br>
                            $17.00
                        </p>
                        <h3>VIRGIN STRAWBERRY COLADA</h3>
                        <p>
                            Coconut Cream, Strawberry Puree, Pineapple Juice,
                            Tapped with Whipped Cream.<br>
                            $17.00
                        </p>
                        <h3>INNOCENT MOJITO</h3>
                        <p>
                            Mojito Mint Syrup, Fresh Mint Leaves, Lime Juice,
                            Sugar Syrup, Tapped with Soda on Crushed ice.<br>
                            $17.00
                        </p>
                    </div>
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


