<?php 
require_once "database.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/login.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/all.min.css">
    <title>Login</title>
</head>
<body id="body">
    <div class="form">
      <h2>Login Form</h2>
      <form action="login.php"  method="post">
        
      <div class="input-box"> <br> 
          <label for="email">Email</label> <br>
          <input  type="email" name="Email" value=" <?php echo array_key_exists('Email', $data)?$data['Email'] :" "?> ">

          <p style="color:red;">
            <?php echo array_key_exists('emailErr', $errors)? $errors['emailErr']:" ";
             echo array_key_exists('loginErr', $errors)? $errors['loginErr']:" ";
            ?>
        </p>
               </div>
    
      <div class="input-box">
      <label for="email">Password</label> <br>
         <input type="password" name="Password" value="">
             <p style="color:red;">
            <?php echo array_key_exists('passwordErr', $errors)? $errors['passwordErr']:" ";
                echo array_key_exists('loginErr', $errors)? $errors['loginErr']:" ";
           ?>
            </p>
      </div>


      <div class='text-btn text-center'>
        <input type="submit" name="Login" value="Login" class="btn btn-success px-5  my-3">
        <button type="reset" class="btn btn-warning   my-3 px-5">Clear</button>
</div>
    </form>
</div>
<script src="css/bootstrap.bundle.min.js"></script>
</body>
</html>