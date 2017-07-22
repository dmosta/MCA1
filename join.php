<?php

    session_start();
    include("connection.php");
    
    if ($_POST['submit']=="Sign Up") {

      if (!$_POST['firstname'])  $error.="<br />Please enter your first name";

      if (!$_POST['lastname']) $error.="<br />Please enter your last name";


      if (!$_POST['email']) $error.="<br />Please enter your email";

        else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valide email address";

      if(!$_POST['password']) $error.= "<br />Please enter your passowrd";

      else {
        if (strlen($_POST['password'])< 6 ) $error.="<br />please enter a password with at least 6 characters";
        if (!preg_match('`[A-Z]`', $_POST['password']))  $error.="<br /> please include at least one capital letter in your password";
      }

      
      if (!$_POST['year']) $error.="<br />Please enter your year";

      if (!$_POST['faculty']) $error.="<br />Please enter your Faculty/ Program";

      if (!$_POST['hear']) $error.="<br />How did you hear about us?";

      if ($error) $error = "There were error(s) in your sign up details:".$error;

      else{

       $query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";

        $result=mysqli_query($link, $query);
        $result= mysqli_num_rows($result);

        if ($result) $error = "That email is already registered. Do you want to log in?";
     

         else{
           $query = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`, `year`, `faculty`,`hear`) VALUES (
               '".mysqli_real_escape_string($link, $_POST['firstname'])."',
               '".mysqli_real_escape_string($link, $_POST['lastname'])."',
               '".mysqli_real_escape_string($link, $_POST['email'])."',
               '".md5(md5($_POST['email']).$_POST['password'])."',
               '".mysqli_real_escape_string($link, $_POST['year'])."',
               '".mysqli_real_escape_string($link, $_POST['faculty'])."',
               '".mysqli_real_escape_string($link, $_POST['hear'])."'
             )";

            mysqli_query($link,$query);

            $message.="<br /> You have been signed up!";
            $_SESSION['id']= mysqli_insert_id($link);

           }
       
      }


  }

  ?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <script src="https://www.w3schools.com/lib/w3.js"></script>
   


  </head>



  <body>
    
           

       <!-- Nav bar//-->

       <div w3-include-html="template/nav.html"></div> 
       <div class="jumbotron">
    

      <div class="container" >
        
        <h2>Join</h2>
        <p>  Interested In Joining MCA? Sign UP Below! </p>
          

        <?php
       
        if ($error) {
        
          echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
        
        }
        
        if ($message) {
        
          echo '<div class="alert alert-success">'.addslashes($message).'</div>';
        
        }
       
       ?>
   
        <form class="form-horizontal" method="post">

           <div class="form-group" >
           <div class="col-xs-6">
             <label for="firstname">First Name:</label>
             <input type="text" name="firstname" class="form-control" placeholder="Enter your first name" value="<? echo addslashes($_POST['firstname']);?>">
           </div>
           </div>
   

          <div class="form-group">
          <div class="col-xs-6">
             <label for="lastname">Last Name:</label>
             <input type="text" name="lastname" class="form-control"  placeholder="Enter your last name" value="<? echo addslashes($_POST['lastname']); ?>">
           </div>
           </div>
  
          <div class="form-group">
          <div class="col-xs-6">
             <label for="email">Email:</label>
             <input type="email" name="email" class="form-control" placeholder="Enter email" value="<? echo addslashes($_POST['email']); ?>" >
          </div>
           </div>
   

          <div class="form-group">
          <div class="col-xs-6">
             <label for="password">Password:</label>
             <input type="password" name="password" class="form-control" placeholder="Enter password" value="<? echo addslashes($_POST['password']); ?>" >
             </div>
           </div>



          <div class="form-group">
          <div class="col-xs-6">
            <label for="sel2">Year:</label>
            <select multiple class="form-control" name="year">
            <option value="U1">U1</option>
            <option value="U2">U2</option>
            <option value="U3">U3</option>
            <option value="U4">U4</option>
            <option value="Other">Other</option>
            </select>
            </div>
          </div>

          <div class="form-group">
          <div class="col-xs-6">
            <label for="sel2">Faculty/ Program:</label>
            <select multiple class="form-control" name="faculty">
            <option value="Engineering">Engineering</option>
            <option value="Science">Science</option>
            <option value="Management">Management</option>
            <option value="Other">Other</option>
            </select>
            </div>
          </div>

          <div class="form-group" >
          <div class="col-xs-6">
            <label for="sel2">How did you hear about us?</label>
            <select multiple class="form-control" name="hear">
            <option value="Friend">Friend</option>
            <option value="Facebook">Facebook</option>
            <option value="MUS Events">MUS Events</option>
            <option value="Other">Other</option>
            </select>
            </div>
          </div>
           
          <input type="submit" name="submit" value="Sign Up" class="btn btn-default"/> 


         </form>


      </div>



    </div>





         <!-- Footer//-->

      <div w3-include-html="template/footer.html"></div> 



          <script>
              w3.includeHTML();
          </script>

  </body>


</html>
































