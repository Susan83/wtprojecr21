<?php



session_start();
require_once '../controller/Info.php';
$data = fetch($_SESSION['USERNAME']);
if($data!=NULL)
{
  foreach ($data as $i => $student):
           $name= $student['lname'] ;
           $email=$student['email'];
           $username= $student['USERNAME'];
           $phone= $student['PHONE'] ;
      // $details=$student['DETAILS'];

  endforeach;

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="../css/editProfile.css">
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

 <div class="w3-container w3-dark-white" style="margin-top:0px">
   <form  class="loginbox" onsubmit="return validation()"action="../controller/update.php" method="POST" enctype="multipart/form-data">
<h2>Edit Profile</h2>
   <br><br><br>
    <label for="name">First Name:</label><br><br>
    <input value="<?php echo $name ?>" type="text" id="name" name="fname" onkeyup="checkName()" onblur="checkName()"><br><br>
    <label for="name">Last Name:</label><br><br>
    <input value="<?php echo $name ?>" type="text" id="name" name="lname" onkeyup="checkName()" onblur="checkName()"><br><br>
    <label for="email">Email:</label><br><br>
    <input value="<?php echo $email ?>" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()"><br><br>
    <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
    <br><label for="email">Phone:</label><br><br>
    <input value="<?php echo $phone ?>" type="text" id="phone" name="PHONE" onkeyup="checkPhone()" onblur="checkPhone()"><br><br>
    <span class="error" id="phoneErr">* <?php if(!empty($_GET['phoneErr'])){echo $_GET['phoneErr'];} ?></span>
    <br><br><br>

 

    <input type="submit" name = "update" value="Update">
  </form>

 </div>


 </div>









</body>
</html>

<?php
require_once "../javascript/editProfile.php";
?>
