<?php  
require "servers/updateproduct_server.php";
require "includes/header.php"
?>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/product.css">
   <link rel="stylesheet" href="css/footer.css">
   <title>Update Product</title>
</head>
<body >
<div class="container-fluid">
<aside class="col-md-3 sidenav ">
<?php require "includes/nav.php" ?>

</aside>

  <main id="mainbox" class="col-md-9">
  <h2 id="header">Update Products</h2>
   <div class="container-fliud" id="form-box">
   
   
  
        <form action="updateproduct.php" id="main-form" method="post">
            <div>
                <label for="" class="lbl">Item</label>
                <input type="text" class="inputTxt" name="Item" value="<?php echo $response['item'] ?>">
                <p class="text-danger">
                    <?php echo array_key_exists('itemErr',$error)? $error['itemErr']: " " ?>
                </p>
            </div>
            <div>
                <label for="" class="lbl">Price</label>
                <input type="text" class="inputTxt" name="Price" value="<?php echo $response['price'] ?>">
                <p class="text-danger">
                <?php echo array_key_exists('priceErr', $error)? $error['priceErr']: " " ?>
                </p>
            </div>
            <div>
                <label for="" class="lbl">Description</label>
                <input type="text" class="inputTxt" name="Description" value="<?php echo $response['description'] ?>">
                <p class="text-danger">
                    <?php echo array_key_exists('descriptionErr', $error)? $error['descriptionErr'] : " " ?>       
                </p>
            </div>
            <div>
                <label for="" class="lbl">Image link</label>
                <input type="text" class="inputTxt" name="Image" value="<?php echo $response['image'] ?>">
                <p class="text-danger">
                   <?php echo array_key_exists('imageErr', $error)? $error['imageErr']: " " ?> 
                </p>
            </div>
            <div>
                <label for="" class="lbl">Discount</label>
                <input type="number" class="inputTxt" name="Discount" value="<?php echo $response['discount'] ?>">
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
                <button name="Update" type="submit" class="mx-4 btn btn-info">Update Product</button>
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