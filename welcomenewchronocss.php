<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cigarette</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="chrononew.js"></script>
	<script src="timer.js"></script>
	<script src="cigarette.js"></script>
	<!--
	script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script
	
	-->
	<script>
	$(document).ready(function(){ $("#tabcigarette").scrollTop(900); });
	</script>
	
</head>




<body onload="lastdaywithcigarette();countcigarette2();tabcigarette();lastcigdate();" style="background: linear-gradient(to bottom right, lightblue, rgba(0,0,0,0));">
    
	<div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    
	<div>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		
		<span id="horloge"></span><br><br>
				
		<span id="chronotime">00:00:00:000</span><br><br>
		<form name="chronoForm">
		<input type="button" name="startstop" value="start!" onClick="chronoStart()" />
		<input type="button" name="reset" value="reset!" onClick="chronoReset()" />				
		</form>
    </div>
		
				
		
		<div style="float:left;width:70%">
			<form onSubmit="chronoStartButton();return false;">
				<div class="form-group">
					<label>Cigarette</label>
					<input type="text" name="raison" class="form-control" id="idraison">
				</div>    
				<div class="form-group">
                	<button type="submit" class="btn btn-primary"  style="width:75%;height:200px" >
						<span id="chronotimebutton">00:00:00</span>
					</button>
				</div>
			</form>
		<br><br><br><br>
		<strong><span id="count" style="font-size:25px;"></span></strong>&nbsp;&nbsp;&nbsp;&nbsp;
		<strong><span id="repinsert" style="font-size:25px;"></span></strong>
		<br><br><br><br>
		<strong style="font-size:25px;">La dernière à (mysql | js) : <span id="lastcigdate" ></span></strong><br><br><br><br>
		
			<div id = "lastdaywithcigarette"></div>
					
		</div>
		
		<!--div style="margin-top:50px;margin-left:850px;font-size:15px;" id="tabcigarette"-->
		
		
		
		<div style="margin-top:20px;margin-left:1000px;font-size:15px;background-color:lightblue;width:200px;height:400px;overflow:auto;" id="tabcigarette">
		</div>
		
		 
		
		
			
</body>
</html>