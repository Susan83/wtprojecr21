<?php

require_once 'db_connect.php';

function showImage($name){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `users` where NAME = '$name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}


function updateProfilePicture($username, $file){
    $conn = db_conn();
    $selectQuery = "UPDATE users set img = '$file' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function showAllDonation(){
    
	 $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="childcare";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
                $sql = "SELECT * From users";
        $result = $conn->query($sql);
        echo "<table class='table table-bordered table-dark'>";
            echo"<tr>";
            echo "<th>ID</th><th>first name</th><th>last name</th><th>Email</th><th>USERNAME</th><th>PHONE</th>";
            echo"</tr>";
            while($row = $result->fetch_assoc()) {
                echo"<tr>";
                echo "<td>".$row["user_id"]."</td>";
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["USERNAME"]."</td>";
                echo "<td>".$row["PHONE"]."</td></tr>";
            }
            echo "</table>";
}

function show($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `users` where USERNAME = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `users` WHERE USERNAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addRegistrationInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into users (NAME, EMAIL,USERNAME,PASSWORD,PHONE,LOCATION)
VALUES (:name, :email, :username, :password, :phone, :location)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
					':username' => $data['username'],
					':password' => $data['password'],
					':location' => $data['location'],
				//	':amount' => $data['amount'],
					':phone' => $data['phone']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}




function update($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE users set fname = ?,lname = ?, email = ?, PHONE = ? where USERNAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['fname'],$data['lname'], $data['email'], $data['phone']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePassword($username, $password){
    $conn = db_conn();
    $encrypt_pass = md5($password);
    $selectQuery = "UPDATE users set PASSWORD = '$encrypt_pass' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

