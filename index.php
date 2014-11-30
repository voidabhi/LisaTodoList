<?php
    session_start(); 
    $errors = array(
        1=>'Username or Password is incorrect!',
        2=>'Please login before adding todo',
        3=>'Username already exists!'
    );
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lisa Todo List</title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
             
        
	<div class="row clearfix center-block">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<div class="page-header">
				<h1 class="text-center text-danger">
					Lisa Todo List
				</h1>
			</div>
		</div>
		<div class="col-md-2 column">
		</div>
	</div>        
                   

        
        <form class="form-signin" role="form" action="todo.php" method="POST">
          <h2 class="form-signin-heading text-center text-muted">Sign In</h2><br>
          
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <?php if(isset($_GET['err'])){?><p class="text-danger text-center"><?=$errors[$_GET['err']]?></p><?php }?>
        <button class="btn btn-lg btn-primary btn-block btn-danger" type="submit">Sign in</button><br>
        <a href="register.php">Not Registered?</a>
      </form>

    </div> 
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>