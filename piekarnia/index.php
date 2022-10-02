<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Zamówienie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	
	$liczba_paczkow=$_POST['liczba_paczkow'];
	$liczba_grebieni=$_POST['liczba_grzebieni'];
	$cena_paczkow=$liczba_paczkow*0.99;
	$cena_grzebieni=$liczba_grebieni*1.29;
	$suma=$cena_paczkow+$cena_grzebieni;

echo<<<END

	<h1>PODSUMOWANIE ZAMÓWIENIA</h2>
	<table id="wyniki">
		<tr>
			<td>Pączek (0.99PLN/szt)</td>
			<td>$liczba_paczkow</td>
		</tr>
				<tr>
			<td>Grzebień (1.29PLN/szt)</td>
			<td>$liczba_grebieni</td>
		</tr>
				<tr>
			<td>SUMA</td>
			<td>$suma</td>
		</tr>
	</table>
	<a href="index.html">Powrót do strony głównej</a>
END;

?>
</body>
</html>