
<link rel="stylesheet" href="../css/viewProfile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript">



  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../controller/getDetails.php?q="+str, true);
    xhttp.send();
}

</script>








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

<div class="w3-container w3-dark-white" style="margin:50px">

<h3 style="text-align: center;">All Users</h3>
<hr>  <?php

  require_once '../controller/Info.php';

  if(isset($_SESSION['USERNAME']))
  {
  $data = fetchAllDonations();


    if($data!=NULL)
    {
        
      ?>
       </div>
      <?php


    }
  }

  else {
    echo "You cannot access this page!!!!!!!!!!!!";
  }
   ?>

</div>



</div>



  </body>
</html>





<?php


}
else {
header("location:../");
}
 ?>
