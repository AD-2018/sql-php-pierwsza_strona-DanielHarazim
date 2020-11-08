<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
  <h1>Pracownicy</h1>
</head>
<body>
<?php
  $servername = "sql7.freemysqlhosting.net";
  $username = "sql7374585";
  $password = "dDfwp2YyVS";
  $dbname = "sql7374585";
$conn = new mysqli("$servername","$username","$password","$dbname");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);
  



    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['dział'].'</td>');
        echo('</tr>');
      echo "INSERT INTO pracownicy (Imie,zarobki,dział) Values('Dawid','2900','2')";
    }
    


    echo('</table>');


?>
</body>
</html>
