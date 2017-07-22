<?php

    session_start();
    include("connection.php");

  if ($_POST['submit'] == "Sign In") { 
  
    $query = "SELECT * FROM users WHERE 
    email='".mysqli_real_escape_string($link, $_POST['signinemail'])."'
    AND 
    password='" .md5(md5($_POST['signinemail']) .$_POST['signinpassword']). "'
    LIMIT 1";

    $result = mysqli_query($link, $query);
    
    $row = mysqli_fetch_array($result);
    

    if($row){
    
      $_SESSION['id']=$row['id'];
      //Print_r($_SESSION);
      header("Location: mca.php"); // redirect to logged in page
    
    }  else {
    
      $error = "We could not find a user with that email and password. Please try again.";
    
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

        <div class="container">
  
          <h3>Sign In</h3>

          <p>Please enter your McGill email address and MCA password to sign in: </p>


         <?php
       
        if ($error) {
        
          echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
        
        }
        
        if ($message) {
        
          echo '<div class="alert alert-success">'.addslashes($message).'</div>';
        
        }
       
       ?>
 
  <form align="center" method ="post">


    <div class="input-group">
      <input id="email" type="text" class="form-control" name="signinemail" placeholder="Email" value="<?php echo addslashes($_POST['signinemail']); ?>">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
    </div>


    <div class="input-group">
      <input id="password" type="password" class="form-control" name="signinpassword" placeholder="Password" value="<?php echo addslashes($_POST['signinpassword']); ?>">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    </div>

   <br>
   <p align="center"></p>

   <p align="center"> 
   <input type = "submit" name ="submit" value ="Sign In" class="btn btn-primary  custom btn-lg" href="#" > </p>

   <p align="center"> <a  href=join.php class= "btn btn-default custom btn-lg " href="#" role="button">Join</a></p>
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









