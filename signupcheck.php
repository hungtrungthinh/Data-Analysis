<?php
session_start();
include("config.php");
$_SESSION['signupmsg']=array();
if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['cpassword'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	if($_POST['password']==$_POST['cpassword']){
		$result=mysql_query("select email from signup where email='$email' ",$conn);
		if($result){
		  $_SESSION['signupmsg']='A User Already exists with that email';
          header("location: signup.php");  		  
		}
		else{
		  $result=mysql_query("insert into signup(username,email,password,cpassword) values($username,$email,$password,$cpassword)",$conn);
          if($result){
			 header("location: login.php"); 
		  }
          else{
			  $_SESSION['signupmsg']='Something is wrong'.mysql_error();
			  header("location: signup.php");
		  }  		  
		}
	}
	else{
		$_SESSION['signupmsg']="Password's do not match";
		header("location: signup.php");
	}
}
else{
	echo "<br>something is wrong<br>";
}
?>