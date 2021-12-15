<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<body>
  <div class="dash">  <?php 
    if($_SESSION['type']=="Parent"){
      header("Refresh: 0; url= ../PAPA/");
    }
    elseif($_SESSION['type']=="Employee"){
      header("Refresh: 0; url=../CHILD CARE/view/employee/index.php");
    }
    elseif($_SESSION['type']=="Admin"){
      header("Refresh: 0; url=../CHILD CARE/view/admin/index.php");
    }
    else{
      header("Refresh: 0; url= page1.php");
    }
  ?>
  </div>
</body>
</html>
