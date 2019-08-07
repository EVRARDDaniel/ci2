<?php

//////////////////////////////////////////////////////////////////////////////////////<div style="margin-top:20px;margin-left:20px;">

require_once "config.php";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// SELECT count(*) FROM `cigarettetb` GROUP by month(horodatage)
// SELECT count(*) FROM `cigarettetb` GROUP by month(horodatage) order by id desc limit 0,1

//$sql = "SELECT count(*) as nb, CAST(horodatage AS DATE) as DATE FROM `cigarettetb` GROUP BY CAST(horodatage AS DATE)" ;
$sql = "SELECT sum(unite) as nb, CAST(horodatage AS DATE) as DATE FROM `cigarettetb` GROUP BY CAST(horodatage AS DATE)" ;

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border:2px solid red'>";
            echo "<tr style='border:2px solid red'>";
                echo "<th style='border:2px solid red;padding:5px'>date</th>";
                echo "<th style='border:2px solid red ;padding:5px'>nombre</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr style='border:2px solid red'>";
              echo "<td style='border:2px solid red; ;padding:5px'> <a href='". $row['DATE'] ."' target='_blank' >". $row['DATE'] ."</a></td>"; 
			  echo "<td style='border:2px solid red'>" . $row['nb'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
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