<!DOCTYPE html>
<html lang="en">
<head>
  <title>FCFS without arrival time</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>FCFS</h2>
  <form action="fcfs without arrival time.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" name="first" placeholder="Enter first" >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="second" placeholder="Enter second">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="third" placeholder="Enter third" >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="fourth" placeholder="Enter fourth">
    </div>	
    <button name="submit" type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['first'])&&isset($_POST['second'])&&isset($_POST['third'])&&isset($_POST['fourth'])){

$t=0;
$w=0;
$r=0;
$a=0;

$n=4;  //no.of process
$b0=0;
$b1=$_POST['first'];
$b2=$_POST['second'];
$b3=$_POST['third'];
$b4=$_POST['fourth'];

$b=array($b0,$b1,$b2,$b3,$b4);

//var_dump($b);

echo "Process     Burst Time     Waiting Time      Turn Around Time";
echo "<br>";
for($i=1;$i<=$n;$i++){
   	$t=$t+$w;
	$r=$r+$b[$i];
	echo $i."&emsp;&emsp;&emsp;".$b[$i]."&emsp;&emsp;&emsp;".$w."&emsp;&emsp;&emsp;".$r."<br>";
	$w=$w+$b[$i];
	$a=$a+$r;
}

$avg1=floatval($t)/$n;
$avg2=floatval($a)/$n;

echo "Average Waiting Time is : ".$avg1."<br>";
echo "Average Waiting Time is : ".$avg2."<br>";
	}
}

?>
