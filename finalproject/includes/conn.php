<?php
    $servername = "localhost";  	// Server name or IP address
    $username = "root";     		// MySQL username
    $password = "";     			// MySQL password







    // write name of database
    $dbname = "finalproject";	  	// Database name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
