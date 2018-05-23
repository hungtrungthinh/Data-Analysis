<?php
/* session_start();
if(isset($_SESSION['username'])){
	$query="select ";
	$flat=90;
}
else{
	header("location: login.php");
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
   $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });
  </script>
  <style>
  .vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}
.progress {
  height: 40px;
  margin-left:5%;
  margin-right:5%;

}
.progress .skill {
  font: normal 16px "Open Sans Web";
  line-height: 35px;
  padding: 0;
  margin: 0 0 0 20px;
  text-transform: uppercase;
}
.progress .skill .val {
  float: right;
  font-style: normal;
  margin: 0 20px 0 0;
}

.progress-bar {
  text-align: left;
  transition-duration: 4s;
}
@media screen (max-width:700px){
	.container{
		margin-left:5%;
		margin-right:5%;
	}
}



.progress {
  background-image: none;
  -webkit-print-color-adjust: exact;
  box-shadow: inset 0 0;
  -webkit-box-shadow: inset 0 0;

  .bar {
    background-image: none;
    -webkit-print-color-adjust: exact;
    box-shadow: inset 0 0;
    -webkit-box-shadow: inset 0 0;
  }
}

@media print {
   /* All your print styles go here */
   .progress{
     background-color: #f5f5f5 !important;
     border-radius: 4px !important;
     -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1) !important;
   }
   .progress-bar{
     background-color: #428bca !important;
     box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15) !important;
   }
}
  </style>
</head>
<body>


<div class="container">
	<div class="row">
	
		 <!-- Skill Bars -->
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $flat; ?>" aria-valuemin="0" aria-valuemax="100" >
                    <span class="skill">CSS<i class="val"><?php echo $flat; ?>%</i></span>
                </div>
            </div>
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="<?php echo $daa; ?>" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill" >JavaScript<i class="val"><?php echo $daa ?>%</i></span>
                </div>
            </div>  
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $co; ?>" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">Photoshop<i class="val"><?php echo $co; ?></i></span>
                </div>
            </div>  
			
			 <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $dbms; ?>" aria-valuemin="0" aria-valuemax="100" >
                    <span class="skill">CSS<i class="val"><?php echo $dbms; ?>%</i></span>
                </div>
            </div>
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $es; ?>" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">JavaScript<i class="val"><?php echo $es ?>%</i></span>
                </div>
            </div>  
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $java; ?>" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">Photoshop<i class="val"><?php echo $java; ?></i></span>
                </div>
            </div>  
			
			
			
	</div>
</div>

</body>
</html>
