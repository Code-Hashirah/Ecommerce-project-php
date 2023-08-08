<?php 
require_once "database.php";
// if(!isset($_SESSION['email'])){
//     header('Location:login.php');
// }
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
        // print_r($result['name']);
        $name=$result['name'];
        $email=$result['email'];
        $image=$result['image'];
    }
  
} 
else {
    echo "No login details found";
}

$sqlCmd2="SELECT * FROM products";
$fetchQuery=mysqli_query($connection,$sqlCmd2);
?>