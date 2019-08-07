<?php

// Include config file
require_once "config.php";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$raison=$_GET["raison"];
$timestamp=$_GET["tmstp"];



$sql = "INSERT INTO cigarettetb (raison,timestampjs,unite) VALUES (?,?,?)";

if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sii", $param_raison, $param_tmstp, $param_unite);
			$param_raison = $raison;
			$param_tmstp = $timestamp;
			$param_unite = 1;
			
// Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
               echo " Bien insérée!";
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
		

    
    // Close connection
    mysqli_close($link);
	
	


?>