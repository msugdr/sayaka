<!DOCTYPE html>
<html>
<body>
    <p>This is a.php</p>
<?php
// PHP Data Objects(PDO) Sample Code:
// 
    /*
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
    echo ("<p>Reading data from table</p>" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['sid'] . " " . $row['name'] . "<br>".PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);   
    */
    
try {
    $conn = new PDO("sqlsrv:server = tcp:xana-database.database.windows.net,1433; Database = xana_sql", "youna", "ledsql123#");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection succesfully<br>";
    $sql = "SELECT * FROM member";
    $res = $conn->query($sql);
    $data = $res->fetchAll();
    for ($i=0; $i < count($data); $i++) {
        echo $data[0]['sid'] . " " . $data[$i]['name'] . "<br>";
    }
//    echo $data[0]['sid'] . " " . $data[0]['name'] . "<br>";
//    echo $data[1]['sid'] . " " . $data[1]['name'] . "<br>";
//    echo $data[2]['sid'] . " " . $data[2]['name'] . "<br>";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
</body>
</html>
