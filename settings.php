<?php

    session_start();
    $_SESSION['id'] = '35';

    $host = 'localhost'; $user = 'root'; 
    $password = 'root';  $name = "MCA"; $port = 8889;

    $link= mysqli_connect($host, $user, $password, $name, $port ); 

    if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['faculty'], $_POST['year'])){
     
    //Define the query
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $faculty = $_POST['faculty'];
      $year = $_POST['year'];


         
      $query = "UPDATE `users` SET `firstname`= '$firstname', `lastname`= '$lastname',`year`= '$year', `faculty` = '$faculty', `email`= '$email' WHERE `id`=".$_SESSION['id'];
         
      $update = mysqli_query($link,$query);
        if ($update ===true){
          echo 'Settings have been updated.';
        }
        else if($update ===fals){
          echo 'There was an erroe updating your settings.';
       }


  

   }


  ?>



    