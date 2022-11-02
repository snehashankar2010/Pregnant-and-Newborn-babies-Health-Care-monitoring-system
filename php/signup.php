<?php
$name =$_GET["name"];
$pass =$_GET["pass"];
$email =$_GET["email"];
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
  $sql = "INSERT INTO login (Email,Name,Password) VALUES ('$email','$name','$pass')";
 
  if (mysqli_query($conn, $sql))
  {
    echo "<i>Successfully Inserted To Database !!</i>";
  } else 
  {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn); 
}
$cookie_name = 'user';
$cookie_value = $email;
setrawcookie($cookie_name, $cookie_value); 
header('Location: http://localhost/Healthcare_iwp/html/motherProfile.html');
exit;    
?>