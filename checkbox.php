<?php

    $host = 'localhost'; $user = 'root'; 
    $password = 'root';  $name = "MCA"; $port = 8889;

    $link= mysqli_connect($host, $user, $password, $name, $port ); 

   //Define the query
    //$query = "UPDATE `cppUploads`  SET checkbox= not-checked  WHERE id= {$_GET['id']}" ;

    //sends the query to delete the entry
   //if(mysqli_query($link,$query))
        //header("refresh:1;url= cppnotes.php");
       //echo "deleted"
    //else
    	//echo"Not Updated"; 

  

       
      if (isset($_POST['id'])){
          $id = $_POST['id'];
          $query = "UPDATE `cppUploads`  SET `checkbox`= 'checked' WHERE `id`=  '$id' ";  
          $update = mysqli_query($link,$query);

      }


 

   if (isset($_POST['id2'])){
      $id2 = $_POST['id2'];
      $query = "UPDATE `cppUploads`  SET `checkbox`= 'not-checked' WHERE `id`=  '$id2' ";  
      $update = mysqli_query($link,$query);

   }




         
?>

















