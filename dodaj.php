<?php 
	session_start();
	if(isset($_POST['logout'])){
		unset($_SESSION['upload']);
	}
?>
<head>
	<meta http-equiv="Content-Language" content="pl">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<title>Upload</title>
	<meta name="Language" content="PL">
	<link rel="Stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" href="ikona.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div class="info"/>
			<h1>Dodaj zdjęcie do albumu <a href='szczenieta.php'>Szczenięta</a></h1>
				<?php
				if(isset($_POST['password'])){
					if($_POST['password']=="Ashanti100$"){
						$_SESSION['upload']=true;?>
					<form action="dodaj.php" method="POST" ENCTYPE="multipart/form-data">
					   Wybierz zdjęcie: <input type="file" name="plik"/><br><br>
					   <input type="submit" name="upload" value="Wyślij zdjęcie"/>
					</form>
					<br><br><form><input type="submit" name="logout" value="Wyloguj"/></form>
					<?php
						if(isset($_POST['upload'])){
							$plik_temp = $_FILES['plik']['tmp_name'];
							$plik_nazwa = $_FILES['plik']['name'];
							if(is_uploaded_file($plik_temp)){
								move_uploaded_file($plik_temp, "assets/puppies/".$plik_nazwa);
							}
							echo "<br>Zdjęcie ".$plik_nazwa. " zostało dodane do albumu <a href='szczenieta.php'>Szczenięta</a>";	
						}					
					}
					else{
						echo "<br>Hasło niepoprawne.";
					}
				}
				else{?>
					<form action="dodaj.php" method="POST">
					   Wpisz hasło: <input type="password" name="password"/><br><br>
					   <input type="submit" name="submit_password" value="Zaloguj"/>
					</form>
				<?php
				}
				?>
		</div>
	</div>
</body>
</html>