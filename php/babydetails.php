<?php
$dob =$_GET["dob"];
$bldgrp =$_GET["bgrp"];
$wgt =$_GET["wgt"];
   $host='localhost';
  $username='root';
  $password='Ammu123**';
  $dbname = "motherhood";
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' .mysql_error());
  }
  $sql = "INSERT INTO babydetails (dob,bloodgrp,wgt) VALUES ('$dob','$bldgrp','$wgt')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  } else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 

header('Location: http://localhost/Healthcare_iwp/html/mybaby.html');
exit;    
?>