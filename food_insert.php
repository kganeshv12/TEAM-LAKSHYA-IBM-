<?php
  $servername='localhost';
  $username='root';
  $password='1234';
  $dbname = "credentials";
  $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
      }

if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     $sql = "INSERT INTO user (name,email,pass)
     VALUES ('$name','$email','$pass')";
     if (mysqli_query($conn, $sql)) {
        echo "Sign Up Successful";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>