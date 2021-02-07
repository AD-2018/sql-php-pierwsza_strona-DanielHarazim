<?php
echo("bibautor.php");
echo "<li>".$_POST['autor'];

require_once("../connect.php");

$sql = "INSERT INTO biblioteka2 (id_autor, autor) 
       VALUES (null, '".$_POST['autor']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:https://php-harazim.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
