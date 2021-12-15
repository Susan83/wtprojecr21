<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('Location:../CHILD CARE/');
}
{
  echo "You can not access this page.";
}
?>