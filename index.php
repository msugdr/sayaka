<!DOCTYPE html>
<html>
  <body>
    <h1>SAYAKA</h1> 
<?php
define('LINE_API_URL'  ,'https://notify-api.line.me/api/notify');
define('LINE_API_TOKEN','0maOvAs8dtXu8h7eEPMXGk2VqMcj6LEztSP9C7kudOg');

function post_message($message){

    $data = http_build_query( [ 'message' => $message ], '', '&');

    $options = [
        'http'=> [
            'method'=>'POST',
            'header'=>'Authorization: Bearer ' . LINE_API_TOKEN . "\r\n"
                    . "Content-Type: application/x-www-form-urlencoded\r\n"
                    . 'Content-Length: ' . strlen($data)  . "\r\n" ,
            'content' => $data,
            ]
        ];

    $context = stream_context_create($options);
    $resultJson = file_get_contents(LINE_API_URL, false, $context);
    $resultArray = json_decode($resultJson, true);
    if($resultArray['status'] != 200)  {
        return false;
    }
    return true;
}

post_message('テスト投稿');
?>
<form methode="get" action="index.php">
  <input type="text" name="comment">
  <input type="submit" value="PUSH">
  </body>
</html>
