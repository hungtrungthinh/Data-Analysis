<?php
session_start();
include_once("config.php");
if(isset($_POST['submit'])){
	if(isset($_POST['rollno'])){
	   $rollno=$_POST['rollno'];
	   //$query="select * from 2_2_pdf where hallticket_no='.$rollno.'";
	   $res=mysql_query("select * from 2_2_pdf where hallticket_no='$rollno' ",$conn);
	   if(!$res==TRUE) { $count=1; /* echo "br".mysql_error(); header("Location: index.php"); exit(); */ }  
	   if(is_resource($res)){
		   if($res){
			   //$count=1;
			   while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
				   //echo $row['id']."<br>";
				   //echo $row['hallticket_no'];
				   include_once("student result.php");
			   }
		   }
/* 		   else{
			   echo "hello".mysql_error(); 
			   //header("Location: index.php"); exit();
		   } */
	   }
	   else if($count!=1){
		   echo "hi";
	   }
	}
}
?>