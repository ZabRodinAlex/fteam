<?php
require("files/config.php");

if($connect->query("update listofclubs set 
						logo_url = 		'".$_POST['logo']."',
						nameofclub = 	'".$_POST['nameofclub']."',
						seasoninPL = 	'".$_POST['seasoninPL']."',
						gamesinPL = 	'".$_POST['gamesinPL']."',
						victories = 	'".$_POST['victories']."',
						draws = 		'".$_POST['draws']."',
						injuries =  	'".$_POST['injuries']."',
						goals = 		'".$_POST['goals']."',
						goalsconceded = '".$_POST['goalsconceded']."',
						cleansheets = 	'".$_POST['cleansheets']."'
				    where
						id = 			'".$_POST['club_id']."'"))
 echo "Изменения успешно сохранены!";
else echo "Что-то пошло не так!";
?>