<?php 
require_once "database.php";
if(isset($_SESSION['email'])){
    header('Location:dashboard.php');
}
$errors=[];
$data=[];
if(isset($_POST['Login'])){
if(empty($_POST['Email'])){
    $errors['emailErr']="Your Email is Required";
}
else{
    $data['Email']=$_POST['Email'];
}
if(empty($_POST['Password'])){
    $errors['passwordErr']="Password is Required";
}
else{
    $data['Password']=$_POST['Password'];
}

//simplifying my inputs
$email=$_POST['Email'];
$password=md5($_POST['Password']);
// Interacting with the database
if(count($errors)==0){
    $sqlCmd="SELECT * FROM user WHERE email= '$email'";
    $select=$connection->query($sqlCmd);
    
    if($select->num_rows >0){
        $result=$select->fetch_assoc();
        if(strcmp($password, $result['password'])==0){
            // Start a session
        session_start();

        // Store the email value in a session variable
        $_SESSION['email'] = $email;
            header('Location:dashboard.php?');
        } 
        else{
            $errors['loginErr']="Username, Email or Password not correct!";
        }
    }
    else{
        $errors['loginErr']="Username, Email or Password not correct!";
    }
}
}
?>