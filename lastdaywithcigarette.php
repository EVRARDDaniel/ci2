<?php

// Include config file
require_once "config.php";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//CAST(horodatage AS DATE) as DATE

//SELECT CAST(horodatage AS DATE) as DATE, timestampjs FROM `cigarettetb` WHERE 1 order by id desc LIMIT 0, 1

$sql = "SELECT CAST(horodatage AS DATE) as DATE, timestampjs FROM `cigarettetb` WHERE 1 order by id desc LIMIT 0, 1";

//$sql = "SELECT horodatage, timestampjs FROM `cigarettetb` WHERE 1 order by id desc LIMIT 0, 1" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
		$row = mysqli_fetch_array($result);
				
        // echo $row[0]."<br>".$row[1]." milisecondes<br>";
		
		$pieces = explode("-", $row[0]);
		
		// echo $pieces[0]."<br>"; // 2019
		// echo $pieces[1]."<br>"; // 07
		// echo $pieces[2]."<br>"; // 31
		
		$a = mktime(0, 0, 0, $pieces[1], $pieces[2], $pieces[0]);
		// echo $a." secondes<br>" ;
		
		$b = time();
		// echo $b." secondes<br>";
		// echo 'Y-m-d: '. date('Y-m-d', $b) ."\n";
		// echo "<br> toto <br>";
		// echo 'Y-m-d: '. date('Y-m-d') ."\n";
		
		// echo "<br> toto <br>";
		
		$nb = $b - $a;
		// echo $nb."<br>";
		// echo $nb/86400 ."<br>";
		$flnb = floor($nb/86400);
		// echo $flnb."<br>"; 
		
		// echo 'Y-m-d: '. date('Y-m-d H:i:s', $a) ."\n";
		
		for($i = 1;$i <= $flnb;$i++)
			{
				
				$horodatage = date('Y-m-d H:i:s', $a+$i*86400);
				
				$timestamp = ($a+$i*86400)*1000;
						
				$sql2 = "INSERT INTO cigarettetb(horodatage,timestampjs,unite) VALUES ('$horodatage',$timestamp,0)";	
				
//$sql = "INSERT INTO employee ". "(emp_name,emp_address, emp_salary,join_date) ". "VALUES('$emp_name','$emp_address',$emp_salary, NOW())";
				
				$result2 = mysqli_query($link, $sql2);
				
				echo " ".$result2." ";
				
			}
		
		
		
		
		
		//1564783200  https://www.epochconverter.com/   67 et 68
		//1564818607414
	
		
		
		
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