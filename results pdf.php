<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Results PDF</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/>
<link href="//seiyria.github.io/bootstrap-slider/stylesheets/bootstrap-slider.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.js"></script>
<script src="//seiyria.github.io/bootstrap-slider/javascripts/bootstrap-slider.js"></script>



 <script>
   $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });
  </script>

<style type="text/css">
    .bs-example{
    	margin: 15px;
		border-radius:25px;
	}
	h2 ,h3{
  text-align: center;
}
img {
    width: 100%;
    height: auto;
}
     
hr { 
  border: 0; 
  height: 30px; 
  border-style: solid; 
  border-color: #8c8c8c; 
  border-width: 1px 0 0 0; 
  border-radius: 20px; 
} 
hr:before { 
  display: block; 
  content: ""; 
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #8c8c8c; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
}





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
     background-color: #77c9d4 !important;
     box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15) !important;
   }
}
</style>
</head>
<body>
<img src="vh3.jpg" width="460" height="345">
<div class="bs-example">

<h2>2-2 Results PDF</h2> 
<h3>I : Internal Marks | E : External Marks | T : Total Marks | C : Credits</h3>
<hr>
</center>
    <table class="table table-bordered  table-fixed-header">
        <thead>
            <tr>
                <th></th>
				<th></th>
                <th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
				<th>I</th>
				<th>E</th>
                <th>T</th>
				<th>C</th>
            </tr>
        </thead>
		<thead>
            <tr>
                <th>ID</th>
				<th>NUM</th>
                <th colspan="4">DBMS LAB</th>
                <th colspan="4">JAVA LAB</th>
                <th colspan="4">GS</th>
				<th colspan="4">FLAT</th>
				<th colspan="4">DAA</th>
				<th colspan="4">CO</th>
				<th colspan="4">DBMS</th>
				<th colspan="4">ES</th>
				<th colspan="4">JAVA</th>
            </tr>
        </thead>
        <tbody>
           <?php
		  
		    $query="select * from 2_2_pdf";
			$result=mysql_query($query,$conn);
			if(!$result){
				echo '<br>sorry<br>'.mysql_error();
			}
			if(is_resource($result)){
				while($row=mysql_fetch_array($result,MYSQL_ASSOC)){				
			 echo 
			 "<tr>
			 <td>".$row['id']."</td>
			 <td>".$row['hallticket_no']."</td>
			 <td>".$row['i_dbms_lab']."</td>
			 <td>".$row['e_dbms_lab']."</td>
			 <td>".$row['t_dbms_lab']."</td>
			 <td>".$row['c_dbms_lab']."</td>
			 <td>".$row['i_java_lab']."</td>
			 <td>".$row['e_java_lab']."</td>
			 <td>".$row['t_java_lab']."</td>
			 <td>".$row['c_java_lab']."</td>
			 <td>".$row['i_gs']."</td>
			 <td>".$row['e_gs']."</td>
			 <td>".$row['t_gs']."</td>
			 <td>".$row['c_gs']."</td>
			 <td>".$row['i_flat']."</td>
			 <td>".$row['e_flat']."</td>
			 <td>".$row['t_flat']."</td>
			 <td>".$row['c_flat']."</td>
			 <td>".$row['i_daa']."</td>
			 <td>".$row['e_daa']."</td>
			 <td>".$row['t_daa']."</td>
			 <td>".$row['c_daa']."</td>
			 <td>".$row['i_co']."</td>
			 <td>".$row['e_co']."</td>
			 <td>".$row['t_co']."</td>
			 <td>".$row['c_co']."</td>
			 <td>".$row['i_dbms_sub']."</td>
			 <td>".$row['e_dbms_sub']."</td>
			 <td>".$row['t_dbms_sub']."</td>
			 <td>".$row['c_dbms_sub']."</td>
			 <td>".$row['i_es']."</td>
			 <td>".$row['e_es']."</td>
			 <td>".$row['t_es']."</td>
			 <td>".$row['c_es']."</td>
			 <td>".$row['i_java_sub']."</td>
			 <td>".$row['e_java_sub']."</td>
			 <td>".$row['t_java_sub']."</td>
			 <td>".$row['c_java_sub']."</td>
             </tr>";

				}
			}
		   ?>
        </tbody>
    </table>
	</center>
</div>



