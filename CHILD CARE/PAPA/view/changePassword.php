<!DOCTYPE html>
<?php
require_once "../javascript/changePassword.php";
?>




<?php
session_start();

if(isset($_SESSION['USERNAME']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>

    <ul>
      <li style="float:left"><a href="#"> CHILD CARE</a></li>
    </ul>

   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
     <a href="../../Chat/users.php" class="w3-bar-item w3-button">Dashboard</a><br>
     <a href="../../Chat/page1.php" class="w3-bar-item w3-button">Chat Box</a><br>
     <a href="liveSearch.php" class="w3-bar-item w3-button">Search</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="showall.php" class="w3-bar-item w3-button w3-hover-red">View Info</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../Controller/changePassword.php">
    <br>
      <h2>Change Password</h2>
      <br><br /><br><br />
      Current Password: <input type="text" name="cpassword" id="cpassword" onkeyup="checkCurrentpassword()" onblur="checkCurrentpassword()"><br><br>
      <?php if(!empty($_GET['currentPasswordErr'])){echo $_GET['currentPasswordErr'];} ?>
      <br><br>
      <span >New Password:</span>
      <input type="text" name="npassword" id="npassword" onkeyup="checkNewpassword()" onblur="checkNewpassword()" ><br><br>
      <span class="error" id="newPasswordErr">* <?php if(!empty($_GET['newPasswordErr'])){echo $_GET['newPasswordErr'];} ?></span>

      <br><br>
      <span >Retype New Password:</span>
      <input type="text" name="rnpassword" id="rnpassword" onkeyup="checkRetypepassword()" onblur="checkRetypepassword()"><br><br>
      <span class="error" id="retypePasswordErr">* <?php if(!empty($_GET['retypePasswordErr'])){echo $_GET['retypePasswordErr'];} ?></span>

      <br><br><br><br>
      <input type="submit" name="submit" value="Submit">
      <br><br>


  </form>
</div>



</div>



  </body>
</html>





<?php
//include("../Model/foot.php");

}
else {
header("location:../view/login.php");
}
 ?>
