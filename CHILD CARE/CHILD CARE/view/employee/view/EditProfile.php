<?php
	session_start();
	if(isset($_SESSION['flag'])){
        $n=$_SESSION['user']['username'];
        $fname = $uname = $email = $phoneNumber =$gender =$address ="";
            $myFile = "../controller/reginfo.txt";
		    $contents = file_get_contents($myFile);
			$contents = explode("\n", $contents);
			foreach($contents as $values){
			$loginInfo = explode("|", $values);
			$user = $loginInfo[0];
            if(trim($user) == $n){
                    /*$fname=$loginInfo[2];
                    $email=$loginInfo[3];
                    $phoneNumber=$loginInfo[4];
                    $gender=$loginInfo[5];*/
                    $address=$loginInfo[6];
                    $education=$loginInfo[7];
                    $field=$loginInfo[8];
				}
                //echo '$_SESSION['user']['username']';
            }
                    $fname=$_SESSION['user']['fname'];
                    $email=$_SESSION['user']['email'];
                    $phoneNumber=$_SESSION['user']['phone'];
                    $gender=$_SESSION['user']['gender'];
					$type=$_SESSION['user']['type'];
                   // $address=$_SESSION['user']['Address'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
   <div>
	<form method="post" action="../controller/profile.php">
		<fieldset>
			<legend>Edit Profile</legend>
			<table>
				<tr>
                        <td>Full Name: </td>
                        <th><?="$fname"?></th>
						<td><input type="text" name="fname"></td>
                    </tr>
				<tr>
					<td>Username</td>
                     <th><?= "$n"?></th>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
                    <th><?=$_SESSION['user']['password']?> </th>
                    <th><a href="./ChangePassword.php">Change Password</a><br></th>
				</tr>
				<tr>
					<td>Email</td>
                    <th><?= "$email"?> </th>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Type</td>
                    <th><?= "$type"?> </th>
                    <th>Type can not be changed</th>
				</tr>
				<tr>
                        <td>Gender </td>
                        <th><?=" $gender"?> </th>
						<th>Gender can not be changed</th>
                    </tr>
					<tr>
                        <td>Address </td>
                        <th><?="$address"?> </th>
						<td><input type="text" name="Address"></td>
                    </tr>
                    <tr>
                        <td>Phone Number </td>
                        <th><?= "$phoneNumber"?></th>
						<td><input type="text" name="phone"></td>
                    </tr>
					<tr>
                        <td>Education </td>
                        <th><?= "$education"?></th>
						
                    </tr>
					<tr>
                        <td>Field </td>
                        <th><?= "$field"?></th>
						
                    </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Edit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    <div class="dashboard">
        <a href="home.php">Home</a> <br>
        <a href="./AccountInfo.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="../controller/logout.php">logout</a> <br>
        <a href="./CV.php">CV</a> <br>
        <a href="./Employees.php">Employees</a> <br>
        <a href="./Account.php">Account</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>