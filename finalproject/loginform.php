<?php 
    $title = 'login form';
    require_once './includes/header.php';
	require_once './includes/conn.php';
?>
<link rel="stylesheet" href="./css/stylelogin.css" />
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align:center">Log In</h3>
			</div>
			<div class="card-body">
      <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
    <!-- change action to login -->
<form method="post" action="login.php" class="row g-3">
  <div class="col-12">
    <label for="inputEmail4" class="form-label"><i class="fa fa-fw fa-user"></i>Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
  </div>
  <div class="col-12">
    <label for="inputPassword" class="form-label"><i class="fa fa-fw fa-key"></i>Password</label>
    <input type="text" class="form-control" id="inputPassword"  name="password" placeholder="Password" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>
    </div>
				<!-- <form method="POST"action="login.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-fw fa-key"></i></span>
						</div>
            <br>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
<form method="post" action="login.php" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
  </div>
  <div class="col-12">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="text" class="form-control" id="inputPassword"  name="password" placeholder="Password" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div> -->
<?php 
    require_once './includes/footer.php';
?>