<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="logo.png" type="icon">
  <title>Result Analysis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
background-image:url('images/small1.jpeg'); background-size:cover; background-position:center; background-attachment:fixed;
}
.navbar{
	//background:transparent;
}
.col-centered{
    margin: 0 auto;
    float: none;
}
  /* Fixed navbar */
body {
    padding-top: 90px;
}
/* General sizing */
ul.dropdown-lr {
  width: 300px;
}

/* mobile fix */
@media (max-width: 768px) {
	.dropdown-lr h3 {
		color: #eee;
	}
	.dropdown-lr label {
		color: #eee;
	}
}



</style>
</head>
<body   style=" background-image:url('images/students.jpeg'); background-size:cover; background-position:center; background-attachment:fixed;">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" class="write">
    	<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="">Vignan Hub</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="">Home</a></li>
					<li><a href="adminlogin.php">Admin</a></li>
					<li><a href="subjects.php">Tutorials</a></li>
					<li><a href="kbc/index.php">Quiz</a></li>
				</ul>
				 <ul class="nav navbar-nav navbar-right">
					<li><a href="signup.php">Signup</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>


<div class="container">
  <form action="checkstudentresults.php" method="post">
   <center><h2>Check Result</h2></center>
    <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
            <input type="text" name="rollno" class="form-control" >
            <span class="input-group-btn">
                <button class="btn btn-default" name="submit" type="submit">Check!</button>
            </span>
			<div class="errormsg"><?php ?></div>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
  </form>
</div>




  <!-- <form action="fileupload.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit"/>
      </form> -->
	  <!-- footer section -->



</body>
</html>
