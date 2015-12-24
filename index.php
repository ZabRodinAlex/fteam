<html>
<head>
	<meta charset="UTF-8" />
	<title>Футбольные клубы</title>
	<script type="text/javascript" src="/files/jQuery.js"></script>
        <script type="text/javascript" src="/files/chart.js"></script>
	<link rel="stylesheet" href="/files/style.css">
</head>
<body>
<div id="wrapper">
	<div class="content">
		<div class="header">	
			<h2><a class="logo" href="http://rfpl.org/clubs" target="_blank">Футбольные клубы</a></h2>
			<div class="searchform">	
				<input class="searchfield" type="text" placeholder="фамилия футболиста"/>
				<input class="searchbutton" type="submit" value="искать" />
			</div>
		</div>
		<div class="tables">
			<table id="listofclubs"></table>
			<table id="contentsofclub"></table>
		</div>
		<canvas id="charts" style="width:300; height:300; margin:0 0 0 38%;"></canvas>
	</div>
</div>

<script type="text/javascript">
	setInterval(function() {
		$.ajax({
			url: "listofclubs.php",
			success: function(html){ $("#listofclubs").html(html);},
		});
	}, 1000);
	$('.searchbutton').click( function () {
		var searchdata = $('.searchfield').val();
		if ( searchdata ) {
			$.ajax({
				type: "POST",
				url: "search.php",
				data: "searchdata=" + searchdata,
				success: function(html){ $("#contentsofclub").html(html);},
			});
		}
	});
</script>
</body>
</html>