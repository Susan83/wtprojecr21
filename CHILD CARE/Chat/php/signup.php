<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $USERNAME = mysqli_real_escape_string($conn, $_POST['username']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $PHONE = mysqli_real_escape_string($conn, $_POST['PHONE']);
    $address="";
    $House_number= mysqli_real_escape_string($conn, $_POST['hn']);
    $Road_number= mysqli_real_escape_string($conn, $_POST['rn']);
    $Area= mysqli_real_escape_string($conn, $_POST['area']);
    $City= mysqli_real_escape_string($conn, $_POST['city']);
    $Country= mysqli_real_escape_string($conn, $_POST['country']);
    function get_data() {
        $file_name='Address'. '.json';
        if(file_exists("$file_name")) { 
            $current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
            $extra=array(
                'username' => $_POST['username'],
                'House_number' => $_POST['hn'],
                'Road_number' =>  $_POST['rn'],
                'Area' => $_POST['area'],
                'City' => $_POST['city'],
                'Country' => $_POST['country'],
            );
            $array_data[]=$extra;
            //echo "file exist<br/>";
            return json_encode($array_data);
        }
        else {
            $datae=array();
            $datae[]=array(
                'username' => $_POST['username'],
                'House_number' => $_POST['hn'],
                'Road_number' =>  $_POST['rn'],
                'Area' => $_POST['area'],
                'City' => $_POST['city'],
                'Country' => $_POST['country'],
            );
            //echo "file not exist<br/>";
            return json_encode($datae);   
        }
    }
    $file_name='Address'. '.json';
    if(file_put_contents("$file_name", get_data())) {
        //echo 'success';
    }                
    else {
        echo 'There is some error';                
    }
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $status = "Active now";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname,USERNAME, email, password, img, status,type,PHONE)
                                VALUES ({$ran_id}, '{$fname}','{$lname}','{$USERNAME}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}','{$type}','{$PHONE}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['img']=$new_img_name;
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        $_SESSION['type'] = $result['type'];
                                        $_SESSION['USERNAME'] = $result['USERNAME'];
                                        $_SESSION['username'] = $result['USERNAME'];
                                        header("Refresh: 0; url= ../../homepage.php");
                                        echo "success";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>