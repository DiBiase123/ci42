<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CI4 ++ CHAR ID .1.0.1</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- MDB CSS -->
	<link href="css/mdb.min.css" rel="stylesheet"/>
	<!-- CSS -->
	<link href="css/cv.css" rel="stylesheet"/>
	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/png" href="../ico/favicon.ico"/>
</head>

<header>
	<?php echo view ('Ultimate/header') ?>
</header>

<body>
<div class="text-center">


 <?= $this->renderSection('content') ?>

		<footer class="text-center">
			<strong>@Copyright DI BIASE </strong>
		</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>
