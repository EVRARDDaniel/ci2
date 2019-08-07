<?php

// Include config file
require_once "config.php";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT horodatage, timestampjs FROM `cigarettetb` WHERE unite=1 order by id desc LIMIT 0, 1" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
		$row = mysqli_fetch_array($result);
		
		
        echo $row[0]."toto".$row[1];
		
		//echo $row[1];
		
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
