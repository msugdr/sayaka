<!DOCTYPE html>
<html>
<body>
    <p>This is a.php</p>
<?php
// PHP Data Objects(PDO) Sample Code:
// 
    $serverName = "xana-database.database.windows.net";
        $connectionOptions = array(
        "Database" => "xana_sql", // update me
        "Uid" => "youna", // update me
        "PWD" => "ledsql123#" // update me
    );
    
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM member";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['sid'] . " " . $row['name'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);   
    
?>
</body>
</html>
