<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<title>Exemple d'affichage de plusieurs images</title>
	<style>

    </style>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['nom'])) {
  header('Location: test3.php');
  exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Page avec 6 boutons et des liens</title>
	<link rel="stylesheet" href="style21.css">
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<h1>soumission</h1>
		<div class="button-container">
			<a href="" class="button" onclick="buttonClick(1)">administration</a>
			<a href="deconnection.php" class="button" onclick="buttonClick(5)">Lougout</a>
		</div>
	</div>
</body>
</html>
     

