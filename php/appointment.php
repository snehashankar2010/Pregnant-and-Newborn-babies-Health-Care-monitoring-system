<?php
$fname =$_GET["fname"];
$dob =$_GET["dob"];
$bgrp =$_GET["bgrp"];
$app=$_GET["app"];
$dr =$_GET["dr"];
$slot =$_GET["slot"];


    $host='localhost';
  $username='root';
  $password='Ammu123**';
  $dbname = "motherhood";
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' .mysql_error());
  }
  $sql = "INSERT INTO forselfapp (name,dob,bldgrp,app,dr,slot) VALUES ('$fname','$dob','$bgrp','$app','$dr','$slot')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  }
  else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 
  header('Location: http://localhost/Healthcare_iwp/html/myappointment.html');
exit;    
?>