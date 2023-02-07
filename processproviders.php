<?php
	

$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "cosmetics_factory";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

        $id =  $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $phone_nb =  $_REQUEST['phone_nb'];
        $address = $_REQUEST['address'];

        $sql = "INSERT INTO providers  VALUES ('$id',
            '$name','$phone_nb','$address')";

        if(mysqli_query($con, $sql)){
            header("Location:table.php");
            exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($cnn);
        }


?>
