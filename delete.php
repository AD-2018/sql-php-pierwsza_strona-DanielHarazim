<?php
echo("Delete<br>");
echo $_POST['id'];

$servername = "mysql-danielharazim.alwaysdata.net";
$username = "217198_daniel";
$password = "Gwiazda20024";
$dbname = "danielharazim_123";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Pracownik WHERE id= $_POST['id'];";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
