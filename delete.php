<?php
    require_once "database.php";
    $ID=$_POST['id'];
    $sqlCmd="DELETE FROM products  WHERE id='$ID'";
   if($deleteQuery=mysqli_query($connection, $sqlCmd)){
        echo "Deleted";
   } 
   else{
     echo "Something went wrong";
   }
   
?>