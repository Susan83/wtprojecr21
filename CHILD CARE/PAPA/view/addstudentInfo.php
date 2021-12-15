<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Info</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Parent<span>care.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn"><?php
                        session_start();
                        if(isset($_SESSION['username']))
                        {
                            echo $_SESSION['username'];
                        }
                        {
                        echo "";
                        }
                    ?></a></li>
                <li><a href="../view/viewProfile.php" class="menu-btn">View Profile</a></li>
                <li><a href="../../Chat/page1.php" class="menu-btn">COMMUNICATION</a></li>
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#track" class="menu-btn">Trak</a></li>
                <li><a href="#items" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li>
                    <a href="../../Chat/logout.php" class="menu-btn">
                        <?php
                        //session_start();
                        if(isset($_SESSION['username']))
                        {
                        echo "Log Out";
                        }
                        {
                        echo "";
                        }
                    ?>
                    </a>
                </li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">

    </section>
       <body>
           <link rel="stylesheet" href="../../Chat/style.css">
    <section class="form signup">
        <a href="../index.php">Go Back</a>
      <header>Child Info </header>
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
            <option value="child">child</option>
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
  </div>
  <script src="../../Chat/javascript/pass-show-hide.js"></script>
  <script src="../../Chat/javascript/signup.js"></script>


    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">

                        <div class="text"><a href="./view/addstudentInfo.php"> MODARETOR INFO</a></div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">

                        <div class="text">CHILD TRACK</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">

                        <div class="text">PAYMENT</div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    </section>




    <script src="script.js"></script>
</body>

</html>