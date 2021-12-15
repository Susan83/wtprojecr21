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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


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
	<div class="container">
		<br />
		<br />
		<br />
		<h2 align="center"></h2><br />
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Search</span>
				<input type="text" name="search_text" id="search_text" placeholder="Search by Student name" class="form-control" />
			</div>
		</div>
		<br />
		<div id="result"></div>
	</div>
	<div style="clear:both"></div>
</div>



</div>

  </body>
</html>





<?php


}
else {
header("location:..");
}
 ?>









<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../model/liveSearchFetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>
