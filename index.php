<?php 
require_once ("database.php");
$sqlcmd="SELECT * FROM products";
$selectquery=mysqli_query($connection, $sqlcmd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/footer.css">
   <title>Lotus Stores</title>
</head>
<body>
    <header>
        <section id="relative">
            <div id="absolute">
                <span class="firstL">L</span><span class="last">otus</span>
                <span class="firstL">S</span><span class="last">tores</span>
                <h2 class="he2">ONLINE STORE</h2>
                <p class="advert">Premium Discount on Bulk Purchase</p>
            </div>
            <div>
                <i class="fa fa-cart-arrow-down fa-fade text-white mx-4" aria-hidden="true"></i>
           <i class="fa fa-phone fa-fade text-white mx-4" aria-hidden="true"></i>
           <i class="fab fa-amazon fa-fade text-white mx-4" aria-hidden="true"></i>
           <i class="fab fa-reddit-alien fa-fade text-white mx-4" aria-hidden="true"></i>
        <i class="fab fa-whatsapp fa-fade text-white mx-4" aria-hidden="true"></i>
        <i class="fab fa-twitter fa-fade text-white mx-4" aria-hidden="true"></i>
        <i class="fab fa-facebook fa-fade text-white mx-4" aria-hidden="true"></i>
        </div>
        <div id="absolute2"><i class="fa fa-cart-plus fa-bounce text-white" id="big-Cart" aria-hidden="true"></i></div>
        </section>
    </header>
    <main id="main">
    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
        <div class="row  align-items-center g-2">
       <?php 
       while($response=mysqli_fetch_array($selectquery)){
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
    </main>
    <footer>
      <span class="social"><a href="https://wa.me/09053109638"><i class="fab fa-whatsapp mx-5 text-success" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-twitter text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-linkedin text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-telegram text-info mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-youtube text-danger mx-5" aria-hidden="true"></i></a></span>
        
    </footer>
    <!-- botstrap javascript  -->
<!-- <script src="css/boostrap.bundle.min.js"></script> -->
</body>
</html>