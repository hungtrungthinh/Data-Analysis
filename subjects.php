<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>


</head>

<body>
<div class="container" >
<h1>Results</h1>

  <div class="form-group">
  <form method="post" action="subjects.php">
<select class="selectpicker show-menu-arrow" name="dept" data-style="btn-info" title="Select Department" data-width="auto">
        <option>Computer Science & Engineering</option>
        <option>Civil Engineering</option>
        <option>Mechanical Engineering</option>
        <option>Electronics & Communication Engineering</option>
        <option>Electrical & Electronics Engineering</option>
        <option>Electronics & Instrumentation Engineering</option>
		<option>Basic Sciences & Humanities</option>
  </select>
  <br><br>
  
  <select class="selectpicker show-menu-arrow" name="year" data-style="btn-info" title="Select Year" data-width="auto">
        <option>I</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
  </select>
  <br><br>
  <select class="selectpicker show-menu-arrow" name="sem" data-style="btn-info" title="Select Semester" data-width="auto">
        <option>I</option>
        <option>II</option>
  </select>
  <br><br>
        <div class="col-xs-5 col-xs-offset-5">
            <button type="submit"  name="submit" class="btn btn-default">Submit</button>
        </div>
		
		</form>
		
   </div>
   
</div>
</body>
</html>


<?php
if(isset($_POST['submit'])){
	if(isset($_POST['dept'])&&isset($_POST['year'])&&isset($_POST['sem'])){
	    // echo "<br> selected Department is ".$_POST['dept']."<br><br>";
		// echo "<br> selected Year is ".$_POST['year']."<br><br>";
		// echo "<br> selected Semester is ".$_POST['sem']."<br><br>";
		if($_POST['dept']=="Computer Science & Engineering" && $_POST['year']=="II" && $_POST['sem']=="I"){
			header("location: cse2-1.php");
		}
		else if($_POST['dept']=="Computer Science & Engineering" && $_POST['year']=="II" && $_POST['sem']=="II"){
			header("location: cse2-2.php");
		}
		else if($_POST['dept']=="Computer Science & Engineering" && $_POST['year']=="III" && $_POST['sem']=="I"){
			header("location: cse3-1.php");
		}
		else{
			echo "<br><br><center><h3>currently  cse II-II results are avalible. other department's results will be updated soon</h3></center>";
		}
	}
}
?>