
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
          <div class="container-fluid">
                    <div class="row">            
                        <div class= "col-sm-6" style="background:#F2F2F2">&nbsp;</div>
                        <div class= "col-sm-6" >  
                                    <h1 align="center">MCA</h1>
                                    <hr style="width: 100%; color: #CC3333; height: 2px; background-color:#CC3333;" />
                                    <br>
                                    <p align="center"></p>
                                    <p align="center"> <a  href=join.php class= "btn btn-primary  custom btn-lg" href="#" role="button">JOIN</a></p>
                                    <p align="center"> <a  href=signin.php class="btn btn-primary  custom btn-lg" href="#" role="button">SIGN IN</a></p>     
                                </div>
                            </div>  
                      </div>
               </div>
          </div>




         <!-- Footer//-->

      <div w3-include-html="template/footer.html"></div> 

          <script>
              w3.includeHTML();
          </script>



  </body>

</html>










