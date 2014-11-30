<?php
session_start();



    if(isset($_POST['username'], $_POST['name'],$_POST['password'])){

        require 'helpers/connection.php';



        $query = dbConnect()->prepare("INSERT INTO users (username,name, password) VALUES (:username, :name,:password)");

        $query->bindParam(':username', $_POST['username']);
        
        $query->bindParam(':name', $_POST['name']);

        $query->bindParam(':password', $_POST['password']);



        if($query->execute()){

            header("Location: index.php");

        } else{

            echo 'ERROR';

        }

    }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Todo List</title>

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

        
        <form class="form-signin" role="form" action="register.php" method="POST">
          <h2 class="form-signin-heading text-center text-muted">Enter Details</h2><br>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" required>        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block btn-danger" type="submit">Register</button><br>
        <a href="index.php">Already Registered?</a>
      </form>

    </div> 
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>