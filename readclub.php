<?php
require("files/config.php");
$nameofclub = $_POST['nameofclub'];

$result = $connect->query("select * from listofclubs where nameofclub = '$nameofclub'");
$row = $result->fetch_object();

// формат JSON:
echo '{"id":"'.$row->id.'",
	"logo":"'.$row->logo_url.'",
	"nameofclub":"'.$row->nameofclub.'",
    "seasoninPL":"'.$row->seasoninPL.'",
	"gamesinPL":"'.$row->gamesinPL.'",
	"victories":"'.$row->victories.'",
	"draws":"'.$row->draws.'",
	"injuries":"'.$row->injuries.'",
	"goals":"'.$row->goals.'",
	"goalsconceded":"'.$row->goalsconceded.'",
    "cleansheets":"'.$row->cleansheets.'"}';
?>