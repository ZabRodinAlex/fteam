<?php
require("files/config.php");
$club_id = $_POST['club_id'];
$winger = $_POST['winger'];
$halfback = $_POST['halfback'];
$defenders = $_POST['defenders'];
$goalie = $_POST['goalie'];

if($connect->query("update listofclubs set 
								winger = '$winger', 
                                halfback = '$halfback', 
                                defenders = '$defenders',	
								goalie = '$goalie'
                             where
                                id = '$club_id'"))
 echo "Изменения успешно сохранены! ";
else
    echo "ОШИБКА В ЗАПРОСЕ!";
?>