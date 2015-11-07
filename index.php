<html>
<head>
	<meta charset="UTF-8" />
	<title>Футбольные клубы</title>
	<script type="text/javascript" src="/files/js/jQuery.js"></script>
	<link rel="stylesheet" href="/files/css/style.css">
</head>
<body>
<div id="wrapper">
	<div class="content">
		<div class="header">	
			<h2><a class="logo" href="http://rfpl.org/clubs" target="_blank">Футбольные клубы</a></h2>
		</div>
		<div class="tables">
			<table id="listofclubs"></table>
			<table id="contentsofclub"></table>
		</div>
	</div>
</div>

<script type="text/javascript">
	setInterval(function() {
		$.ajax({
			url: "listofclubs.php",
			success: function(html){ $("#listofclubs").html(html);},
		});
	}, 1000);
</script>
</body>
</html>