<!-- progress bars for subjects -->

<?php
// flat pass percentage
$query=" select count(e_flat) as flatotal from 2_2_pdf";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $flatotal=$row['flatotal'];
		}
	}
}

$query="select count(e_flat) as flatpass from 2_2_pdf where e_flat>=26 and t_flat>=40";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $flatpass=$row['flatpass'];
		}
	}
}

$flatpasspercent=($flatpass/$flatotal)*100 ."<br>";
  $flat=round($flatpasspercent,2)."<br>";



// daa pass percentage
$query=" select count(e_daa) as daatotal from 2_2_pdf";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $daatotal=$row['daatotal'];
		}
	}
}

$query="select count(e_daa) as daapass from 2_2_pdf where e_daa>=26 and t_daa>=40";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $daapass=$row['daapass'];
		}
	}
}

$daapasspercent=($daapass/$daatotal)*100 ."<br>";
  $daa=round($daapasspercent,2)."<br>";




// co pass percentage
$query=" select count(e_co) as cototal from 2_2_pdf";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $cototal=$row['cototal'];
		}
	}
}

$query="select count(e_co) as copass from 2_2_pdf where e_co>=26 and t_co>=40";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $copass=$row['copass'];
		}
	}
}

$copasspercent=($copass/$cototal)*100 ."<br>";
  $co=round($copasspercent,2)."<br>";




// dbms pass percentage
$query=" select count(e_dbms_sub) as dbmstotal from 2_2_pdf";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $dbmstotal=$row['dbmstotal'];
		}
	}
}

$query="select count(e_dbms_sub) as dbmspass from 2_2_pdf where e_dbms_sub>=26 and t_dbms_sub>=40";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $dbmspass=$row['dbmspass'];
		}
	}
}

$dbmspasspercent=($dbmspass/$dbmstotal)*100 ."<br>";
  $dbms=round($dbmspasspercent,2)."<br>";



// es pass percentage
$query=" select count(e_es) as estotal from 2_2_pdf";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $estotal=$row['estotal'];
		}
	}
}

$query="select count(e_es) as espass from 2_2_pdf where e_es>=26 and t_es>=40";
$res=mysql_query($query,$conn);
if($res){
	if(is_resource($res)){
		while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
			 $espass=$row['espass'];
		}
	}
}

$espasspercent=($espass/$estotal)*100 ."<br>";
  $es=round($espasspercent,2)."<br>";




// java_sub pass percentage
$query=" select count(e_java_sub) as java_subtotal from 2_2_pdf";
$rjava_sub=mysql_query($query,$conn);
if($rjava_sub){
	if(is_resource($rjava_sub)){
		while($row=mysql_fetch_array($rjava_sub,MYSQL_ASSOC)){
			 $java_subtotal=$row['java_subtotal'];
		}
	}
}

$query="select count(e_java_sub) as java_subpass from 2_2_pdf where e_java_sub>=26 and t_java_sub>=40";
$rjava_sub=mysql_query($query,$conn);
if($rjava_sub){
	if(is_resource($rjava_sub)){
		while($row=mysql_fetch_array($rjava_sub,MYSQL_ASSOC)){
			 $java_subpass=$row['java_subpass'];
		}
	}
}

$java_subpasspercent=($java_subpass/$java_subtotal)*100 ."<br>";
  $java=round($java_subpasspercent,2)."<br>";

  ?>

  
 
  
  <div class="container">
	<div class="row">
	
		 <!-- Skill Bars -->
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow='80.57'; aria-valuemin="0" aria-valuemax="100" >
                    <span class="skill">FLAT<i class="val">80.57%</i></span>
                </div>
            </div>
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="78.29" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill" >DAA<i class="val">78.29%</i></span>
                </div>
            </div>  
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="85.71" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">CO<i class="val">85.71%</i></span>
                </div>
            </div>  
			
			 <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="61.71" aria-valuemin="0" aria-valuemax="100" >
                    <span class="skill">DBMS<i class="val">61.71%</i></span>
                </div>
            </div>
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="86.86" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">ES<i class="val">86.86%</i></span>
                </div>
            </div>  
            
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68.57" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">JAVA<i class="val">68.57%</i></span>
                </div>
            </div>  
			
			
			
	</div>
</div>

  
  
  
</body>
</html>                                		