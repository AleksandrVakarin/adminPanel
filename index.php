<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?=password_hash('111', PASSWORD_DEFAULT);?><br>

<?=password_hash('111', PASSWORD_DEFAULT);?><br>

<?=password_hash('111', PASSWORD_DEFAULT);?><br>

<?php

$data = require __DIR__ . '/data/file.php';
print_r($data);

?>

	<div class="container">
		<div class="row">
			<div class="col">
				<a href="admin.php">AdminPage</a>
			</div>
		</div>
	</div>
	
</body>
</html>