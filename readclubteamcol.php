<tr>
	<th>Õ¿œ¿ƒ¿ﬁŸ»≈</th>
	<th>œŒÀ”«¿Ÿ»“Õ» »</th>
	<th>«¿Ÿ»“Õ» »</th>
	<th>¬–¿“¿–»</th>
</tr>
<tr class="clubteamcol">
	<td style="display:none"><input type="text" name="club_id"></td>
	<td><pre><textarea type="text" name="winger"></textarea></pre></td>
	<td><textarea type="text" name="halfback"></textarea></td>
	<td><textarea type="text" name="defenders"></textarea></td>
	<td><textarea type="text" name="goalie"></textarea></td>
</tr>
<tr>
	<td colspan="10" class="btnclub"><input type="button" name="updateclubteam" value="ÒÓı‡ÌËÚ¸ ËÁÏÂÌÂÌËˇ"></td>
</tr>
<script type="text/javascript">
$(document).ready( function() {
		$.ajax({
			type: "POST",
			url: "readclubteam.php",
			dataType: 'json',
			data: "nameofclub=" + "<?php echo $_POST['nameofclub']; ?>",
			success: function(data, textStatus, xhr) {
				$('input[name=club_id]').val(data.id);
				$('textarea[name=winger]').val(data.winger);
				$('textarea[name=halfback]').val(data.halfback);
				$('textarea[name=defenders]').val(data.defenders);
				$('textarea[name=goalie]').val(data.goalie);
			}
		});
});
$('input[name=updateclubteam]').click( function () {
	var club_id = $('input[name=club_id]').val();
	$.ajax({
		type: "POST",
		url: "updateclubteam.php",
		data: "club_id=" 		+ club_id
			+ "&winger=" 	+ $('textarea[name=winger]').val()
			+ "&halfback=" 	+ $('textarea[name=halfback]').val()
			+ "&defenders="	+ $('textarea[name=defenders]').val()
			+ "&goalie=" 	+ $('textarea[name=goalie]').val(),
		success:  function(response) {
				alert(response);
			}
	});
});
</script> 