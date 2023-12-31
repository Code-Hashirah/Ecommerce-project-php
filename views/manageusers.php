<?php
    include_once "database.php";
    $sqlcmd="SELECT * FROM users";
    $selectquery=mysqli_query($connection, $sqlcmd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/footer.css">
   <!-- <link rel="stylesheet" href="css/dashboard.cs -->
    <title>Admin::Manage Users</title>
</head>
<body>
    <div class="container-fluid">
   <section class="row">
   <aside class="col-md-3 sidenav ">
<?php require "nav.php" ?>

</aside>
    <main class="col-md-9">
       
            <div class="table-responsive-sm">
                <table class="table table-danger border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>IMAGE</th>
                            <th>ADDRESS</th>
                            <th>STATUS</th>
                            <th>ROLE</th>
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
                            <td><?php echo $result['name'] ?></td>
                            <td>₦<?php echo $result['email'] ?></td>
                            <td><?php echo $result['status'] ?></td>
                            <td><p><?php echo $result['phone'] ?></p></td>
                            <td> <img src="<?php echo $result['image'] ?>" alt="image" width="150px" height="150px" ></td>
                            <td><?php echo $result['address'] ?>%</td>
                            <td><?php echo $result['role'] ?></td>
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

            <footer>
    <span class="social"><a href="https://wa.me/09053109638"><i class="fab fa-whatsapp mx-5 text-success" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-twitter text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-linkedin text-primary mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-telegram text-info mx-5" aria-hidden="true"></i></a></span>
      <span class="social"><a href="https://"><i class="fab fa-youtube text-danger mx-5" aria-hidden="true"></i></a></span>
    </footer>
            
    </main>
   </section>
  
    </div>
    
    <!-- botstrap javascript  -->
<!-- <script src="css/boostrap.bundle.min.js"></script> -->
</body>
</html>