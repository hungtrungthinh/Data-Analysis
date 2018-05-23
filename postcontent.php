<?php
session_start();
include("config.php");
if(isset($_POST["posting"]))
{
	$name=$_SESSION['username'];
	
	$result=mysql_query("select email from signup where username='$name'",$conn);
	if($result){
		if(is_resource($result)){
			while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				$email=$row['email'];
			}
		}
	}
	else{
		
	}
	
	$content=$_POST['postcontent'];
    $image = addslashes(file_get_contents($_FILES['pictures']['tmp_name']));
    $q="insert into posting values('','$content','$image',NOW(),'$name','$email')".mysql_error();
    $res=mysql_query($q,$conn);

    if(!$res){
	    $_SESSION['postsuccessmsg']="Post Created Successfully.";
		header("location: facultyportal.php");
	}
    else{
		$_SESSION['posterrormsg']="We are Sorry ".$_SESSION['username']." An Error Occured In Creating Post Please Try Again Later.";	
        header("location: facultyportal.php");
    }

}

?>