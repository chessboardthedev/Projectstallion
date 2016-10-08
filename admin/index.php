<?php
@session_start();
if (!isset($_SESSION['Username'], $_SESSION['ID'])){
  header('Location: login.php');
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Service Status</title>
  <link rel="icon" href="../images/favicon.png" type="image/png">
  <link rel="shortcut icon" href="../images/favicon.ico" type="img/x-icon">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head> 
    <style>
      html,body {
        background-color: rgb(48,48,48);
        color: white;
      }
      .page-header {
        border-bottom: none;
        margin-bottom: 0;
      }

      .alert {
        font-weight: 600;
      }

      form {
        font-family: arial;
        border: 10px;
        padding: 40px;
      }

      label {
        float: left;
        margin-top: 10px;
      }

      button {
        margin-top: 10px;
      }

      .btn.form-control {
        font-size: 20px;
        height: 50px;
      }
    </style>
    <body>
      <div class="container col-md-6 col-md-offset-3">

        <div class="page-header text-center">
          <img alt="logo" src="../images/logo.png">
          <h1>Project Stallion</h1>
          <h2>Login Successful</h2>

        </div>

      </div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>