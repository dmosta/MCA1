<?php

    session_start();
    $_SESSION['user_id'] = '35';

    $host = 'localhost'; $user = 'root'; 
    $password = 'root';  $name = "MCA"; $port = 8889;

    $link= mysqli_connect($host, $user, $password, $name, $port ); 
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
  <link rel ="stylesheet"  type ="text/css" href="jquery-ui.css" >



    <style>
    
          body{
            font-size: 12px;
          }
          #pb{
            width:400px;
          }
          .progress{
            width:40%;


          }
          .right{
            position: absolute;
            right: 0px;
            margin-right: 50px;
          }

          
          table, th, td {
            border: 0px ;
            text-align: center;
        }
        .container {
              width: 500px;
              clear: both;
              margin-top: 20px;
              margin-bottom: 40px;

          }
          .container input{
              width: 100%;
              clear: both;
          }

           .container input[type="button"] {
              width: 15%;
              clear: both;
          }



    </style>



  </head>

   <body>
    
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header"> 
        </div>
      </div>
    </nav>
    <div class="well_mca "></div>




       <?php

          $query = "SELECT *  FROM `users` WHERE `id`=".$_SESSION['id'];
          $result_set=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result_set)

        ?>

    <div class="container">
      

      <h2>Profile</h2>
      <p> <strong>First Name: </strong> <?php echo $row['firstname'] ?>  <button id = "1" class="glyphicon glyphicon-edit"></button><input id="firstname" style="display: none" value ='<?php echo $row['firstname'] ?>'type="text"/></p> 

      <p> <strong> Last Name: </strong> <?php echo $row['lastname'] ?> <button id = "2" class="glyphicon glyphicon-edit"></button> <input id="lastname" style="display: none" value ='<?php echo $row['lastname'] ?>' type="text" /> </p> 
        
      <p> <strong> Email: </strong> <?php echo $row['email'] ?> <button  id = "3" class="glyphicon glyphicon-edit"></button><input id="email"  style="display: none" value ='<?php echo $row['email'] ?>' type="text" /> </p> 
        
      <p> <strong> Faculty: </strong> <?php echo $row['faculty'] ?> <button id = "4" class="glyphicon glyphicon-edit"></button><input id="faculty"  style="display: none" value ='<?php echo $row['faculty'] ?>' type="text" /> </p>
       
      <p> <strong> Year: </strong> <?php echo $row['year'] ?> <button id = "5"  class="glyphicon glyphicon-edit"></button><input id="year"  style="display: none" value ='<?php echo $row['year'] ?>' type="text" /> </p>  

      <p>
        <input id ="save_button" type="button"  value ="Save" />
        <span id ="save_status"> </span>
      </p>

           

          
       
     </div>




      

    <br> <br> 

       
   <script type="text/javascript"  src= "jquery.js" > </script>
    
    <script type="text/javascript"  src= "jquery-ui.js"> </script>

    <script>

       $('#save_button').click(function(){
          // grap values 
          var firstname = $('#firstname').val();
          var lastname = $('#lastname').val();
          var email = $('#email').val();
          var faculty = $('#faculty').val();
          var year = $('#year').val();

          // show loading text

          $('#save_status').text('Loading ...')


          //Perform http request

          $.post('settings.php', {firstname: firstname, lastname: lastname, email: email, faculty: faculty, year:year}, function(data) {
              $('#save_status').text(data);
              window.location.reload();
          });
       });
       
       $(function() {
          $("#1").click(function() {
            $("#firstname").toggle();
           });

           $("#2").click(function() {
             $("#lastname").toggle();
            });

            $("#3").click(function() {
              $("#email").toggle();
            });

            $("#4").click(function() {
              $("#faculty").toggle();
            });

            $("#5").click(function() {
               $("#year").toggle();
             });

        });

    </script>



     <!-- Footer removed//-->



  </body>
</html>












