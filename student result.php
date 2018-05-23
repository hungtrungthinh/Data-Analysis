

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
<style>
.table-responsive{
	width:60%;
	margin:auto;
}
@media  screen and (max-width: 700px){
.table-responsive{
	width:94%;
	margin:auto;
}	
}
</style>
</head>

<body>
<div clss="container">
<div class="table-responsive" >
<table class="table table-condensed table-striped table-bordered table-hover tabledesign">
  <caption>
    <h1>II Year II Semester Results</h1>
	<h1><?php //echo $_SESSION['rollno']; ?></h1>
  </caption >
  <thead>
    <tr class="info"><th colspan="10"><center><b><?php echo $row['hallticket_no']; ?></b></center></th></tr>
    <tr class="info">
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Internal Marks</th>
      <th scope="col">External Marks</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Total Credits</th>
	  <th scope="col">Backlogs</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>12424</td>
      <th scope="row">DBMS LAB</th>
      <td><?php echo $row['i_dbms_lab']; ?></td>
      <td><?php echo $row['e_dbms_lab']; ?></td>
      <td><?php echo $row['t_dbms_lab']; ?></td>
      <td><?php echo $row['c_dbms_lab']; ?></td>
	  <td rowspan="9" ><center><?php echo $row['backlogs']; ?></center></td>
    </tr>

    <tr>
      <td>12429</td>
      <th scope="row">JAVA LAB </th>
      <td><?php echo $row['i_java_lab']; ?></td>
      <td><?php echo $row['e_java_lab']; ?></td>
      <td><?php echo $row['t_java_lab']; ?></td>
      <td><?php echo $row['c_java_lab']; ?></td>
    </tr>

    <tr>
      <td>12434</td>
      <th scope="row">GS</th>
      <td><?php echo $row['i_gs']; ?></td>
      <td><?php echo $row['e_gs']; ?></td>
      <td><?php echo $row['t_gs']; ?></td>
      <td><?php echo $row['c_gs']; ?></td>
    </tr>

    <tr>
      <td>124AG</td>
      <th scope="row">FLAT</th>
      <td><?php echo $row['i_flat']; ?></td>
      <td><?php echo $row['e_flat']; ?></td>
      <td><?php echo $row['t_flat']; ?></td>
      <td><?php echo $row['c_flat']; ?></td>
    </tr>

    <tr>
      <td>124CB</td>
      <th scope="row">DAA</th>
      <td><?php echo $row['i_daa']; ?></td>
      <td><?php echo $row['e_daa']; ?></td>
      <td><?php echo $row['t_daa']; ?></td>
      <td><?php echo $row['c_daa']; ?></td>
    </tr>
	
	 <tr>
      <td>124CN</td>
      <th scope="row">CO</th>
      <td><?php echo $row['i_co']; ?></td>
      <td><?php echo $row['e_co']; ?></td>
      <td><?php echo $row['t_co']; ?></td>
      <td><?php echo $row['c_co']; ?></td>
    </tr>
	
	 <tr>
      <td>124CQ</td>
      <th scope="row">DBMS</th>
      <td><?php echo $row['i_dbms_sub']; ?></td>
      <td><?php echo $row['e_dbms_sub']; ?></td>
      <td><?php echo $row['t_dbms_sub']; ?></td>
      <td><?php echo $row['c_dbms_sub']; ?></td>
    </tr>
	
	 <tr>
      <td>124CW</td>
      <th scope="row">ES </th>
      <td><?php echo $row['i_es']; ?></td>
      <td><?php echo $row['e_es']; ?></td>
      <td><?php echo $row['t_es']; ?></td>
      <td><?php echo $row['c_es']; ?></td>
    </tr>
	
	 <tr>
      <td>124CX</td>
      <th scope="row">JAVA </th>
      <td><?php echo $row['i_java_sub']; ?></td>
      <td><?php echo $row['e_java_sub']; ?></td>
      <td><?php echo $row['t_java_sub']; ?></td>
      <td><?php echo $row['c_java_sub']; ?></td>
    </tr>

  </tbody>
</table>
</div>
</div>
</body>
</html>


