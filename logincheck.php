<?php
session_start();
include("config.php");



if(isset($_POST['submit'])){
	if(isset($_POST['email'])&&isset($_POST['password'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$name=array();
        mysql_select_db("results");
        //$sql="SELECT * FROM signup WHERE username='$username' AND password='$password' ";
		$result=mysql_query("SELECT * FROM signup WHERE email='$email' AND password='$password' ",$conn);
		$num=mysql_num_rows($result);
		if($num>0){
		   if(is_resource($result)){
		  	   while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				   $_SESSION['username']=$row['username'];
				   $_SESSION['email']=$row['email'];
				  header("location:facultyportal.php");
			    }
		    }
	    }
        else{
			$_SESSION['error']='Invalid Username Or Password';
			header("location: login.php");
			//echo "<br>Please Check you Username Or Password<br>";
		} 		
    }
}		
?>