<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php
    include("links.php");
    ?>
</head>
<body>
    <?php
    $page = "login";
    include("header.php");
    ?>
    <br><br><br>
    <form method="post" class="form-b" autocomplete="off">
        <h3 class="text-dark text-center p-3">Login</h3>
        <br><br>
       <input type="email" placeholder="Email*" name="email" required>
       <br><br>
       <input type="text" placeholder="Password*" name="pass" required>
       <br>
       <p>already login?<a href="ship.php">Sign Up</a></p>
       
       <input type="submit" value="Login" name="loginbtn" class="btn">
    </form>
    <br><br><br><br>
    <?php  include 'footer.php'; ?>
</body>
</html>
