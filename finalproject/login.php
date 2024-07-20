<?php require_once './includes/conn.php';?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Create variables for user 
    $email = $_POST['email'];
 $password = $_POST['password'];
 session_start();
//  $_SESSION['email'] = $email;
//  echo $_SESSION[$email];
//  echo "Session ID: " . session_id();
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
if(isset($_SESSION['email'])){
  echo $_SESSION['email'];
}
$sql = "SELECT password FROM information WHERE email='$email'";
$dbpassword=$sql;
if (mysqli_query($conn, $sql)) {
    if (password_verify($password, $dbpassword)){
      echo "good password";
      header('Location: afterlogin.php');
    }
    else{
      echo "bad password";
    } 
} else {
  echo "Error: " . mysqli_error($conn);
}
 }
?>