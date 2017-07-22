


<!DOCTYPE html >

  <html lang="en">


  <head>
  
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=8">
     
      <title> Booking - McGill Consulting Association bookings - McGill University </title>
      
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <link rel="stylesheet" type="text/css" media="screen, projection" href="css/lc.css" />
      <link rel="stylesheet" type="text/css" media="print" href="css/lc_print.css" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
       
        <link rel="stylesheet" type="text/css" href="css/style_booking.css">
        <link rel="stylesheet"  href="css/style_booking2.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script src="https://www.w3schools.com/lib/w3.js"></script>

  </head>


<body>


  <!-- Nav bar//-->
  <div w3-include-html="template/nav.html"></div> 

  <div id="wrapper">

    <div id="container">

    <br> <h1 id="roomh1">Booking</div> </h1>

      <!-- Info inside BOX //-->
    <div id="maincontent">
      <div id="group_desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu consectetur odio, placerat faucibus mauris. Quisque interdum congue rhoncus. Maecenas efficitur tincidunt lacinia. Nam feugiat lorem sed mi vehicula, eget porttitor sem accumsan. Etiam quis consectetur massa. Suspendisse elementum eget sem sit amet fermentum. Donec lorem ante, lobortis in pharetra tincidunt, imperdiet non dui. Curabitur mi sapien, hendrerit vel efficitur in, aliquet vitae metus. Integer et eros tincidunt, laoreet eros quis, facilisis dolor. In elementum tincidunt risus, in bibendum magna sodales ac. Aliquam vehicula vel orci at laoreet. Aenean nunc erat, faucibus ut diam sed, interdum egestas velit. Nulla euismod arcu nec iaculis iaculis.</p>

        <p><em>Questions about your bookings?</em> <a href="contact.php">Contact us </a>.</p>


        <p style="border: 1px solid #1F5187; background: #ececec; padding: 10px;"><strong>Please note</strong>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu consectetur odio, placerat faucibus mauris. Quisque interdum congue rhoncus. Maecenas efficitur tincidunt lacinia..</p>

      </div>





      <br> 
         <!-- Calendar//-->
        <div id="rm_l">
          <div id="rm_cal_cont">
            <div id="rmcal"></div>
          </div>  
          <br style="clear:left;" />


         <!-- JavaScript//-->
    
      <script>
      
    jQuery(function() {
      jQuery( "#rmcal" ).datepicker( { dateFormat: "yy-mm-dd", minDate: 0, maxDate: +14 } );
  
    }); 

    </script>




          <script>
              w3.includeHTML();
          </script>





        
       </body>
</html>