<?php
$tbt=0;
$nop;
$ts=0;$twt=0;
$ttt=0;
$dur;
$from;
$awt;
$att;
$x=1;
$flag=array();
$rem=array();
$wt=array();
$tt=array();
$b=array();
$twt=array();

$nop=3;  //no of process
$ts=4;   //time slice

$b=array(16,18,2);

echo "<br><br><br>";
var_dump($b);
echo "<br><br><br>";

for($i=0;$i<$nop;$i++){
	echo $wt[$i]=$tt[$i]=0; echo "<br>";
	echo $rem[$i]=$b[$i];  echo "<br>";
	echo $tbt=$tbt+$b[$i];  echo "<br>";
	echo $flag[$i]=0;  echo "<br><br><br>";
}
$from=0;
$i=0;




echo "<br><br>Gantt Chart<br><br>";
echo "<br>Process ID      From Time      To Time<br>";

while($from>$tbt){
	if(!$flag[$i]){
		if($rem[$i]<=$ts){
			$dur=$rem[$i];
			$flag[$i]=$x;
			$tt[$i]=$dur+$from;
			$wt[$i]=$tt[$i]-$b[$i];
		}
		else{
			$dur=$ts;
		}	
		echo  "<br>".($i+$x)."       ".$from."       ".($from+$dur)."<br>";
		$rem[$i]-=$dur;
		$from+=$dur;
	}
	$i=($i+$x)%$nop;
}

echo "<br><br><br>";
/* for($i=0;$i<$nop;$i++){
	$twt+=$wt[$i];
	$ttt+=$tt[$i];
} */

echo "<br><br>Process Id        Waiting Time        Turn Around Time<br><br>";
for($i=0;$i<$nop;$i++){
	echo ($i+$x)."           ".$wt[$i]."             ".$tt[$i]."<br>";
}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	$awt=round($twt)/$nop;
	$att=round($ttt)/$nop;
	
	echo "Total Waiting Time : ".round($twt)."<br>";
	echo "Total Turn Around Time : $ttt"."<br>";
	echo "Average Waiting Time : $awt"."<br>";
	echo "Average Turn Around Time : $ttt"."<br>";
	


?>