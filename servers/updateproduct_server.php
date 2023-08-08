<?php 
require_once ("database.php");
$ID=$_POST['id'];
$sqlcmd="SELECT * FROM products WHERE id='$ID'";
$selectquery=mysqli_query($connection, $sqlcmd);
 $response=mysqli_fetch_array($selectquery);

 $error=[];
 $product=[];
 if(isset($_POST['Update'])){
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

    }
?>