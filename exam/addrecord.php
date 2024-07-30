<?php 
    $title = 'received';
    require_once './includes/header.php';
    require_once './includes/conn.php';
?>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Create variables for user 
    $message= $_POST['message'];
	//Escape special characters in a string
    $message = mysqli_real_escape_string($conn, $message);
	//Create an SQL INSERT query
	//Execute the query and check for success
 
$sql = "INSERT INTO string_info (message) VALUES ('$message')";

// Execute the query and check for success
if (mysqli_query($conn, $sql)) {
    echo "Record added successfully!";
} else {
  echo "Error: " . mysqli_error($conn);
}
 }
?>
<?php 
    require_once './includes/footer.php';
 ?>
