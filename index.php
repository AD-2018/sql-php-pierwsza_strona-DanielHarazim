<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $servername = "464862";
    $username = "217198";
    $password = "Danielharazim123";
    $dbname = "217198";
      echo('</table>');
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn = new mysqli("$servername","$username","password","dbname");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }


?>
</body>
</html>
