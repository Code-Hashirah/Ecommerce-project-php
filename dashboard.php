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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/dashboard.css">
    <title><?php echo $name ?> Dashboard</title>
</head>
<body>
    <section class="row">

        <aside class="col-3 sidenav ">
        <i class="fa fa-dashboard" aria-hidden="true"></i>
        <ul>
            <li><a class="links" href=""><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
            <li><a class="links" href="index.php"><i class="fa fa-cart-plus" aria-hidden="true"></i>Orders</a></li>
            <li><a class="links" href=""><i class="fa fa-pie-chart" aria-hidden="true"></i>Statistics</a></li>
            <li><a class="links" href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i>Product</a></li>
            <li><a class="links" href=""><i class="fa fa-user-times" aria-hidden="true"></i>Logout</a></li>
        </ul>

        </aside>
        <section class="col-9 main">
            <section class="top-details">
                 <div>
                <h2 style="text-align:center;"><?php echo $name. "'s  Dashboard" ?></h2>
                 </div>
                <div class="side-details">
                    <i class="fas fa-bell" aria-hidden="true"></i>
                    <form>
                        <label for="gsearch">Search Google:</label>
                        <input type="search" id="gsearch" name="search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <img src="<?php echo $image  ?>" alt="profile pic" width="50px" height="50px">
                 </div>
            </section>
           <section class="dashboard-info">
                <div>
                    <h2>Products</h2>
                </div>
                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
        <div class="row  align-items-center g-2">
       <?php 
       while($response=mysqli_fetch_array($fetchQuery)){
        ?>
     <div class="col-4">
            <div class="card" >
              <img src="<?php echo $response['image'] ?>" class="card-img-top" alt="image" width="200px" height="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $response['item'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted ">₦ <?php echo $response['price'] ?></h6>
                <p class="card-text"><?php echo $response['description'] ?></p>
                <p class="card-text">%<?php echo $response['discount'] ?></p>
                <p class="card-text"><?php echo $response['category'] ?></p>
              </div>
            </div>
        </div>

   <?php
       };
       ?>
       
           
        </div>
    </div>
           </section>
           
        </section>
    </section>

    <footer>
      <span class="social"><a href="https://wa.me/09053109638"><i class="fab fa-whatsapp mx-5 text-success" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-twitter text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-linkedin text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-telegram text-info mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-youtube text-danger mx-5" aria-hidden="true"></i></a></span>
        
    </footer>

    <script>

    </script>
</body>
</html>