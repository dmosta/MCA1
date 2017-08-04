<?php
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

    <div class="container">


        <h2>CPP Notes</h2>
        <p>These notes will give you bla bla bla :</p> 

            <div class="progress right">
              <div id ="progressBar" class="progress-bar" 
              role="progressbar" 
              aria-valuenow="0"
               aria-valuemin="0" 
               aria-valuemax="100" 
               style="width:0%">
                0%
                </div>
              </div> 
              <br> <br> <br> 
 

      <div class="container">

        <table  id ="table" width="100%" >
          <tr>
            <th>File Name</th>
            <th> Read </th>
          </tr>

          <?php
            $query = "SELECT *  FROM `cppUploads`";
            $result_set=mysqli_query($link,$query);
            while($row=mysqli_fetch_array($result_set)){
          ?>
          <tr>
            <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank"> <?php echo $row['file'] ?> </a></td>
            <td> <input   value ='<?php echo $row['id'] ?>' type="checkbox"  <?php echo $row['checkbox'] ?> /> </td>
          </tr>
           <?php
            }
          ?>
        </table>
        
      </div>
                

    <br> <br> 
   




       
  <script type="text/javascript"  src= "jquery.js" > </script>
    
  <script type="text/javascript"  src= "jquery-ui.js"> </script>

  <script>

    $(document).ready(function(){
      
        var total = $("input:checkbox").length;
        var numChecked = $("input:checkbox:checked").length;
        var percent = Math.round((numChecked/total)*100);
        $('#progressBar').attr('aria-valuenow', percent).css('width',percent+'%').text(percent+'%');

          $("input" ).change(function() {

              if($( this ).is(':checked')){
                  numChecked ++;
                   percent = Math.round((numChecked/total)*100);
                   $('#progressBar').attr('aria-valuenow', percent).css('width',percent+'%').text(percent+'%');
                    var id = $(this).attr("value");
                    $.post('checkbox.php', {id: id}, function(data) {
                        window.location.reload();
                    }); 
                } 

                else {
                   numChecked --;
                    percent = Math.round((numChecked/total)*100);
                   $('#progressBar').attr('aria-valuenow', percent).css('width',percent+'%').text(percent+'%');
                    var id2 = $(this).attr("value");
                    $.post('checkbox.php', {id2: id2}, function(data) {
                        window.location.reload();
                    });
                }

           });

    });


 

   </script>



     <!-- Footer removed//-->



  </body>


</html>


























