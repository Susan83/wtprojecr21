
<link rel="stylesheet" href="../css/viewProfile.css">

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
<br><p>
<img class="img-thumnail" src="../../Chat/php/images/<?php echo $_SESSION['img']; ?>" alt="<?php echo $_SESSION['img']; ?>">
  </p>
  <?php
  require_once '../controller/Info.php';

  if(isset($_SESSION['USERNAME']))
  {
  $data = fetch($_SESSION['USERNAME']);


    if($data!=NULL)
    {
      foreach ($data as $i => $student):
          $fname= $student['fname'] ;
           $lname= $student['lname'] ;
           $email=$student['email'];
           $username= $student['USERNAME'];
           $phone= $student['PHONE'] ;
           $image=$student['img'];
      endforeach;
      echo "</div>";
     echo "<div class='profile'>";

      echo "<br /><p>First Name: &nbsp; $fname</p>";
      echo "<p>Last Name: &nbsp; $lname</p>";
      echo "<p>Email: &nbsp;$email</p>";
      //echo "<br /><p>Username: &nbsp;$username</p>";
      echo "<p>Phone: &nbsp;$phone</p><br/>";
      $data = file_get_contents ('../../Chat/php/Address.json');
      $json = json_decode($data, true);
      for($i=0;$i<=100;$i++){
        if($json[$i]['username']==$username){
          foreach ( $json[$i] as $key => $value) {
          if (!is_array($value)) {
              echo '<p>'.$key . ': ' . $value . '</p><br/>';
          } else {
              foreach ($value as $key => $val) {
                  echo '<p><br>'.$key. ': ' . $val . '</p><br/>';
              }
          }
        }break;
      }
    }

      ?>
      <br>
    </div>

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
