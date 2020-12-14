<?php 
    include('server.php'); 
    // fetch the records to be updated
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($conn, "SELECT * FROM Customer WHERE customerID = $id");
        $record = mysqli_fetch_array($rec);
        $username = $record['userName'];
        $email = $record['email'];
        $password = $record['pass'];
        $id = $record['customerID'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wild Living | Users</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body style="margin: auto;">
    <header>
        <div class="navbar" style="display: flex; background-color: rgb(0, 0, 0, 0.5);">
            <h3 style="font-family: 'Kaushan Script', cursive; margin-right: 78%; color: #cf9206;">Wild Living</h3>
            <a href="Users.php?logout='1'" style="text-decoration: none; color: black; font-size: 20px; font-family: 'Raleway'; padding-top: 20px;">Logout</a>
        </div>
    </header>
    
    <?php if (isset ($_SESSION['msg'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>
    <form method="post" action="server.php" class="admin-form">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
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
            <input type="text" name="pass" value="<?php echo $password; ?>">
        </div>
        <div class="input-group">
            <label>Account Type</label>
            <input type="text" name="acctype" value="<?php echo $acctype; ?>">
        </div>
        <div class="input-group">
        <?php if ($edit_state == false): ?>
            <button type="submit" name="save" class="admin-btn">Save</button> 
        <?php else: ?>
            <button type="submit" name="update" class="admin-btn">Update</button> 
        <?php endif ?>
                 
        </div>
    </form>
    <table>
        <thead>
            <tr style="background-color: black;">
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Usertype</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['pass']; ?></td>
                    <td><?php echo $row['userType']; ?></td>
                    <td>
                        <a href="Users.php?edit=<?php echo $row['customerID']; ?>" class="edit_btn">Edit</a>
                    </td>
                    <td>
                        <a href="server.php?del=<?php echo $row['customerID']; ?>" class="del_btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div id="content">
        <h3 style="text-align: center; font-family: 'Suez One', serif;">Post to gallery</h3>
        <form method="post" action="Users.php" enctype="multipart/form-data" class="admin-form">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" id="" cols="40" rows="4" placeholder="Type something about this image..."></textarea>
                </div>
                <div>
                    <input type="submit" name="upload-image" value="Post">
                </div>
        </form>
    </div>
    <div id="content">
        <h3 style="text-align: center; font-family: 'Suez One', serif;">post to orders</h3>
        <form method="post" action="Users.php" enctype="multipart/form-data" class="admin-form">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 5px;">
                    <label style="margin-bottom: 5px;">Food Name</label>
                    <input type="text" name="food" value="<?php echo $foodname; ?>">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 5px;">
                    <label style="margin-bottom: 5px;">Food Price</label>
                    <input type="text" name="price" value="<?php echo $foodprice; ?>">
                </div>
                <div>
                    <input type="submit" name="upload-food" value="Upload">
                </div>
        </form>
    </div>
    <table style="width: 50%;">
        <thead>
            <tr style="background-color: black;">
                <th>User</th>
                <th>Food </th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($requests)) { ?>
                <tr>
                    <td><?php echo $row['userName']?></td>
                    <td><?php echo $row['foodName']; ?></td>
                    <td>$<?php echo $row['price']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td>
                        <a href="server.php?cancel_admin=<?php echo $row['orderID']; ?>" class="del_btn">Cancel</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>