<?php
  $fname =$_GET["fname"];
  $lname =$_GET["lname"];
  $no =$_GET["no"];
  $dob =$_GET["dob"];
  $city =$_GET["city"];
  $host='localhost';
  $username='root';
  $password='Ammu123**';
  $dbname = "motherhood";
  $conn=mysqli_connect($host,$username,$password,$dbname);
  if(!$conn)
  {
    die('Could not Connect MySql Server:' .mysql_error());
  }
  $sql = "INSERT INTO myinfo (first_name,last_name,phone_no,dob,city) VALUES ('$fname','$lname','$no','$dob','$city')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  } else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 
  $cookie_name = 'updation';
$cookie_value = $fname;
setrawcookie($cookie_name, $cookie_value); 
  header('Location: http://localhost/Healthcare_iwp/html/myinfo.html');

?>