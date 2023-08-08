
<?php require "../includes/login_servr.php";
 require "../servers/auth/login_server.php" ?>
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