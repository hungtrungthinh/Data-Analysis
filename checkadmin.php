<?php
include("config.php");
if(isset($_POST['submit'])){
	if(isset($_POST['username'])&&isset($_POST['password'])){
        $name=array();
		$email=array();
		$mobileno=array();
    	$username=$_POST['username'];
		$password=$_POST['password'];
		mysql_select_db("results");
		
		//faculty data
		
        $sql="select * from results_admin where username='$username'&&password='$password'";
        $result=mysql_query($sql,$conn);
        if(is_resource($result)){
			$query="select * from signup";
			$result=mysql_query($query,$conn);
            if(is_resource($result)){
				echo "<center><h2>Faculty Details</h2></center>";
				while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
					echo "<center>".$name=$row['username']."&nbsp&nbsp&nbsp".$email=$row['email']."&nbsp&nbsp&nbsp".$mobileno=$row['mobileno']."</center><br>";
				}
			}
		}
		
		//students data 
	        $rollno=array();	
			$query="select id,rollno from 3cse";
			$result=mysql_query($query,$conn);
            if(is_resource($result)){
				echo "<br><br><center><h2>Student Roll No's</h2></center>";
				while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
					 echo "<center>".$id=$row['id']."&nbsp&nbsp&nbsp".$rollno=$row['rollno']."</center>";
				}
			}

        //print faculty details

	 



		
	}
}
?>