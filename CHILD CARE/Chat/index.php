<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Register </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Username</label>
          <input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter Username">
        <span class="error" id="usernameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Phone:</label>
          <input type="text" onkeypress="checkPhone()" onblur="checkPhone()" name="PHONE" id="phone" placeholder="Enter phone number">
        <span class="error" id="phoneErr">* <?php if(!empty($_GET['phoneErr'])){echo $_GET['phoneErr'];} ?></span>
          </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
            <legend>Address</legend>
            <label>House Number:</label>
            <input type="text" name="hn" placeholder="House Number" id="hn" required>
            <label>Road:</label>
            <input type="text" name="rn" placeholder="Road Number" id="rn"  required>
            <label>Area:</label>
            <input type="text" name="area" placeholder="Area" id="area" required>
            <label>City:</label>
            <input type="text" name="city" placeholder="city" id="city" required>
            <label>Country:</label>
            <input type="text" name="country" placeholder="country" id="country" required>
          </div>
        <div class="field input">
          <label>Registration As:</label>
          <select name="type" id="type">
            <option value="Parent">Parent</option>
            <option value="Employee">Employee</option>
          </select>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Register" class="btn btn-primary">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

