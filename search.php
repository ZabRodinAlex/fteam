<?php
$host = "localhost";
	$user = "team"; 
	$pass = "team"; 
	$name = "team";
	

mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($name) or die(mysql_error());
$searchdata = mysql_real_escape_string($_POST['searchdata']);
$searchresult = mysql_query("SELECT nameofclub FROM listofclubs 
				WHERE winger LIKE '%$searchdata%' OR halfback LIKE '%$searchdata%' 
			OR defenders LIKE '%$searchdata%' OR goalie LIKE '%$searchdata%'");
if  (mysql_num_rows($searchresult) > 0) {
while ($row = mysql_fetch_array($searchresult, MYSQL_BOTH))
    echo "<tr><th>Футболист ' $searchdata ' играет за клуб ' " . $row["nameofclub"] . " ' </th></tr>";
} else
    echo "<tr><th>По фамилии $searchdata футболистов не найдено.</th></tr>";
?>