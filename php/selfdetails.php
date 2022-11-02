<?php
$hgt =$_GET["hgt"];
$wgt =$_GET["wgt"];
$bgrp =$_GET["bgrp"];

    $host='localhost';
  $username='root';
  $password='Ammu123**';
  $dbname = "motherhood";
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' .mysql_error());
  }
  $sql = "INSERT INTO selfdetails (height,weight,bloodGrp) VALUES ('$hgt','$wgt','$bgrp')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  } else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 
  header('Location: http://localhost/Healthcare_iwp/html/mytrack.html');
exit;    
?>