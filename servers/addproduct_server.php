<?php 
require_once "database.php";
$category=[];
$error=[];
$product=[];
if(isset($_POST['Add'])){
    // for item 
    if(empty($_POST['Item'])){
        $error['itemErr']="This field is required *";
    }
    else{
        $product['Item']=$_POST['Item'];
    }

      // for Price 
    if(empty($_POST['Price'])){
        $error['priceErr']="This field is required *";
    }
    else{
        $product['Price']=$_POST['Price'];
    }

      // for Description 
    if(empty($_POST['Description'])){
        $error['descriptionErr']="This field is required *";
    }
    else{
        $product['Description']=$_POST['Description'];
    }

      // for Description 
      if(empty($_POST['Image'])){
        $error['imageErr']="This field is required *";
    }
    else{
        $product['Image']=$_POST['Image'];
    }

      // for Discount 
      if(empty($_POST['Discount'])){
        $error['discountErr']="This field is required *";
    }
    else{
        $product['Discount']=$_POST['Discount'];
    }

      // for Category 
      if(empty($_POST['Category'])){
        $error['categoryErr']="This field is required *";
    }
    else{
        $product['Category']=$_POST['Category'];
    }

    // simplifying inputs 
$item=$_POST['Item'];
$price=$_POST['Price'];
$description=$_POST['Description'];
$image=$_POST['Image'];
$discount=$_POST['Discount'];
$category=implode(" ",$_POST['Category']);

if(count($error)==0){
    $sqlcommand="INSERT INTO products(item,price,description,image,discount,category) VALUES('$item','$price','$description','$image','$discount','$category')";
    if(mysqli_query($connection, $sqlcommand)){
        echo "Product saved successfully";
    }
}
else{
    echo "Unable to save product";
}
}

?>