<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wild Living | Log In</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    </head>
    <body class="page-color">
        <div id="login-logo">
            <h3>Wild Living</h3>
            <p>Log in to Wild Living</p>
        </div>
        <div id="login-form">
            <form method="post" action="login.php" class="login-forms">
                <!-- validity errors -->
				<?php include('errors.php'); ?>
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="Uname">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>
                <div class="input-group">
                    <button type="submit" name="login" class="btn">Log In</button> 	 
                </div>
            </form>
        </div>
        <div id="new-account">
            <p>New to Wild Living? <a href="signup.php">Create account</a></p>
        </div>
        <div id="new-account">
            <p>Log in as <a href="Admin.php" style="text-decoration: none; color: #cf9206;">Admin</a></p>
        </div>
    </body>
</html>