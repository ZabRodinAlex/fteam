<?php
require("files/config.php");
$result = $connect->query("select logo_url, nameofclub from listofclubs");
$colResult = $result->num_rows;
if($colResult){
?>		
	<tr>
		<th colspan="4"> ���� </th>
		<th colspan="4"> ���� </th>
	</tr>
<?php	
	for ($i = 0; $i < ($colResult - 1)/2; $i++ ) {
		$row = $result->fetch_object();
		echo '<tr>';
		echo '<td class="club-logo"><img src='.$row->logo_url.'></td>';
		echo '<td class="club-name"><a href="#" title='.$row->nameofclub.'>'.$row->nameofclub.'</a>';
		echo '<td class="deleteclub"><input type="button" name="clubteam" title='.$row->nameofclub.' value="������"></td>';
		echo '<td class="deleteclub"><input type="button" name="deleteclub" title='.$row->nameofclub.' value="�������"></td>';		
		$row = $result->fetch_object();
		echo '<td class="club-logo"><img src='.$row->logo_url.'></td>';
		echo '<td class="club-name"><a href="#" title='.$row->nameofclub.'>'.$row->nameofclub.'</a>';
		echo '<td class="deleteclub"><input type="button" name="clubteam" title='.$row->nameofclub.' value="������"></td>';
		echo '<td class="deleteclub"><input type="button" name="deleteclub" title='.$row->nameofclub.' value="�������"></td>';
		echo '</tr>';
	}
	if ( $colResult%2 != 0 ) {
		$row = $result->fetch_object();
		echo '<tr>';
		echo '<td class="club-logo"><img src='.$row->logo_url.'></td>';
		echo '<td class="club-name"><a href="#" title='.$row->nameofclub.'>'.$row->nameofclub.'</a>';
		echo '<td class="deleteclub"><input type="button" name="clubteam" title='.$row->nameofclub.' value="������"></td>';
		echo '<td class="deleteclub"><input type="button" name="deleteclub" title='.$row->nameofclub.' value="�������"></td>';
		echo '</tr>';
	}
}	else echo '<tr><td> ��� �� ����� ������ � ������ � ����. </td></tr>';
	echo '<tr><td colspan="8" class="btnclub"><input type="button" name="addclub" value="�������� ������"></td></tr>';
?>

<script type="text/javascript">
	$('input[name=addclub]').click( function () {
		var nameofclub = prompt("�������� �����:", "");
		if (!nameofclub)  alert("������! \n������ ��������.");
		else if (nameofclub.indexOf(' ') + 1) alert("������! \n�� ����������� �������.");
		else if (nameofclub) {
			$.ajax({
				type: "POST", url: "addclub.php", data: "nameofclub=" + nameofclub,
				success:  function(response) { alert(response); }
			});
		}
	});
	$('input[name=deleteclub]').click( function () {
		var nameofclub = $(this).attr("title");
		if (confirm ("�� ������������� ������ ������� ������ � ����� '" + nameofclub + "'?")) {
			$.ajax({
				type: "POST", url: "deleteclub.php", data: "nameofclub=" + nameofclub,
			});
		}
	});
	$('input[name=clubteam]').click( function () {
		var nameofclub = $(this).attr("title");
		$.ajax({
			type: "POST",
			url: "readclubteamcol.php",
			data: "nameofclub=" + nameofclub,
			success: function(html){ $("#contentsofclub").html(html);},
		});
	});
	$('a').click( function () {
		var nameofclub = $(this).attr("title");
		$.ajax({
			type: "POST", url: "readclubcol.php", data: "nameofclub=" + nameofclub,
			success: function(html){ $("#contentsofclub").html(html);},
		});
	});
</script>