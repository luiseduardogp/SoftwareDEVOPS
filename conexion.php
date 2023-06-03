<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:devopsdatabaseunimag.database.windows.net,1433; Database = devopsdatabase", "devopsdatabaseunimag", "{Luis99080704247}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "devopsdatabaseunimag", "pwd" => "{your_password_here}", "Database" => "devopsdatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:devopsdatabaseunimag.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
