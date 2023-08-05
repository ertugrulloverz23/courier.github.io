
<?php
     include "connection.php"; 
if(isset($_POST["bbtn"]))
{   
    $date = $_POST["date"];
    $pname = $_POST["pname"];
    $lenght = $_POST["lenght"];
    $width = $_POST["width"];
    $height = $_POST["height"];
    $country = $_POST["country"];
    $citya = $_POST["citya"];
    $to_c = $_POST["tocountry"];
    $cityb = $_POST["cityb"];
    $weight = $_POST["weight"];
    $charges = $_POST["charges"];
  
    $insert = "insert into courier (date, pname, weight, lenght,	width,	height,	from_country,	from_city,	to_country,	to_city, charges)
    values ('".$date."','".$pname."','".$weight."','".$lenght."','".$width."','".$height."','".$country."','".$citya."','".$to_c."','".$cityb."','".$charges."')";
  
    $result = mysqli_query($conn , $insert);

include("fpdf186/fpdf.php");

$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial','',16);
$fpdf->Cell(100,20, "Hallo",1, 0, 'C');
$fpdf->Output();





}

?>
