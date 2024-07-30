<?php 
    $title = 'delete records';
    require_once './includes/header.php';
    require_once './includes/conn.php'; 
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['primarykey'])) {
        $primaryKey = $_POST['primarykey'];
         echo $_POST['primarykey'];
          } else {
            echo "No primary key provided.";
        }
    } 
    $sql = "DELETE FROM string_info WHERE string_id = '$primaryKey'";
    $result = mysqli_query($conn, $sql);
    
    if($result) {
        if(mysqli_affected_rows($conn) > 0) {
            echo "Record with ID $primaryKey has been deleted successfully.";
        } else {
            echo "No record found with ID $primaryKey.";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
mysqli_close($conn);
?>
<?php 
    require_once './includes/footer.php';
 ?>