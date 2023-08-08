<?php 
require_once "database.php";
$error=[];
$user=[];
if(isset($_POST['Register'])){
    // for name 
    if(empty($_POST['Name'])){
        $error['nameErr']="This field is required *";
    }
    else{
        $user['Name']=$_POST['Name'];
    }

      // for email 
    if(empty($_POST['Email'])){
        $error['emailErr']="This field is required *";
    }
    else{
        $user['Email']=$_POST['Email'];
    }

      // for phone 
    if(empty($_POST['Phone'])){
        $error['phoneErr']="This field is required *";
    }
    else{
        $user['Phone']=$_POST['Phone'];
    }

      // for image 
      if(empty($_POST['Image'])){
        $error['imageErr']="This field is required *";
    }
    else{
        $user['Image']=$_POST['Image'];
    }

      // for password 
      if(empty($_POST['Password'])){
        $error['passwordErr']="This field is required *";
    }
    else{
        $user['Password']=$_POST['Password'];
    }

    // for password 
    if(empty($_POST['Confirm_password'])){
        $error['confirm_passwordErr']="This field is required *";
    }
    else{
        $user['confirm_password']=$_POST['Confirm_password'];
    }

     

    // simplifying inputs 
$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$image=$_POST['Image'];
$password=md5($_POST['Password']);
$confirm_password=$_POST['Confirm_password'];
$role="user";

if(count($error)==0){
    // conditional selection 
    $sql = "SELECT email FROM user WHERE email ='$email'";
    $select=mysqli_query($connection,$sql);
    if(mysqli_num_rows($select)==0){
        $sqlcommand="INSERT INTO user(name,email,phone,image,password,role) VALUES('$name','$email','$phone','$image','$password','$role')";
        if(mysqli_query($connection, $sqlcommand)){
            header('Location:login.php');
        }
    }
    else{
        $error['emailErr']="This user already exists!";
    }
   
}
else{
    echo "Unable to save user";
}
}

?>