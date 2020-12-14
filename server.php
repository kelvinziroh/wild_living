<?php
    session_start();

    // initialize variables
    $username = "";
    $email = "";
    $password = "";
    $acctype = "";
    $customer = "";
    $msg = "";
    $foodname = "";
    $foodprice = "";
    $quantity = "";
    $errors = array();
    $id = 0;
    $edit_state = false;
    

    // variables to connect to database
	$Servername = "localhost";
	$Username = "root";
	$Password = "";
	$dbname = "restaurant1";

	// create connection
    $conn = mysqli_connect($Servername, $Username, $Password, $dbname);

    // when sign up button is clicked
	if (isset($_POST['signup'])) {
        
        $username = mysqli_real_escape_string($conn, $_POST['Uname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']); 

        // check validity of the fields
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        // Insert Info in database if there are no errors
        if (count($errors) == 0){
            $password = md5($password); //password encryption before storage for security
            $acctype = 'user';
            $query = "INSERT INTO Customer (userName, email, pass, userType) VALUES ('$username', '$email', '$password', '$acctype')";
            mysqli_query($conn, $query);
            $_SESSION['Uname'] = $username;
            header('location: index.php'); // redirect to landing page
        }
    }

    // when log in button is clicked
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['Uname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        // check validity of fields
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password); // encrypt password before comparison with that in the database
            $query = "SELECT * FROM Customer WHERE userName='$username' AND email='$email' AND pass='$password'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1){
                // log the user in
                $_SESSION['Uname'] = $username;
                header('location: index.php');
            }else{
                array_push($errors, "Invalid credential combination");
            }
        }
    }

    // when log in button is clicked as admin
    if (isset($_POST['admin-login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['Uname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        // check validity of fields
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password); // encrypt password before comparison with that in the database
            $query = "SELECT * FROM Customer WHERE userName='$username' AND email='$email' AND pass='$password' AND userType='admin'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1){
                // log the user in
                $_SESSION['Uname'] = $username;
                header('location: Users.php');
            }else{
                array_push($errors, "Invalid Administrator credentials");
            }
        }
    }

    // logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['Uname']);
        header('location: login.php');
    }

    // CRUD Operations

    // when save button is clicked
	if (isset($_POST['save'])){
		$username = $_POST['Uname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $acctype = $_POST['acctype'];

        $password = md5($password); // encrypt password before adding new user
		$query = "INSERT INTO Customer (userName, email, pass, userType) VALUES ('$username', '$email', '$password', '$acctype')";
		mysqli_query($conn, $query);
		$_SESSION['msg'] = "User saved successfully!";
		header('location: Users.php');
    }
    
    // retrieve records
    $results = mysqli_query($conn, "SELECT * FROM Customer");
    
    // update records
	if (isset($_POST['update'])){
		$username = mysqli_real_escape_string($conn, $_POST['Uname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $acctype = mysqli_real_escape_string($conn, $_POST['acctype']);
		$id = mysqli_real_escape_string($conn, $_POST['id']);

        $password = md5($password); // encrypt password before updating 
		mysqli_query($conn, "UPDATE Customer SET userName='$username', email='$email', pass='$password', userType='$acctype' WHERE customerID=$id");
		$_SESSION['msg'] = "User updated successfully!";
		header('location: Users.php');
    }
    
    // delete records
	if (isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM Customer WHERE customerID=$id");
		$_SESSION['msg'] = "User deleted successfully!";
		header('location: Users.php');
    }
    
    // if post button is clicked
    if (isset($_POST['upload-image'])){

        // the path to store the uploaded image
        $target = "images/".basename($_FILES['image']['name']);

        // get all the submitted data from the from
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $query = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
        mysqli_query($conn, $query); // store submitted data into the images table in database

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image Uploaded successfully";
        } else {
            $msg = "There was a problem uploading the image";
        }
    }

    // if upload button is clicked
    if (isset($_POST['upload-food'])){

        // the path to store the uploaded image
        $target = "images/".basename($_FILES['image']['name']);

        // get all the submitted data from the from
        $image = $_FILES['image']['name'];
        $foodname = $_POST['food'];
        $foodprice = $_POST['price'];

        $query = "INSERT INTO food (image, foodName, price) VALUES ('$image', '$foodname', '$foodprice')";
        mysqli_query($conn, $query); // store submitted data into the images table in database

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image Uploaded successfully";
        } else {
            $msg = "There was a problem uploading the image";
        }
    }

    // if order button is clicked
    if (isset($_POST['make-order'])){
        $foodname = $_POST['food'];
        $foodprice = $_POST['price'];
        $quantity = $_POST['quantity'];
        $username = $_SESSION['Uname'];
        $query = "SELECT * FROM Customer WHERE userName='$username'";
        $rec = mysqli_query($conn, $query);
        $recCheck = mysqli_num_rows($rec);

        if ($recCheck > 0){
            while ($row = mysqli_fetch_assoc($rec)){
                $customer = $row['customerID'];
            }
        }

        $sql = $query = "INSERT INTO orders (customerID, foodName, price, quantity) VALUES ('$customer', '$foodname', '$foodprice', '$quantity')";
        mysqli_query($conn, $sql);
    }

    // retrieve order records for individual users
    if (isset($_SESSION['Uname'])) {
        $username = $_SESSION['Uname'];
        $results1 = mysqli_query($conn, "SELECT * FROM Customer INNER JOIN orders ON Customer.customerID = orders.customerID WHERE userName='$username'");
    }
    
    // retrieve order records for admin
    $requests = mysqli_query($conn, "SELECT * FROM Customer INNER JOIN orders ON Customer.customerID = orders.customerID");

    // cancel orders for user
    if (isset($_GET['cancel'])){
		$id = $_GET['cancel'];
        mysqli_query($conn, "DELETE FROM orders WHERE orderID=$id");
        header('location: profile.php');
    } 

    // cancel orders for admin
    if (isset($_GET['cancel_admin'])){
		$id = $_GET['cancel_admin'];
        mysqli_query($conn, "DELETE FROM orders WHERE orderID=$id");
        header('location: Users.php');
    }
?>