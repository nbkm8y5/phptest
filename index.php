<?php

require_once "php/database_connect.php";
require_once "php/user.php";
$userIP = $_SERVER['REMOTE_ADDR'];
$databaseConnectionConfirmation = '';
if(mysql_ping() == 0)
{
  $databaseConnectionConfirmation = mysql_error();
}
else
{
  $databaseConnectionConfirmation = 'You have successfully connected to the database.'; 
}
$currentUser = new User();
$currentUser->setWeight($_POST["weight"]);
$currentUser->setHeight($_POST["height"]);
$calculation = $currentUser->getBMI();
mysql_close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Testing Center</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="text-center">
  		<h1>BODY MASS INDEX CALCULATOR</h1>
<div class="container">
  <div class ="col-md-offset-4 col-md-4">
    <form method="post">
          <div class="form-group">
            <label for="weight">Weight in pounds</label>
            <input type="number" class="form-control" id="weight"  name="weight" value="<?php echo $weight; ?>" placeholder="Enter your weight in pounds">
          </div>
          <div class="form-group">
            <label for="height">Height in inches</label>
            <input type="number" class="form-control" id="height" name="height" value="<?php echo $heightInInches; ?>" placeholder="Enter your height in inches">
          </div>
          <button type="submit" class="btn btn-default">Calculate</button>
      </form>
      <h2>BODY MASS INDEX CALCULATION</h2>
      <h3><?php echo $calculation; ?></h3>
      <h6><?php echo 'Your IP address is: ' . $userIP; ?></h6>
      <h6><?php echo $databaseConnectionConfirmation; ?></h6>
      <h6>&copy <?php echo date('Y'); ?> Rolando Moreno</h6>
  </div>
</div>
  	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>