<?php 
    $title = 'signup';
    require_once './includes/header.php';
    require_once './includes/conn.php';
?>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Create variables for user 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = $_POST['confirmpassword'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $province = $_POST['province'];
 $area_code = $_POST['area_code'];

	//Escape special characters in a string
    $first_name = mysqli_real_escape_string($conn, $first_name);
    $last_name = mysqli_real_escape_string($conn, $last_name);
    $user_name = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
$address = mysqli_real_escape_string($conn, $address);
$city = mysqli_real_escape_string($conn, $city);
$province = mysqli_real_escape_string($conn, $province);
$area_code = mysqli_real_escape_string($conn, $area_code);
	//Create an SQL INSERT query
	//Execute the query and check for success
    $options = ['cost' => 12];
    $password = password_hash($password, PASSWORD_DEFAULT, $options);
$sql = "INSERT INTO information (first_name,last_name,username,email,password, address, city, province, area_code) VALUES ('$first_name','$last_name','$username','$email','$password', '$address', '$city', '$province', '$area_code')";

// Execute the query and check for success
if (mysqli_query($conn, $sql)) {
    echo "Welcome,to your library";
    header('Location: aftersignup.php');

} else {
  echo "Error: " . mysqli_error($conn);
}
 }


?>
<?php 
    require_once './includes/footer.php';
?>