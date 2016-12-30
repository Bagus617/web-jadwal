<?php
	session_start();
	
	if (isset($_SESSION['USERNAME'])) 
	{
		
		header('Location: admin_homepage.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="csss/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![Css]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="adminValidate.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Admin" id="email" name="USERNAME">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" id="password" name="PASSWORD_ADMIN" >
            </div>
           
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Masuk</button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          
      </div>
  </div>
  </div>
    <?php
    if(isset($_SESSION['kosong']))
	{
	unset($_SESSION['kosong']);
	echo"<script>alert('username or password must be insert')</script>";
	}

	
	if(isset($_SESSION['salah']))
	{
	unset($_SESSION['salah']);
	echo"<script>alert(' Maaf password yang anda masukkan salah')</script>";
	}
?>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>