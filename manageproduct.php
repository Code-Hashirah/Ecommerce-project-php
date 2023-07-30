<?php
    include_once "database.php";
    $sqlcmd="SELECT * FROM products";
    $selectquery=mysqli_query($connection, $sqlcmd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/footer.css">
    <title>Manage Products</title>
</head>
<body>
    <header>
    <section id="relative">
            <div id="absolute">
                <span class="firstL">L</span><span class="last">otus</span>
                <span class="firstL">S</span><span class="last">tores</span>
                <h2 class="he2">ONLINE STORE</h2>
                <p class="advert">Admin Page</p>
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
        <h3>
           Note: The <i class="fa fa-remove text-danger" aria-hidden="true"></i> will delete the item from database 
        </h3>
        <h3>
            Note:The <i class="fa fa-upload text-warning" aria-hidden="true"></i> will allow you to update the item in the database
        </h3>   
    </section>
    </header>
    <main>
       
            <div class="table-responsive-sm">
                <table class="table table-danger border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ITEM</th>
                            <th>PRICE</th>
                            <th>DESCRIPTION</th>
                            <th>IMAGE</th>
                            <th>DISCOUNT</th>
                            <th>CATEGORY</th>
                            <th>DATE ADDED</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    while($result=mysqli_fetch_array($selectquery)){
                        ?>
                           <tr class="">
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['item'] ?></td>
                            <td>₦<?php echo $result['price'] ?></td>
                            <td><p><?php echo $result['description'] ?></p></td>
                            <td> <img src="<?php echo $result['image'] ?>" alt="image" width="150px" height="150px" ></td>
                            <td><?php echo $result['discount'] ?>%</td>
                            <td><?php echo $result['category'] ?></td>
                            <td><?php echo $result['date_added'] ?></td>
                            <td>
                               <div>
                                <form action="updateproduct.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                                        <button type="submit" name="Update" class="btn btn-outline-warning"><i class="fa fa-upload text-warning" aria-hidden="true"></i></button>
                                </form>
                               </div>
                                <div>
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                                        <button type="submit" name="Delete" class="btn btn-outline-danger"><i class="fa fa-remove" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

              <?php      }
                    ?>

                     
                     
                    </tbody>
                </table>
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
<script src="css/boostrap.bundle.min.js"></script>
</body>
</html>