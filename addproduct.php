<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/product.css">
    <title>Add Product</title>
</head>
<body>
    <h2 id="header">Add Products</h2>
   <div class="container-fliud" id="form-box">
        <form action="addproduct.php" id="main-form" method="post">
            <div>
                <label for="" class="lbl">Item</label>
                <input type="text" class="inputTxt" name="Item">
            </div>
            <div>
                <label for="" class="lbl">Price</label>
                <input type="text" class="inputTxt" name="Price">
            </div>
            <div>
                <label for="" class="lbl">Description</label>
                <input type="text" class="inputTxt" name="Description">
            </div>
            <div>
                <label for="" class="lbl">Image link</label>
                <input type="text" class="inputTxt" name="Image">
            </div>
            <div>
                <label for="" class="lbl">Discount</label>
                <input type="text" class="inputTxt" name="Discount">
            </div>
            <div>
                <label for="" class="lbl">Category</label> <br>
              <span class="span">Electronics</span>  <input type="checkbox" class="inputChk" name="Category" value="Electronics">
              <span class="span">Accessories</span> <input type="checkbox" class="inputChk" name="Category" value="Accessories">
              <span class="span">Wears</span>    <input type="checkbox" class="inputChk" name="Category" value="Wears">
              <span class="span">Food</span>   <input type="checkbox" class="inputChk" name="Category" value="Food">
            </div>
            <div>
                <button name="Add" type="submit" class="btn btn-outline-success">Add Product</button>
            </div>
        </form>
   </div> 
<!-- botstrap javascript  -->
<script src="css/boostrap.bundle.min.js"></script>
</body>
</html>