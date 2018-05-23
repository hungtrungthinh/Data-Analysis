<?php
session_start();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}

.container{
	width:70%;
}
.edit{
	width:100%;
}
@media  screen and (max-width: 700px) {
    .container{
	   width:100%;
    }
}
@media  screen (min-width: 700px) and (max-width: 1200px) {
    .container{
	   width:70%;
    }
}


  .first{
  position:absolute;
  width:10%;
  }
  .first li{
  padding-right:0px;
  }
  .second{
  position:relative;
  margin-left:14%;
  width:70%;
  }
  @media  screen and (max-width: 700px) {
     .first{
     width:25%;
    } 
    .second{
     margin-left:30%;
     width:75%;
	 padding-left:20px;
    }
	body{
		margin:0px;
	}
	.container{
		margin:0px;
	}
}
</style>

<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>

</body style="background-color:#e8eaed;">
<div class="container">

<div class="col-lg-6 col-sm-6 edit">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="watch.jpg">
        </div>
        <div class="card-info"> <span class="card-title"><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; else header("Location:login.php");?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                <div class="hidden-xs">Edit Profile</div>
            </button>
        </div>
       <!-- <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div> -->
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          
		  
		  
		  <h2>Profile</h2>
  <p>Complete details like academic  details journals published research areas inventions etc., .</p>
  
  <ul class="nav nav-pills nav-stacked first">
    <li class="active"><a data-toggle="pill" href="#home">Education</a></li>
    <li><a data-toggle="pill" href="#menu1">Journals</a></li>
    <!-- <li><a data-toggle="pill" href="#menu2">Menu</a></li> -->
  </ul>
  
  <div class="tab-content nav-stacked second">
    <div id="home" class="tab-pane fade in active">
      <h3>Education</h3>
      <p>details like studied at , degrees received , current research topic etc., </p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Journals</h3>
      <p>list of journals published in the respective years</p>
    </div>
     <!--<div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Menu 4</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Menu 5</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu6" class="tab-pane fade">
      <h3>Menu 6</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>	-->
	
  </div>
		  
		  
		  
		  
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3>Edit profile</h3>
		      <form action="feditprofile.php" method="post">
		   <div class="input-group">
            <input type="text" name="password" placeholder="Change Your Password" class="form-control" > 
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Change</button>
            </span>
           </div>
		   </form>
		     
        </div>
        <!-- <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div> -->
      </div>
    </div>
    
    </div>


</div>	
 </body>   
	
	
	
	<?php
	include("config.php");
	if(isset($_SESSION['username'])){
		if(isset($_POST['password'])){
			//echo $_POST['password'];
			$password=$cpassword=$_POST['password'];
			
			$query="insert into signup(password,cpassword) values('$password','$cpassword') ";
		    $result=mysql_query($query,$conn);
			if(is_resource($result)){
				while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
					//echo "Your New password is : ".$password.mysql_error();
				}
			}
		}
	}
	
	?>