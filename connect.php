
<?php
    $servername = "mysql-danielharazim.alwaysdata.net";
    $username = "217198_daniel";
    $password = "Gwiazda20024";
    $dbname = "danielharazim_123";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
