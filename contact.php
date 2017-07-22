

<?php 

if ($_POST["submit"]) {
	if (!$_POST['name']) { $error="<br />Please enter your name"; }

	if (!$_POST['email']) { $error.="<br />Please enter your email address"; }

    if (!$_POST['comment']) { $error.="<br />Please enter a comment"; }



    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error.="<br />Please enter a valid email address";
      }
    
    if ($error) {
            $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
        } 

      else {
            if (mail("mca@musonline.com", "Comment from website!", "Name: ".$_POST['name']."
                     Email: ".$_POST['email']."
                     Comment: ".$_POST['comment'])) {

                     $result='<div class="alert alert-success"><strong>Thank you!</strong> We will be in touch.</div>';
            } 
            else {
                     $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
             }
          }

	}
 ?>

<!doctype html>
  <html>
    <head>
        <title>My First Webpage</title>




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
      <div class="row">

      <div class="col-md-6 col-md-offset-3 emailForm">
       <h1> Contact </h1>
      
      <?php echo $result; ?>

      <p class="lead">Please get in touch - We will get back to you as soon as we can.</p>

      <form method="post">

      <div class="form-group">

      <label for="name">Your Name:</label>
      <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />

      </div>

      <div class="form-group">

      <label for="email">Your Email:</label>
      <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />

      </div>

      <div class="form-group">

      <label for="comment">Your Comment:</label>
      <textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?>
      </textarea>


        </div>

      <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />


      </form>

      </div>

      </div>

      </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
        </script>
     





      </div>
    </div>






     <!-- Footer//-->

      <div w3-include-html="template/footer.html"></div> 

          <script>
              w3.includeHTML();
          </script>



  </body>
</html>




