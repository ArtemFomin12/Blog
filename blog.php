<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<?php include 'db.php' ?>
	<?php for($i = 0; $i < count($database); $i++){?>
		<div class="container">
			<?php
				echo '<h2>' . $database[$i]['header'] . '</h2>';
				echo '<p>' . $database[$i]['short_text'] . '</p>';
				echo '<a href="user.php?index=' . $i . '">' . $database[$i]['user'] . '</a><br>';
				echo '<img src="' . $database[$i]['image'] . '"/><br>';
				echo '<a href="page.php?index=' . $i . '">Dalee</a>';
			?>
		</div>
	<?php } ?>
</body>
</html>