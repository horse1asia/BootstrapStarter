<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Starter Template - Version 3.3.0</title>

    <!-- Bootstrap CSS Local development-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Bootstrap CDN CSS: Use on deployment //////////////////////////--> 
    <!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    -->

    <!-- Optional theme 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    -->
    <!--////////////////////////////////////////////////////////////////--> 

    
    <!--use the custom css to override or provide custom styles for this website.--> 
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Congratulations!</h1>
    <?php 
        $firstName = $_POST['firstName'];
        print "<p>Congratulations $firstName</p>";
     ?>

     <p>Rebooted learning PHP for development</p>











<!--//////// SCRIPTS AND PLUGINS  /////////////////////////////////--> 

    <!--jQuery Local Development Only--> 
    <script src="js/1.11.1.jquery.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    -->

    <!-- Include all compiled plugins (below), or include individual files as needed. Load this after jQuery -->
    <script src="js/bootstrap.min.js"></script>

    <!--Bootstrap CDN JS: Use on deployment-->
    <!-- Latest compiled and minified JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    -->

  </body>
</html>