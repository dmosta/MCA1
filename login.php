<?php

    session_start();
    include("connection.php");
    
    if ($_POST['submit']=="Sign Up") {

      if (!$_POST['email']) $error.="<br />Please enter your email";
        else  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="Please enter a valide email address";

      if(!$_POST['password']) $error.= "<br />Please enter your passowrd";
      else {
        if (strlen($_POST['password'])< 6 ) $error.="<br />please enter a password with at least 6 characters";
        if (!preg_match('`[A-Z]`', $_POST['password']))  $error.="<br /> please include at least one capital letter in your password";
      }

      if ($error) echo " <br />There were error(s) in your signup details: " .$error;


      else{

       
        $query = "SELECT * FROM users WHERE email=".mysqli_real_escape_string($link,$_POST['email'])."" ;

        $result=mysqli_query($link, $query);
        //echo  $result= mysqli_num_rows($result);

        if ($result) echo "this email address is already registered. Do you want to log in?";
       

       else{
        $query = "INSERT INTO `users` (`email`, `password`) VALUES (
        '".mysqli_real_escape_string($link, $_POST['email'])."',
        '".md5(md5($_POST['email']).$_POST['password'])."'
        )";

        mysqli_query($link,$query);

        echo"You have been signed up!";


        $_SESSION['id']= mysqli_insert_id($link);

        print_r($_SESSION);
        //redirect to logged in page 



       }
      }



  }






  if ($_POST['submit'] == "Log In") { 
  
    $query = "SELECT * FROM users WHERE 
    email='".mysqli_real_escape_string($link, $_POST['loginemail'])."'
    AND 
    password='" .md5(md5($_POST['loginemail']) .$_POST['loginpassword']). "'
    LIMIT 1";

    $result = mysqli_query($link, $query);
    
    $row = mysqli_fetch_array($result);
    

    if($row){
    
      $_SESSION['id']=$row['id'];
      Print_r($_SESSION);
      //header("Location:mainpage.php"); // redirect to logged in page
    
    } else {
    
      echo "We could not find a user with that email and password. Please try again.";

    }
 
  
  }
  
?>
































