<?php 
        $title = 'Articles';
        require_once './includes/headerafterlogin.php';
    ?><!-- Load Font Awesome Icon Library -->
<link rel="stylesheet" href="../css/stylegenre.css">
<script src="../js/script.js"></script>
<!-- Buttons to choose list or grid view -->
<button onclick="listView()"><i class="fa fa-fw fa-bars"></i> List</button>
<button onclick="gridView()"><i class="fa fa-fw fa-th-large"></i> Grid</button>
<div class="row">
  <div class="column" style="background-color:antiquewhite;">
    <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Article 1</h2>
  
    <p><a href="./paper/This is a book.pdf" download>Download article</a></p>
  </div>
  <div class="column" style="background-color:antiquewhite;">
  <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Article 2</h2>
    
  
    <p><a href="./paper/This is a book.pdf" download>Download article</a></p>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:antiquewhite;">
  <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Article 3</h2>
    
  
    <p><a href="./paper/This is a book.pdf" download>Download article</a></p>
  </div>
  <div class="column" style="background-color:antiquewhite;">
  <img src="./paper/b.webp" alt="" height="35px"width="35px"background-color="antiquewhite">
    <h2>Article 4</h2>
    
  
    <p><a href="./paper/This is a book.pdf" download>Download article</a></p>
  </div>
</div>
<!-- <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div><?php  
    require_once './includes/footer.php';
    ?>