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
	
	<script src="chrono.js"></script>
	<script src="timer.js"></script>
	<script src="cigarette.js"></script>
</head>




<body onload="countcigarette2();tabcigarette();lastcigdate()" style="background: linear-gradient(to bottom right, lightblue, rgba(0,0,0,0));">
    <div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		

<span id="horloge"></span>
<br>
<br>



				<span id="chronotime">00:00:00:000</span>
				<form name="chronoForm">
				<input type="button" name="startstop" value="start!" onClick="chronoStart()" />
				<input type="button" name="reset" value="reset!" onClick="chronoReset()" />				
				</form>


    </p>
	
	
<p>
<div style="float:left;width:50%">
	<!--form action="welcome.php" method="post">
	form action="cigarette.php" method="post"-->
	
	
            <div class="form-group">
                <label>Cigarette</label>
                <input type="text" name="raison" class="form-control" id="idraison">
            </div>    
            <div class="form-group">
                <!--input type="submit" class="btn btn-primary" value="Plus une cigarette" style="width:75%;height:200px">toto</input-->
				
		<!--button type="submit" class="btn btn-primary"  style="width:75%;height:200px"   onClick="chronoStart()" -->
		<button type="submit" class="btn btn-primary"  style="width:75%;height:200px"   onClick="chronoStartButton()" >
				
				<!--span id="chronotime">0:00:00:00</span-->
				
				<!--input type="button" name="startstop" value="start!" onClick="chronoStart()" />
				<input type="button" name="reset" value="reset!" onClick="chronoReset()" /-->
				
				<span id="chronotimebutton">00:00:00</span>
				
				</button>
				
            </div>
    <!--/form-->	
</div>

<strong><span id="count" style="font-size:25px;"></span></strong><br>
<strong style="font-size:25px;">La dernière à (mysql | js) : <span id="lastcigdate" ></span></strong>

</div>
<div style="margin-top:50px;margin-left:850px;font-size:15px;" id="tabcigarette">

</div>
</p>

<!-- <a href="Billy Paul - Your Song.mp3" download> super fichier mp3 à télécharger </a>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>-->

	
</body>
</html>