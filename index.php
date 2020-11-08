<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabeleczkaaaaa</h1>
<?php
    $servername = "sql7.freemysqlhosting.net";
    $username = "sql7374585";
    $password = "dDfwp2YyVS";
    $dbname = "sql7374585";

    $conn = new mysqli("$servername","$username","$password","$dbname");
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";

    $sql ="select * from pracownicy";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"');
    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ echo("<tr>"); 
                                            {echo("<tr>");
      echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>")
                                            echo("<tr>"); echo("</tr>");}
        if ($conn->query($sql) === TRUE) {
            
             echo "ok";     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
                                            echo('</table>'); ?>

</body>
</html>
