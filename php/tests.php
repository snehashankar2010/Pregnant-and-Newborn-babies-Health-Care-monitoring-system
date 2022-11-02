<?php
$name =$_GET["fname"];
$dob =$_GET["dob"];
$bgrp =$_GET["bgrp"];
$test =$_GET["test"];
$date =$_GET["date_test"];
$status =$_GET["status"];
$due =$_GET["date_due"];
$dr =$_GET["c_doctor"];

if(!(empty($name)))
{
    $host='localhost';
  $username='root';
  $password='Ammu123**';
  $dbname = "motherhood";
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' .mysql_error());
  }
  $sql = "INSERT INTO selftest (uname,dob,bldgrp,test,date,status,due,dr) VALUES ('$name','$dob','$bgrp','$test','$date','$status','$due','$dr')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  } else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 
}
header('Location: http://localhost/Healthcare_iwp/html/mytest.html');
exit;    
?>