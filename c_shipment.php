<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit Online Courier || FCS</title>
    <?php
    include("links.php");
    ?>
</head>
<body>
  <?php
  $page = "";
  include "header.php";
  ?>
    <br><br><br><br>
<form method="post" class="form-a" action="u_pdf.php">
                 <h3 class="text-dark text-center p-3">Shipment</h3>
                 <br><br>
                 <input value="<?php echo date("d/m/y"); ?>" class="date"  name="date" >
                <input type="text"  name="pname" placeholder="Product Name*" required>
                <input type="number" placeholder="Lenght*" name="lenght" required>
                <br><br>
                <input type="number" placeholder="Width(cm)*" name="width" required>
                <input type="number" placeholder="Height(cm)*" name="height" required>
                <br><br>
                <p>From</p>
                <select name="country">
        <option value="Pakistan">Pakistan</option>
        <option value="USA">USA</option>
        <option value="afghanistan">Afghanistan</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="india">India</option>
       </select>
                <input type="text" placeholder="City*" name="citya" required>
                <br><br>
                 <p>to</p>
                 <select name="tocountry" required>
        <option value="">Country</option>
        <option value="Pakistan">Pakistan</option>
        <option value="USA">USA</option>
        <option value="afghanistan">Afghanistan</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="india">India</option>
       </select>
       <input type="text" placeholder="City*" name="cityb" required>
       <br><br>
       <input type="number" placeholder="Weight*" name="weight" id="kg" required> 
                <input type="number" placeholder="Charges*" name="charges" id="charges" required class="control">
                <br><br>
                <input type="submit" value="Submit Online Courier" name="bbtn" class="btn">
             </form>
             <br><br><br><br>
             <?php include 'footer.php'; ?>
             <script>

          $(document).ready(function()
          {
              $("#kg").on("keyup" , function(){
                var a = parseInt($("#kg").val());
                    b = a*300+500;
                    document.getElementById("charges").value = b;  
              });
          })

        </script>
</body>
</html>

