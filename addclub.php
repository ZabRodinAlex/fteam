<?php
require("files/config.php");
$nameofclub = $_POST['nameofclub'];

if($connect->query("INSERT INTO  listofclubs (id, nameofclub, seasoninPL, gamesinPL, victories, draws, injuries, goals, goalsconceded, cleansheets) VALUES (NULL, '$nameofclub', '', '', '', '', '', '', '', '');"))
	   echo "Запись о клубе '" . $nameofclub . "' успешно добавлена!";
else   echo "ОШИБКА В ЗАПРОСЕ!";
?>