<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Harazim</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <div class="tytul">
            <a href="https://php-harazim.herokuapp.com/biblioteka/biblioteka.php" class="github-link">github</a>
            <div class="imie">
                <h1 class="name">Dawid Bączkiewicz nr1</h1>
            </div>
        </div>
    </div>
    <div class="box">
    <div class="nav">
        <a href="../index.php">Pracownicy</a><br>
        <a href="../pracownicy/funkAgregujaca.php">Funkcje agregujące</a><br>
        <a href="../pracownicy/orgPracownicy.php">Organizacja i pracownicy</a><br>
        <a href="../pracownicy/dataczas.php">Data i czas</a><br>
        <a href="../pracownicy/formularz.html">Formularz</a><br>
        <a href="../pracownicy/danedobazy.php">Dane do bazy</a><br>
        <a href="ksiazki.php">Ksiazki</a><br>
        <a href="../flexbox/flexbox.html">Flexbox</a><br>
        </div>
        <div class="strona">
        <form action="insert-autor.php" method="POST" class="form">
	        <input type="text" name="autor" placeholder="Autor"><br>
            <input type="submit" value ="Dodaj Autora">
    </form>
    <form action="insert-tytul.php" method="POST" class="form">
	        <input type="text" name="tytul" placeholder="Tytuł"><br>
            <input type="submit" value ="Dodaj Tytuł">
</form>
    <br>
    <br>
        <?php
require_once("connect.php");

$sql = "SELECT * FROM biblz_autor";

$result = mysqli_query($conn, $sql);

echo('<select name="autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_autor'].'">');
        echo($row['autor']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT * FROM bibl_tytul";

$result = mysqli_query($conn, $sql);

echo('<select name="tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_tytul'].'">');
        echo($row['tytul']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT * FROM bibl_autor";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblAutor</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>Autor</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['autor']."</td>");
        echo("</tr>");
    };
echo("</table>");

//--------------------------------------------------------------------

$sql = "SELECT * FROM bibl_tytul";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblTytul</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>Tytul</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
        echo("</tr>");
    };
echo("</table>");

//--------------------------------------------------------------------

$sql = "SELECT * FROM biblAutor_biblTytul";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblAutor_biblTytul</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>biblAutor_id</th><th>biblTytul_id</th><td>biblWypoz</td>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['biblAutor_id']."</td><td>".$row['biblTytul_id']."</td><td>".$row['biblWypoz']."</td>");
        echo("</tr>");
    };
echo("</table>");

//--------------------------------------------------------------------
		
$sql = "SELECT * FROM bibl_tytul, bibl_autor WHERE bibl_tytul.id = bibl_autor.id"

$result = mysqli_query($conn, $sql);

echo("<h1>BiblAutor_biblTytul</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>Autor</th><th>biblTytul</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['autor']."</td><td>".$row['tytul']."</td>");
        echo("</tr>");
    };
echo("</table>");
?>
        </div>
    </div>
</body>
</html>
© 2021 GitHub, Inc.
