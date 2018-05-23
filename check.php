

<?php
session_start();
include("config.php");
if(isset($_POST['rollno'])){
	$_SESSION['rollno']=$rollno=trim($_POST['rollno']);
	$len=strlen($_SESSION['rollno']);
	if($len!=10){
		echo "<br>Invalid Rollno<br>";
	}
	else{
           $result=mysql_query("select * from 2_2_pdf where hallticket_no='$rollno'",$conn);
          	if($result){
			   if(is_resource($result)){
				echo "Done".mysql_error();
				//header("Location: student result.php");   
			   }
			    else{
				  echo  "something ".mysql_error();
			   } 
			}
			else{
				echo "Something is wrong";
			}
	} 
}	
?>









