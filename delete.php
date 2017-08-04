<?php



    $host = 'localhost'; $user = 'root'; 
    $password = 'root';  $name = "MCA"; $port = 8889;

    $link= mysqli_connect($host, $user, $password, $name, $port ); 

   //Define the query
    $query = "DELETE FROM `cppUploads`  WHERE id= {$_GET['id']}" ;

    //sends the query to delete the entry
   if(mysqli_query($link,$query))
        header("refresh:1;url= admin-upload.php");
       //echo "deleted"
    else
    	echo"Not Deleted"; 
         
?>