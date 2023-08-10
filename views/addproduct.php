<?php require "../servers/addproduct_server.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/all.min.css">
   <link rel="stylesheet" href="../css/product.css">
   <link rel="stylesheet" href="../css/footer.css">
   <title>Add Product</title>
</head>
<body class="container-fliud">

<div class="row">
<aside class="col-md-3 sidenav ">
<?php require "../includes/nav.php" ?>

</aside>

  <main id="mainbox" class="col-md-9">
  <h2 id="header">Add Products</h2>
   <div class="" id="form-box">
        <form action="addproduct.php" id="main-form" method="post">
            <div>
                <label for="" class="lbl">Item</label>
                <input type="text" class="inputTxt" name="Item">
                <p class="text-danger">
                    <?php echo array_key_exists('itemErr',$error)? $error['itemErr']: " " ?>
                </p>
            </div>
            <div>
                <label for="" class="lbl">Price</label>
                <input type="text" class="inputTxt" name="Price">
                <p class="text-danger">
                <?php echo array_key_exists('priceErr', $error)? $error['priceErr']: " " ?>
                </p>
            </div>
            <div>
                <label for="" class="lbl">Description</label>
                <input type="text" class="inputTxt" name="Description">
                <p class="text-danger">
                    <?php echo array_key_exists('descriptionErr', $error)? $error['descriptionErr'] : " " ?>       
                </p>
            </div>
            <div>
                <label for="" class="lbl">Image link</label>
                <input type="text" class="inputTxt" name="Image">
                <p class="text-danger">
                   <?php echo array_key_exists('imageErr', $error)? $error['imageErr']: " " ?> 
                </p>
            </div>
            <div>
                <label for="" class="lbl">Discount</label>
                <input type="number" class="inputTxt" name="Discount">
                <p class="text-danger">
                <?php echo array_key_exists('discountErr',$error)? $error['discountErr']:" " ?>    
                </p>
            </div>
            <div>
                <label for="" class="lbl">Category</label> <br>
              <span class="span">Electronics</span>  <input type="checkbox" class="inputChk" name="Category[]" value="Electronics">
              <span class="span">Accessories</span> <input type="checkbox"checked class="inputChk" name="Category[]" value="Accessories">
              <span class="span">Wears</span>    <input type="checkbox" class="inputChk" name="Category[]" value="Wears">
              <span class="span">Food</span>   <input type="checkbox" class="inputChk" name="Category[]" value="Food">
              <span class="span">Smart Phone</span>   <input type="checkbox" class="inputChk" name="Category[]" value="Smart Phone">
              <span class="span">Computer</span>   <input type="checkbox" class="inputChk" name="Category[]" value="Computer">
              <p class="text-danger">
                <?php echo array_key_exists('categoryErr',$error)? $error['categoryErr'] : " " ?>
                    </p>
            </div>
            <div>
                <button name="Add" type="submit" class="mx-4 btn btn-info">Add Product</button>
                <button type="reset" class="mx-auto btn btn-warning">Clear</button>
            </div>
        </form>
   </div> 
  </main>
</div>

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