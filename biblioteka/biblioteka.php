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
	<a href="/pracownicy/index.php">Strona Główna </a>



<?php
require_once ("../connect.php");
$sql = "SELECT autor FROM biblioteka2";
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
$sql = "SELECT tytul FROM biblioteka2";
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
echo ('</table>');
	
$sql = "SELECT autor, tytul FROM biblioteka2";
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
	echo('</select>');
echo ('</table>');
	
$sql = "SELECT * FROM bibl_tytul";
echo("<h3>TYTUŁ</h3>");
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
