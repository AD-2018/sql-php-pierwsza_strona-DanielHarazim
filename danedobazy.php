<!DOCTYPE html>
<html>
<head>
  <title>Dane do bazy</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>
	Dodawanie pracownika<br>
	<form action="insert.php" method="POST">
			Imię<br>
			<input type="text" name="imie"><br>
			Dział<br>
			<input type="number" name="dzial"></br>
			Zarobki<br>
			<input type="number" name="zarobki"></br>
			Data Urodzenia<br>
			<input type="date" name="data_urodzenia"></br>
			<input type="submit" value="dodaj pracownika"><br>
	</form>
<br>
<br>
Usuwanie pracownika<br>
<form action="delete.php" method="POST">
	ID<br>
   <input type="number" name="id_pracownicy"></br>
   <input type="submit" value="Zapisz w zmiennej $_POST['id_pracownicy']">
</form>
<?php
require "connect.php";

$conn= new mysqli($servername,$username,$password,$dbname);  
     
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th><th>Usuń Pracownika</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){    
  echo("<tr>");     
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>'.
'<td>
<form action="delete.php" method="POST">
<input name="id_pracownicy" value="'.$row['id_pracownicy'].'" hidden>
<input type="submit" value="Usuń pracownika">
</form>
</td>');
  echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
