<?php
require("files/config.php"); 
$nameofclub = $_POST['nameofclub'];

$result = $connect->query("select * from listofclubs where nameofclub = '$nameofclub'");
$row = $result->fetch_object();

//формат JSON:
// "ключ1":"значени1", "ключ2":"значени2" и т.д.
echo '{"id":"'.$row->id.'",
	"winger":"'.$row->winger.'",
	"halfback":"'.$row->halfback.'",
    "defenders":"'.$row->defenders.'",
    "goalie":"'.$row->goalie.'"}';
?>