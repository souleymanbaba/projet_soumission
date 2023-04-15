<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<style type="text/css">
		body {
			background-color: #f2f2f2;
		}
		form {
			background-color: skyblue;
			max-width: 400px;
			margin: 50px auto;
			padding: 20px;
			box-shadow: 0px 0px 10px #cccccc;
			border-radius: 15px;
		}
		h2 {
			margin-top: 0px;
			margin-bottom: 20px;
			color: #333333;
			text-align: center;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #666666;
			font-weight: bold;
		}
		input[type="text"], select {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #cccccc;
			border-radius: 13px;
			box-sizing: border-box;
			font-size: 16px;
			color: #666666;
		}
        input[type="password"], select {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #cccccc;
			border-radius: 3px;
			box-sizing: border-box;
			font-size: 16px;
			color: #666666;
		}
        
		input[type="submit"] {
			background-color: #333333;
			color: #ffffff;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
		}
    body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			color: #333;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}

		h1 {
			text-align: center;
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"],
		select {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
	<form method="post" action="validation_de_compte.php">
		<h2>inscrire</h2>
	
        <label for="email">logine :</label>
			<input type="text" id="email" name="nom" placeholder="Votre email">
            <label for="nom">pass word :</label>
		<input type="password" id="nom" name="pwd" required placeholder="Votre mot de pass">
		<input type="submit" value="Envoyer">
	</form>
</body
