<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daniel Harazim</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-DanielHarazim">github</a>
    <br>
    <a href="index.php">Pracownicy</a>
    <a href="funkAgregujaca.php">Funkcje agregujące</a>
    <a href="DataiCzas.php">Data i Czas</a>
     <a href="formularz.html">Formularz</a>
</body>
</html>
<?php
    require_once("connect.php");

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //---------------------------------------------------------------

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND (dzial = 1 OR dzial = 4)";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 2</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //---------------------------------------------------------------

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND imie like '%a'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 3</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //---------------------------------------------------------------

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND imie not like '%a'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 4</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");
