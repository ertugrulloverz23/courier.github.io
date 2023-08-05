<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ship Now | FCS Courier </title>
    <?php
    include("links.php");
    ?>
</head>
<body>
    <?php
    $page = "ship";
    include("header.php");
    ?>
    <br><br><br>
    <form method="post" class="form-a" >
        <h3 class="text-dark text-center p-3">Welcome to <br> Fast Courier Services</h3>
        <br><br>
       <input type="text" placeholder="Enter Name*" name="name" required>
       <input type="text" placeholder="Address*" name="address" required>
       <br><br>
       <select name="gender" required>
        <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select>
       <input type="number" placeholder="Contact*" name="cno" required>
       <br><br>
       <input type="text" placeholder="NIC Number*" name="nic" required>
       <input type="date"  name="dob" required>
       <br><br>
       <input type="text" placeholder="Email*" name="email" required>
       <input type="text" placeholder="Password*" name="password" required>
       <br><br>
       <input type="submit" value="Describe Your Shipment" name="abtn" class="btn">
    </form>
    <?php
    include("connection.php");
       if(isset($_POST["abtn"]))
        {
             $name = $_POST["name"];
             $address = $_POST["address"];
             $gender = $_POST["gender"];
             $cno = $_POST["cno"];
             $nic = $_POST["nic"];
             $dob = $_POST["dob"];
             $email = $_POST["email"];
             $password = $_POST["password"];
             $pass = md5($password);

             $q = "insert into sign (name, address, gender, contact, nic, dob, email, password) values
              ('".$name."','".$address."','".$gender."','".$cno."','".$nic."','".$dob."','".$email."','".$pass."')";

              $ins = mysqli_query($conn , $q );

              if($ins)
              {
                  header("Location:c_shipment.php"); 
              }else{
                echo "<script>alert('Validation Field')</script>";
              }
        }
        ?>
        <br><br><br>
        <?php
      include 'footer.php';
        ?>
</body>
</html>


