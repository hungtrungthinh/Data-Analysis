<?php
session_start();
 include("config.php");
?>
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

<!-- alertify -->
<script src="alertify/lib/alertify.js"></script>
<script src="alertify/lib/alertify.min.js"></script>
<script src="alertify/test/specs/alert.test.js"></script>
<script src="alertify/test/specs/confirm.test.js"></script>
<script src="alertify/test/specs/prompt.test.js"></script>
<script src="alertify/test/specs/global.test.js"></script>
<link rel="stylesheet" href="alertify/themes/alertify.default.css" />
<link rel="stylesheet" href="alertify/themes/alertify.bootstrap.css" />
<link rel="stylesheet" href="alertify/themes/alertify.core.css" />
<link rel="stylesheet" href="alertify/example/assets/css/main.css" />

<style>
body {
	background-color:#e8eaed;
	margin:0px;
}
.navbar-inverse{
	background-color:#3b5998;
	border:0px;
	border-radius:0px;
}
#heading{
	color: white;
}
.navbar-collapse .navbar-brand {
    color: white;
}
.navbar-collapse .navbar-brand:hover,
.navbar-collapse .navbar-brand:focus {
    color: white;
}
/* Link */
.navbar-collapse .navbar-nav > li > a {
    color: white;
}
.navbar-collapse .navbar-nav > li > a:hover,
.navbar-collapse .navbar-nav > li > a:focus {
    color: white;
}
.container{
	width:50%;
}
.box{
   width:100%;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   padding:8px 20px 8px 20px;;
   margin-top:0;
   margin-right:auto;
   margin-bottom:0;
   margin-left:auto;
  }
#exampleTextarea{
	resize:none;
	//background-image:url("wide2.jpg");
}
@media  screen and (max-width: 700px) {
    .container{
	   width:100%;
    }
}
#imgfile{
	border:0px;
	background-color:green;
	color:white;
	border-radius:5px;
	padding:10px 6px 10px 6px ;
}

hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
.tabledesign{
	cell-padding:20px;
}
  .first{
  position:absolute;
  width:10%;
  }
  .first li{
  padding-right:10px;
  }
  .second{
  position:relative;
  margin-left:14%;
  width:40%;
  }
  @media  screen and (max-width: 800px) {
     .first{
     width:25%;
    }
    .second{
     margin-left:30%;
     width:60%;
    }
	.container{
		width:100%;
	}
}






.row {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

@media screen{
.row {
 margin-left:0px;
 margin-right:0px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

img{
width:100%;
height:100%;
object-fit:cover;
}

}


 .username{
	font-size:25px;
	padding-top:15px;
	padding-left:15px;
}
.username:hover{
	text-decoration:none;
}
.createdon{
	font-size:15px;
	padding-right:10px;
}
</style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="heading" href="feditprofile.php"><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; else header("Location:login.php");?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="select options.php">Results</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<!-- create post -->


   <div class="container box">
      <h3 align="center"><center>Create Post</center></h3><br />
          <form action="postcontent.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <textarea name="postcontent" class="form-control" id="exampleTextarea" rows="6"></textarea>
              </div>
	          <div class="col-lg-6 col-sm-6 col-12">
                <label class="btn btn-primary">Browse&hellip; <input type="file" name="pictures" style="display:none;"></label>
			    <input type="submit" name="posting" class="btn btn-info" value="Post" />
              </div>
		  </form>
		 <!-- <div class="postmsg"><?php //if(isset($_SESSION['postsuccessmsg'])) echo '<script>alertify.success("Success notification");</script>'.mysql_error();
		 // else if(isset($_SESSION['posterrormsg'])) echo '<script>alertify.error("Error notification");</script>'.mysql_error(); ?></div> -->
  </div>

  <br>

<!-- posts -->


<!-- about tabs -->

</div> <!-- major container closing div -->

<?php
//include("ok.html");
$query=mysql_query("select * from posting order by created_on desc",$conn);
if($query){
	if(is_resource($query)){
		while($row=mysql_fetch_array($query,MYSQL_ASSOC)){

?>

<div class="row" >
    <div class="col-md-4" >
      <div class="thumbnail" >
	  <a style="text-decoration:none;" class="text-left username" href="profile.php" target="_blank"><?php echo $name=ucfirst($row['username']); ?></a>
	  <p class="text-right createdon"><?php echo $row['created_on']; ?></p><hr style="border-top: dashed 1px;" />
	    <div class="caption">
            <?php echo $row['postcontent']; ?>
        </div>
        <a href="" target="_blank">
      <?php  echo   '<img src="data:image/jpeg;base64,'.base64_encode($row['pictures'] ).'"  alt="Lights" style="width:100%; height:400px;">'; ?>
        </a>
      </div>
    </div>
</div>
<?php

	}
  }
}

?>






</body>
</html>
