<?php require "../servers/dashboard_server.php" ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/nav.css">
   <link rel="stylesheet" href="css/dashboard.css">
    <title><?php echo $name ?> Dashboard</title>
</head>
<body>
    <div class="container-fluid">
    <section class="row ">

<aside class="col-md-3 sidenav ">
<?php require "../includes/nav.php" ?>

</aside>
<section class="col-md-9 main ">
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

    </div>
    
    <script>

    </script>
</body>
</html>