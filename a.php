<!DOCTYPE html>
<html>
<body>
    <p>This is a.php</p>
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:xana-database.database.windows.net,1433; Database = xana_sql", "youna", "ledsql123#");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "<p>SUCCESS</p>"
//    $sql = "SELECT * FROM member;";
//    $res = $conn ->query($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
</body>
</html>
