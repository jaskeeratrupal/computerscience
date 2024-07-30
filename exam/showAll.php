<?php 
    require_once './includes/header.php';
    require_once './includes/conn.php'; 
    $sql = "SELECT * FROM string_info WHERE 1";
    $result = mysqli_query($conn, $sql);
    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["string_id"] . " ";
                echo $row["message"] . "<br>";
            }
        }
               else{
            echo "No records found";
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    }     	
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
          <form method="post" action="deleterecord.php">
            <div class="input-group">
               <label for="inputPrimaryKey" class="form-label" ></label>
                <input type="text" class="form-control" id="PrimaryKey" name="primarykey" placeholder="Primary Key">
                <button type="submit" a href="delete.php" class="btn btn-danger w-75">Delete</a>
            </div>
          </form>
        </div>
    </div>
</div>
<?php 
    require_once './includes/footer.php';
 ?>
