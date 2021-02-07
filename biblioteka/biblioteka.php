<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/style.css">
  <title>Daniel Harazim</title>
</head>
<body>
	<div class="container">
<div class="menu blue">
<a href="https://github.com/AD-2018/sql-php-pierwsza_strona-DanielHarazim">Github </a>
</div>
	<div class="tresc green">
  <h3>Dodawanie Autora</h3>
	<form action="/biblioteka/insertautor.php" method="POST">
		<label>Autor</label><input type="text" name="autor"></br>
		<input type="submit" value="Dodaj Autora">
	</form>
  <h3>Dodawanie Tytułu</h3>
	<form action="/biblioteka/inserttytul.php" method="POST">
		<label>Tytul</label><input type="text" name="tytul"></br>
		<input type="submit" value="Dodaj Tytul">
	</form>

<?php
require_once ("../connect.php");

$sql = "SELECT * FROM biblioteka2";
echo ("<h3>Autorzy</h3>");
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok</br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<label for="bibl_autor">Wybierz autora: </label>');	
echo('<select name="Autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_autor'].'">');
        echo($row['autor']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT * FROM biblioteka2";
echo("<h3>Książki</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok</br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<label for="bibl_tytul">Wybierz tytuł: </label>');	
echo('<select name="tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_tytul'].'">');
        echo($row['tytul']);
        echo("</option>"); 
    }
echo('</select>');
	
$sql = "SELECT * FROM biblioteka2";
echo("<h3>Powiązania</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabela">');
echo ("<tr><th>id_book</th><th>id_autor</th><th>id_tytul</th><th>wypozyczenia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['id_book']."</td><td>".$row['id_autor']."</td><td>".$row['id_tytul']."</td><td>".$row['wypoz']."</td>");
    echo ('</tr>');
}
echo ('</table>');
	
$sql = "SELECT autor, tytul FROM biblioteka2, tytul, autor WHERE tytul.id_tytul=tytul.id_tytul AND autor.id_autora=tytul.id_autora";
echo("<h3>AUTORZY I KSIĄŻKI</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabela">');
echo ("<tr><th>autor</th><th>tytul</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['autor']."</td><td>".$row['tytul']."</td>");
    echo ('</tr>');
}
echo ('</table>');
?>
	</div>
	</div>
</body>
</html>
