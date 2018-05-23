
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<body>

<?php
	if(isset($_POST['submit'])){
if(isset($_POST['first'])&&isset($_POST['second'])&&isset($_POST['third'])&&isset($_POST['fourth'])){
$t=0;
$w=0;
$r=0;
$a=0;

$n=3;  //no.of process
$b0=0;
$b1=$_POST['first'];
$b2=$_POST['second'];
$b3=$_POST['third'];
$b4=$_POST['fourth'];

$b=array($b0,$b1,$b2,$b3,$b4);

var_dump($b);

?>
 <div class='container'>
<div class='table-responsive' >
<table class='table table-condensed table-striped table-bordered table-hover tabledesign'>
  <thead>
    <tr class='info'>
      <th scope='col'>Process</th>
      <th scope='col'>Burst Time</th>
      <th scope='col'>Waiting Time</th>
      <th scope='col'>Turn Around Time</th>
    </tr>
  </thead>
<?php 
for($i=1;$i<=$n;$i++){
   	$t=$t+$w;
	$r=$r+$b[$i];
	//echo $i."&emsp;&emsp;&emsp;".$b[$i]."&emsp;&emsp;&emsp;".$w."&emsp;&emsp;&emsp;".$r."<br>";
?>
  <tbody>
    <tr>
      <td><?php echo $i; ?></th>
      <td><?php echo $b[$i]; ?></td>
      <td><?php echo $w; ?></td>
	  <td><?php echo $r; ?></td>
    </tr>
	<tbody>
	</table>
	</div></div>
	
	
	
	<?php
	
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


</body></html>