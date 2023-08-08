<?php 
define("server","127.0.0.1");
define("user","root");
define("database",'ecommercedb');
define("password", '');

// $connection=mysqli_connect(server,user,password,database);
// if(!$connection){
//     echo "Unable to establish connection to databse".mysqli_connect_error($connection);
// }

$connection=new mysqli(server,user,password,database);
if(!$connection){
    echo "Unable to establish connection with database".$connection->connect_error;







    
}
?>