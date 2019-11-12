<?php
$servername = "den1.mysql6.gear.host";
$username = "nciteamproject";
$password = "Hu85zKo?_B26";
$dbname = "nciteamproject";

// Create connection
$conn = new mysqli('den1.mysql6.gear.host', 'nciteamproject', 'Hu85zKo?_B26', 'nciteamproject');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$dylan =array();

$sql = "Select collegeID, cName, maleEntrants, femaleEntrants from colleges;";


$stmt = $conn->prepare($sql);


$stmt->execute();


$stmt->bind_result($collegeID,$cName, $maleEntrants, $femaleEntrants);


while($stmt->fetch()){

$temp = [
		'id'=>$collegeID,
		'name'=>$cName,
		'Male'=>$maleEntrants,
		'Female'=>$femaleEntrants
	];

array_push($dylan, $temp);
}


echo json_encode($dylan);








