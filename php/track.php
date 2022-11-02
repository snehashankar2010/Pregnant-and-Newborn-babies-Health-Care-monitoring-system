<?php
$day =$_GET["day"];
$cal =$_GET["cal"];
$stepc =$_GET["stepc"];
$nutrition =$_GET["nutrition"];
$carb =$_GET["carb"];
$water =$_GET["water"];
$sleep =$_GET["sleep"];
$protein =$_GET["protein"];

  $host='localhost';
  $username='root';
  $password='Ammu123**';
  $dbname = "motherhood";
  $conn=mysqli_connect($host,$username,$password,"$dbname");
  if(!$conn)
  {
    die('Could not Connect MySql Server:' .mysql_error());
  }
  $sql = "INSERT INTO track (day,calories,steps,nutrition,carb,protein,water,sleep) VALUES ('$day','$cal','$stepc','$nutrition','$carb','$protein','$water','$sleep')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  } else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 
  mysqli_close($conn); 
  $cookie_name = 'updation';
$cookie_value = $fname;
setrawcookie($cookie_name, $cookie_value); 
  header('Location: http://localhost/Healthcare_iwp/html/mytrack.html');

exit;    
?>