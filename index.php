<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabeleczkaaaaa</h1>
<?php
    $servername = "sql7.freemysqlhosting.net";
    $username = "daniel.harazim123@gmail.com";
    $password = "dDfwp2YyVS";
    $dbname = "sql7374585";

    $conn = new mysqli("$servername","$username","$password","$dbname");
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";

    $sql = "SELECT * FROM pracownicy";
        if ($conn->query($sql) === TRUE) {
            
             echo "ok";     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   $wynik = mysqli_query($conn, $sql);

     echo('<table border="1">');
     echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
       echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');    }
      echo('</table>');

?>
</body>
</html>
