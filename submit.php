<?php 

include("db.php");
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$address = $_POST['address'];
$desc = $_POST['description'];
$cat = $_POST['category'];
$date = date('Y-m-d');
$title = $_POST['title'];


$sql ="insert into local_spot(lat,lng,category,address,description,submit_date,title) values ('$lat','$lng','$cat','$address', '$desc','$date','$title')";
	try{
		$result = mysql_query($sql);
		
		if($result==1){
			$message = "Succeeded to insert A Local Spot record";
		}else{
			$message = "Failed to insert A Local Spot record" ;
		}
	}
	catch(Exception $e){
		$message =  $e.getMessage();	
	}
	
	echo($message);


?>