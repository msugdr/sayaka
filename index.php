<!DOCTYPE html>
<html>
  <body>
    <h1>SAYAKA</h1> 
<?php
$comment = $_GET['comment'];
echo " You say '" . $comment . "'";
?>
<form methode="get" action="index.php">
  <input type="text" name="comment">
  <input type="submit" value="PUSH">
  </body>
</html>
