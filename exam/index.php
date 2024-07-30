<?php
require_once './includes/header.php';
?>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
<form method="post" action="addrecord.php" class="row g-3">
  <div class="col-12">
    <label for="inputMessage" class="form-label">Message</label>
    <input type="text" class="form-control" id="inputMessage"  name="message" placeholder="message" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>
<!-- <div class="container"> -->
    <!-- <div class="row justify-content-center mt-5"> -->
        <!-- <div class="col-8"> -->
                    <a href="showAll.php">Show all records</a>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
<?php
require_once './includes/footer.php';
?>