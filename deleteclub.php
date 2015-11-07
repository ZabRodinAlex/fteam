<?php
require("files/config.php");
$nameofclub = $_POST['nameofclub'];
$connect->query("DELETE FROM `listofclubs` WHERE `nameofclub` = '$nameofclub'")
?>