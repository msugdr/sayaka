<!DOCTYPE html>
<html>
<body>
    <p>This is a.php</p>
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:xana-database.database.windows.net,1433; Database = xana_sql", "youna", "ledsql123#");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>SUCCESS</p>";
    $sql = "SELECT * FROM member";
 $getResults= sqlsrv_query($conn, $sql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['sid'] . " " . $row['name'] . PHP_EOL);
    }
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
</body>
</html>
