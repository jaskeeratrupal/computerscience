<?php 
        $title = '';
        require_once './includes/headerafterlogin.php';
    ?><link rel="stylesheet" href="../css/stylegenre.css">
    <link rel="stylesheet" href="../css/genre.css">
<script src="../js/script.js"></script><!-- Load Font Awesome Icon Library -->

<!-- Buttons to choose list or grid view -->
<button onclick="listView()"><i class="fa fa-fw fa-bars"></i> List</button>
<button onclick="gridView()"><i class="fa fa-fw fa-th-large"></i> Grid</button>

<div class="row">
  <div class="column" style="background-color:antiquewhite;">
    <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Book 1</h2>
  
    <p><a href="./paper/This is a book.pdf" download>Download book</a></p>
  </div>
  <div class="column" style="background-color:antiquewhite;">
  <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Book 2</h2>
    
  
    <p><a href="./paper/This is a book.pdf" download>Download book</a></p>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:antiquewhite;">
  <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Book 3</h2>
    
  
    <p><a href="./paper/This is a book.pdf" download>Download book</a></p>
  </div>
  <div class="column" style="background-color:antiquewhite;">
  <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Book 4</h2>
    
  
    <p><a href="./paper/This is a book.pdf" download>Download book</a></p>
  </div>
</div><?php 
    require_once './includes/footer.php';
    ?>