
<?php
    $servername = "sql7.freemysqlhosting.net";
    $username = "sql7374585";
    $password = "dDfwp2YyVS";
    $dbname = "sql7374585";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
