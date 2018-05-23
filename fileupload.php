<?php
   if(isset($_POST['submit'])){
	   $file=$_FILES['file'];
	   
	   //File Properties
	   $fileName=$_FILES['file']['name'];
	   $fileTmpName=$_FILES['file']['tmp_name'];
	   $fileSize=$_FILES['file']['size'];
	   $fileError=$_FILES['file']['error'];
	   $fileType=$_FILES['file']['type'];
	   
	   //Work Out The file Extension
       $file_ext=explode('.',$fileName); 
       $fileActualExt=strtolower(end($fileExt));    
	   
	   $allowed=array('txt','jpg','jpeg','png','pdf');
	   
	   if(in_array($fileActualExt,$allowed)){
		   if($fileError===0){
			   if($fileSize<1000000){
				   $fileNameNew=uniqid('',true).".".$fileActualExt;
				   $fileDestination='uploads/'.$fileNameNew;
				   move_uploaded_file($fileTmpName,$fileDestination);
				   header("Location:index.php?uploadsuccess");
			   }
			   else{
				   echo 'Your file is too big!';
			    }
		     }
	        else{
			   echo '<br> There Was an Error Uploading Your File.';
		     }
       }
	   else{
		   echo '<br>You Cannot Upload files of This Type!!!<br>';
	   }
   }   
?>