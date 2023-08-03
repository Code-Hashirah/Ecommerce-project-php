<?php 
require_once "database.php";
// Start the session
session_start();

// Check if the email session variable is set
if (isset($_SESSION['email'])) {
    // Retrieve the email from the session variable
    $email = $_SESSION['email'];
    $sqlCmd="SELECT * FROM user WHERE email='$email'";
    $selectQuery=$connection->query($sqlCmd);
    
    if($selectQuery->num_rows > 0){
        $result=mysqli_fetch_array($selectQuery);
        echo "WellDone";
        print_r($result['name']);
    }
    // Now you can use the $email variable in dashboard.php as needed
    // For example, you can display it:
  
} 
else {
    // Handle the case when the email variable is not set
    // Maybe redirect the user back to the login page or display an error message.
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
   <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
</head>
<body>
    <section class="row">
        <aside class="col-3 sidenav ">

        </aside>
        <section class="col-9 main">

        </section>
    </section>

    <footer>
      <span class="social"><a href="https://wa.me/09053109638"><i class="fab fa-whatsapp mx-5 text-success" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-twitter text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-linkedin text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-telegram text-info mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-youtube text-danger mx-5" aria-hidden="true"></i></a></span>
        
    </footer>
</body>
</html>