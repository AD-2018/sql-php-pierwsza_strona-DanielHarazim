<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<div class = "nav">
        <a href="pracownicy/index.php">strona główna</a>
        <br>
        <a href="pracownicy/pracownicyiorganizacja.php">pracownicy organizacja</a>
        <br>
        <a href="pracownicy/funkAgregujaca.php">Funkcje Agregujace</a>
        <br>
        <a href="pracownicy/dataiczas.php">Data i Czas</a>
        <br>
        <a href="formularz/Formularz.html">Formularze</a>
        <br>
        <a href="pracownicy/strona.php">Strona Formularza</a>
    </div>


<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	echo("<li>".$_POST["firstname"]);
	echo("<li>".$_POST["lastname"]);
	echo("<li>".$_POST["city"]);
	echo("<li>".$_POST["phone"]);
	echo("<li>".$_POST["postcode"]);	
	echo("<ul>");
?>
