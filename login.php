<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<style>
/* body{
background-color:#2D3945;
background-image:url("images/small1.png");
background-size:cover;
background-repeat:no-repeat;
} */
.container{
background:transparent;
}
.errormsg{
	color:#2D3945;
	font-size:25px;
	padding-bottom:10px;
}
.form-bottom{
	background-image:url("images/small1.png");
}
</style>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSS style="background-color:#2D3945;" -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body style="background-color:;  background-image:url('images/small2.jpeg'); background-size:cover; background-position:center; background-attachment:fixed;"">

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4 form-box">
                        	<div class="form-top"><!--
                        		<div class="form-top-left">
                                <center>
			        					<h3>Login to our site</h3>
                            	</center>
                        		</div>-->

                            </div>
                            <div class="form-bottom"><center>
			        					</center>
			                    <form role="form" action="logincheck.php" method="post" class="login-form">
			                    	<center><h1 style="color:white;">Faculty Login</h1></center>
									<hr>
									<!-- <div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required pattern="^[a-zA-Z][a-zA-Z0-9-_%$*#@\.]{5,40}$">
										<div id="username"></div>
			                        </div> -->
								     <div class="form-group">
			                        	<label class="sr-only" for="form-email">Password</label>
			                        	<input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid Email Address.">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
										<div id="password"></div>
			                        </div>
									<div class="errormsg"><center>
									<?php if(isset($_SESSION['error'])){
										echo $_SESSION['error'];
									}
									?>
									</center></div>
			                        <center><button name="submit" type="submit" class="btn">Login!</button></center>
			                    </form>
		                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>



<?php
    unset($_SESSION["error"]);
?>
