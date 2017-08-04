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
  
  table, th, td {
    border: 0px ;
     text-align: center;
  }

  .btn {

    margin-top: 1.5px;
    margin-bottom: 1.5px;
    padding-top: 0.5px;
    padding-bottom: 0.5px;

  }

 table, cell {
  width :100%;
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


        <h2> CPP Notes_Upload Files</h2>
        <p>View and upload files :</p> 
        <br> 

      <?php

         $name = $_FILES['file_1']['name'];
         $size = $_FILES['file_1']['size'];
        //echo $type = $_FILES['file_1']['type'];
         $tmp_name = $_FILES['file_1']['tmp_name'];
        
        if (isset($name)){
          if (!empty($name)){
              $location='uploads/';
             if( move_uploaded_file($tmp_name, $location.$name)){
              echo " You have successfully uploaded ${name}";
            

                $query = "INSERT INTO `cppUploads` (`file`, `size`) VALUES (
                '$name','$size')";
      

                mysqli_query($link,$query);
            
             }
          }else{
            echo 'Please choose a file.';
          }
        }


      ?>


       <?php
           //Define the query
          $query = "DELETE FROM `cppUploads`  WHERE file={$_POST['file']} LIMIT 1";
          //sends the query to delete the entry
          mysqli_query($link,$query);
         
      ?>
    <div class="container">
      <form  id ="file_upload" action="admin-upload.php" method="POST" enctype="multipart/form-data">
            <p><input type="file"  name= "file_1"/> </p>
            <p>
              <input type="submit" value="Upload" />
              </p>
        </form>
    </div>


      </div>

        <br> <br> 

     <!-- Footer removed//-->

    <div class="container">

        <p> Existing Files:  <p>

        <table width="100%" >
        <tr>
          <th>File Name</th>
          <th>File Size(KB)</th>
          <th>View</th>
          <th>Delete</th>
        </tr>

        <?php
           $query = "SELECT * FROM `cppUploads`";
           $result_set=mysqli_query($link,$query);
          while($row=mysqli_fetch_array($result_set))
            {
                echo "<tr>";
                echo "<td>" . $row['file'] . "</td>";
                echo "<td>" . $row['size'] . "</td>";
                ?>
                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
               <?php
                echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                echo "</tr>";
            }
      ?>





            
        </table>
        
    </div>
    <br><br><br> <br><br> <br> 
   




       
       <script type="text/javascript"  src= "jquery.js" > </script>
       <script type="text/javascript"  src= "jquery-ui.js"> </script>





     <!-- Footer removed//-->



  </body>
</html>























