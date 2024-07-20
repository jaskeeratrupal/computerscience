<?php 
        $title = 'signup form';
        require_once './includes/header.php';
        require_once './includes/conn.php';
    ?>
    <link rel="stylesheet" href="./css/stylesignup.css">
    <pre>


    </pre>
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-8">
      <form method="post" action="signup.php" class="row g-3">
      <div class="col-md-6 bg-outline-dark">
      <label for="firstName" class="form-label" style="color:white">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" name="first_name" required>
      </div>
      <div class="col-md-6 bg-outline-dark">
        <label for="lastName" class="form-label"style="color:white">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" name="last_name" required>
      </div>
      <div class="col-md-6 bg-outline-dark">
      <label for="username" class="form-label"style="color:white">User Name</label>
        <input type="text" class="form-control" id="inputUserName" name="username" required>
      </div>
      <div class="col-md-6 bg-outline-dark">
        <label for="inputEmail4" class="form-label"style="color:white">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" required>
      </div>
      <div class="col-md-6 bg-outline-dark">
        <label for="inputPassword4" class="form-label"style="color:white">Password</label>
        <input type="password" class="form-control" id="Password" name="password" required>
      </div>
      <div class="col-md-6 bg-outline-dark">
        <label for="inputPassword4" class="form-label"style="color:white">Confirm Password</label>
        <input type="password" class="form-control" id="ConfirmPassword" name="confirmpassword" required>
      </div>
      <script>
        password=document.getElementById(Password);
        confirmpassword=document.getElementById(ConfirmPassword);
        function result(password,confirmpassword){
          if(password!=confirmpassword)
            alert("Password dont match");
          document.getElementById(submitbutton).ariaDisabled;
          if(password==confirmpassword)
            alert("Password match");
        }
        result(password,confirmpassword);
        </script>
      <div class="col-12">
        <label for="inputAddress" class="form-label"style="color:white">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
      </div>
      <div class="col-md-6 bg-outline-dark">
        <label for="inputCity" class="form-label"style="color:white">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" required>
      </div>
      <div class="col-md-4 bg-outline-dark">
        <label for="inputState" class="form-label"style="color:white">Province</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>Alberta</option>
          <option>British Columbia</option>
          <option>Manitoba</option>
          <option>New Brunswick</option>
          <option> Newfoundland and Labrador Northwest Territories</option>
          <option>Nova Scotia</option>
          <option>Nunavut</option>
          <option>Ontario</option>
          <option>Prince Edward Island</option>
          <option>Quebec</option>
          <option>Saskatchewan</option>
          <option>Yukon</option>
        </select>
      </div>
      <div class="col-md-2 bg-outline-dark">
        <label for="inputAreaCode" class="form-label"style="color:white">Area Code</label>
        <input type="text" class="form-control" id="inputZip" name="area_code" required>
      </div>
      <div class="col-12 bg-outline-dark">
        <button type="submit" class="btn btn-primary" id="submitbutton"style="color:white">Sign in</button>
      </div>
    </form>
    </div>
    </div>
    </div>
    <?php 
        require_once './includes/footer.php';
    ?>