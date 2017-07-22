<? 
  session_start();
  
  include("connection.php");
  
  $query="SELECT email FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
  
  $result = mysqli_query($link,$query);
  
  $row = mysqli_fetch_array($result);
  
  $f=$row['email'];

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
    
   <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header pull-left">
          <a class="navbar-brand" href="#"> <strong> <h4>McGill Consulting Association </h4></strong> </a>
        </div>

        <div id="navbar" class="pull-right">
          <ul class="nav navbar-nav ">
            <li ><a href="index.php?logout=1"> <strong> <h4> Log Out  </h4> </strong> </a></li>
      </div>
    </nav>


    <div class="well_mca "></div>
       <div class="jumbotron">
          <div class="container-fluid">
    
     
     <div class="row">
    <div class="col-sm-6" > 
    <h2 align="center">Welcome back <?php echo $f; ?></h2> </div>  </div>
  
     <div id="div1" style=" top:420px; left:280px; position:absolute;"> <p align="center"> <a class= "btn btn-primary  custom btn-lg" href="#" role="button"> <strong>MCA</strong></a></p></div>
      
     <div id="div2" style="top:200px; left:700px; position:absolute;"> <p align="center"> <a  href=educate.html class= "btn btn-primary  custom btn-lg" href="#" role="button"> <strong>EDUCATE</strong></a></p></div>

     <div id="div3" style="top:400px; left:700px; position:absolute;"> <p align="center"> <a  href=apply.html class= "btn btn-primary  custom btn-lg" href="#" role="button"><strong>APPLY</strong></a></p></div>

     <div id="div4" style="top:600px; left:700px; position:absolute;"> <p align="center"> <a  href=prep.html class= "btn btn-primary  custom btn-lg" href="#" role="button"><strong>PREP</strong></a></p></div>

    <svg width="900" height="900">
    <line x1="385" y1="247" x2="700" y2="5" stroke="#BDBDBD" stroke-width="4"/>
    <line x1="385" y1="247" x2="700" y2="215" stroke="#BDBDBD" stroke-width="4"/>
    <line x1="385" y1="247" x2="700" y2="415" stroke="#BDBDBD" stroke-width="4"/>
    </svg>

   </div>  </div>


  </body>

</html>