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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/register.css">
   <link rel="stylesheet" href="css/footer.css">
   <title>Register</title>
</head>
<body>

    <header>
        
    </header>

  <main id="mainbox">
  
   <div class="container-fliud" id="form-box">
   
        <form action="register.php" id="main-form" onload="first()" method="post" >
           <div class="row">
           <h5 class="text-light text-center">Registration Form</h5>
    <hr class="text-white">
            <section class="col-4" id="sidecol4" >
                <div class="general-div">
                    <div class="txt-div">
                        <p>Your Name</p>
                        <p>Input name here..</p>
                    </div>
                    <div>
                        <button type="button" onclick="nextStep(1)"><i class="fas fa-user-circle" aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class="general-div">
                    <div class="txt-div">
                        <p>Your Email</p>
                        <p>Input email here..</p>
                    </div>
                    <div>
                        <button type="button" onclick="nextStep(2)"><i class="fas fa-envelope" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="general-div">
                    <div class="txt-div">
                        <p>Your Phone</p>
                        <p>Input pnone number here..</p>
                    </div>
                    <div>
                        <button type="button" onclick="nextStep(3)"><i class="fas fa-phone" aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class="general-div">
                    <div class="txt-div">
                        <p>Your image</p>
                        <p>Input image link</p>
                    </div>
                    <div class="txt-div">
                        <button type="button" onclick="nextStep(4)"><i class="fas fa-image" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="general-div">
                    <div class="txt-div">
                        <p>Your Password</p>
                        <p>Input your password</p>
                    </div>
                    <div class="txt-div">
                        <button type="button" onclick="nextStep(5)"><i class="fas fa-lock" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="general-div">
                    <div class="txt-div">
                        <p>Confirm Password</p>
                        <p>Re-enter your password</p>
                    </div>
                    <div class="txt-div">
                        <button type="button" onclick="nextStep(6)"><i class="fas fa-lock" aria-hidden="true"></i></button>
                    </div>
                </div>

            </section>
            <section class="col-8 sidecol8">
            <section class="form-step" id="step1">
                <label for="" class="lbl">Your name</label> <br>
                <input type="text" class="inputTxt" name="Name">
                <p class="text-danger">
                    <?php echo array_key_exists('nameErr',$error)? $error['nameErr']: " " ?>
                </p>
                <button class="mx-4 btn btn-success" onclick="nextStep(2)">Next</button>
            </section>
            <section class="form-step" id="step2">
                <label for="" class="lbl">Your email</label> <br>
                <input type="text" class="inputTxt" name="Email">
                <p class="text-danger">
                <?php echo array_key_exists('emailErr', $error)? $error['emailErr']: " " ?>
                </p>
                <button type="button" class="btn btn-warning" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-success" onclick="nextStep(3)">Next</button>
            </section>
            <section class="form-step" id="step2">
                <label for="" class="lbl">Your phone number</label>
                <input type="text" class="inputTxt" name="Phone">
                <p class="text-danger">
                    <?php echo array_key_exists('phoneErr', $error)? $error['phoneErr'] : " " ?>       
                </p>
                <button type="button" class="btn btn-warning" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-success" onclick="nextStep(4)">Next</button>
            </section>
            <section class="form-step" id="step4">
                <label for="" class="lbl">Image link</label>
                <input type="text" class="inputTxt" name="Image">
                <p class="text-danger">
                   <?php echo array_key_exists('imageErr', $error)? $error['imageErr']: " " ?> 
                </p>
                <button type="button" class="btn btn-warning" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-success" onclick="nextStep(5)">Next</button>
            </section>
            <section class="form-step" id="step5">
                <label for="" class="lbl">Your password</label>
                <input type="password" class="inputTxt" name="Password">
                <p class="text-danger">
                <?php echo array_key_exists('passwordErr',$error)? $error['passwordErr']:" " ?>    
                </p>
                <button type="button" class="btn btn-warning" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-success" onclick="nextStep(6)">Next</button>
            </section>
            <section class="form-step" id="step6">
                <label for="" class="lbl">Please Confirm Password</label>
                <input type="password" class="inputTxt" name="Confirm_password">
                <p class="text-danger">
                <?php echo array_key_exists('confirm_passwordErr',$error)? $error['confirm_passwordErr']:" " ?>    
                </p>
                <button type="button" class="btn btn-warning mx-4" onclick="prevStep()">Previous</button>
                <button name="Register" type="submit" class="mx-4 btn btn-info">Register</button>
            </section>
           <section class="form-step" id="step1">

           </section>
            <div>
              
                <!-- <button type="reset" class="mx-auto btn btn-warning">Clear</button> -->
            </div>
            </section>
           </div>
        </form>
   </div> 
  </main>

  <footer>
      <span class="social"><a href="https://wa.me/09053109638"><i class="fab fa-whatsapp mx-5 text-success" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-twitter text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-linkedin text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-telegram text-info mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-youtube text-danger mx-5" aria-hidden="true"></i></a></span>
        <small class="text-success mx-5 mx-5"><i class="fas fa-copyright  mx-5 mx-5" aria-hidden="true">code-hashirah</i></small>
    </footer>
<!-- botstrap javascript  -->
<script src="form.js"></script>
<script src="css/boostrap.bundle.min.js"></script>
</body>
</html>