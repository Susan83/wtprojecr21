<?php
session_start();
require_once '../model/model.php';


if (isset($_POST['update']) && isset($_SESSION['username'])) {

  $birthDate = $birthMonth = $birthYear = $name=$fname = $email = $gender = $comment = $website = $birth=$details="";
  $birthErr =$emailErr  = $nameErr =$error= "";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

 if (empty($_POST["lname"])) {
   $nameErr= "Name is required";
   $flag=0;
 } else {

      $name = test_input($_POST["lname"]);

            if(str_word_count($name)<1)
         {
         $nameErr= "Name must contains at least one words ";
          $flag=0;
         }
 }

 if (empty($_POST["fname"])) {
   $nameErr= "Name is required";
   $flag=0;
 } else {

      $fname = test_input($_POST["fname"]);

            if(str_word_count($name)<1)
         {
         $nameErr= "Name must contains at least one words ";
          $flag=0;

         }

 }
  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr= "Invalid email format";
      $flag=0;
    }
  }

 if(empty($_POST["PHONE"]))
  {
    $phoneErr= "Phone Number is required";
    $flag=0;
  }
  else {
    $phone=test_input($_POST["PHONE"]);

    if(!is_numeric($phone))
    {
      $phoneErr= "Number must be numeric";
      $flag=0;
    }
    else {

        $phoneErr= "";
    }
  }


    if(isset($_POST['details']))
    {
      $details=test_input($_POST["details"]);
    }





if($flag==1)
{
  $data['fname']=$fname;
  $data['lname']=$name;
  $data['email']=$email;
  $data['phone']=$phone;
//  $data['details']=$details;


  if (update($_SESSION['username'],$data)) {
    header("location:../view/viewProfile.php");
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'nameErr' => $nameErr,
   'emailErr' => $emailErr,
   'phoneErr' => $phoneErr

);
     header("location:../view/viewProfile.php?" . http_build_query($args));
}


} else {
	echo 'You are not allowed to access this page.';
}


?>

