<?php

// Include config file
require_once "config.php";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
date_default_timezone_set ("Europe/Paris");

$date1=date('Y-m-d H:i:s');
$date2=date('Y-m-d');



$sql = "SELECT sum(unite) FROM cigarettetb where horodatage >= '$date2'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
		$row = mysqli_fetch_array($result);
		
        echo $row[0];
		//echo '<br>';
		//echo date('Y-m-d H:i:s'); 
		//echo '<br>';
		
		
		
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>
