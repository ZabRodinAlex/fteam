<?php
require("files/config.php"); 
$nameofclub = $_POST['nameofclub'];

$result = $connect->query("select * from listofclubs where nameofclub = '$nameofclub'");
$row = $result->fetch_object();

//������ JSON:
// "����1":"�������1", "����2":"�������2" � �.�.
echo '{"id":"'.$row->id.'",
	"winger":"'.$row->winger.'",
	"halfback":"'.$row->halfback.'",
    "defenders":"'.$row->defenders.'",
    "goalie":"'.$row->goalie.'"}';
?>