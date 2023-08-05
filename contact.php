<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact US || FCS Courier</title>
    <?php
    include("links.php");
    ?>
</head>
<body>
    <?php
    $page = "contact";
    include("header.php");
    ?>
    <br><br><br>
    <form method="post" class="form-a" >
        <h3 class="text-dark text-center p-3">Contact US</h3>
        <br><br>
       <input type="text" placeholder="Your Name*" name="fname" required>
       <input type="text" placeholder="Your Email*" name="email" required>
       <br><br>
       <input type="number" placeholder="Your Contact NO**" name="contact" required>
       <input type="text" placeholder="Subject*" name="sub" required>
       <br><br>
       <textarea name="msg" id="" cols="30" rows="10" placeholder="We Can help You"></textarea>
       <input type="submit" value="Send Messege" name="cbtn" class="btn">
    </form>
    <?php
    if(isset($_POST["cbtn"])){
        $name = $_POST["fname"];
        $email = $_POST["email"];
        $cno = $_POST["contact"];
        $sub = $_POST["sub"];
        $msg = $_POST["msg"];

        $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Contact</th>
<th>Subject</th>
<th>Messege</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$cno</td>
<td>$sub</td>
<td>$msg</td>
</tr>
</table>
</body>
</html>
";
$to = "afzalshiakh297@gmail,com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  if(mail($to , $sub , $message , $headers)){
    echo "<center><h2>Send Message Succssufully</h2></center>";
  }else {
    echo "error";
  }
    }
    ?>
    <br><br><br><br>
    <?php  include 'footer.php'; ?>
</body>
</html>