<tr>
	<th>Эмблема</th>
	<th>Название</th>
	<th>СЕЗОНОВ В ПРЕМЬЕР-ЛИГЕ</th>
	<th>ИГР В ПРЕМЬЕР-ЛИГЕ</th>
	<th>ПОБЕД</th>
	<th>НИЧЬИХ</th> 
	<th>ПОРАЖЕНИЙ</th>
	<th>ЗАБИТЫХ МЯЧЕЙ</th>
	<th>ПРОПУЩЕННЫХ МЯЧЕЙ</th>
	<th>СУХИХ МАТЧЕЙ</th>
</tr>
<tr class="clubcol">
	<td style="display:none"><input type="text" name="club_id"></td>
	<td><input type="text" name="logo"></td>
	<td><input type="text" name="nameofclub"></td>
	<td><input type="text" name="seasoninPL"></td>
	<td><input type="text" name="gamesinPL"></td>
	<td><input type="text" name="victories"></td>
	<td><input type="text" name="draws"></td>
	<td><input type="text" name="injuries"></td>
	<td><input type="text" name="goals"></td>
	<td><input type="text" name="goalsconceded"></td>
	<td><input type="text" name="cleansheets"></td>
</tr>
<tr>
	<td colspan="10" class="btnclub"><input type="button" name="updateclub" value="сохранить изменения"></td>
</tr>
<script type="text/javascript">
$(document).ready( function() {
		$.ajax({
			type: "POST", url: "readclub.php", dataType: 'json', 
			data: "nameofclub=" + "<?php echo $_POST['nameofclub']; ?>",
			success: function(data, textStatus, xhr) {
				$('input[name=club_id]').val(data.id);
				$('input[name=logo]').val(data.logo);
				$('input[name=nameofclub]').val(data.nameofclub);
				$('input[name=seasoninPL]').val(data.seasoninPL);
				$('input[name=gamesinPL]').val(data.gamesinPL);
				$('input[name=victories]').val(data.victories);
				$('input[name=draws]').val(data.draws);
				$('input[name=injuries]').val(data.injuries);
				$('input[name=goals]').val(data.goals);
				$('input[name=goalsconceded]').val(data.goalsconceded);
				$('input[name=cleansheets]').val(data.cleansheets);
			}
		});
});
$('input[name=updateclub]').click( function () {
	var club_id = $('input[name=club_id]').val();
		$.ajax({
			type: "POST", url: "updateclub.php", 
			data: "club_id=" + club_id
				+ "&logo=" 	+ $('input[name=logo]').val()
				+ "&nameofclub=" 	+ $('input[name=nameofclub]').val()
				+ "&seasoninPL="	+ $('input[name=seasoninPL]').val()
				+ "&gamesinPL=" 	+ $('input[name=gamesinPL]').val()
				+ "&victories=" 	+ $('input[name=victories]').val()
				+ "&draws=" 		+ $('input[name=draws]').val()
				+ "&injuries=" 		+ $('input[name=injuries]').val()
				+ "&goals=" 		+ $('input[name=goals]').val()
				+ "&goalsconceded=" + $('input[name=goalsconceded]').val()
				+ "&cleansheets=" 	+ $('input[name=cleansheets]').val(),
			success:  function(response) { alert(response); }
		});
	});
</script> 