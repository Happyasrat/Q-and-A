<?php 

//  $root = realpath($_SERVER["DOCUMENT_ROOT"]); 
//  require_once("C:\wamp\www\QandA\config.php");


 $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once($root."\QandA\config.php"); 

$sqlConnect = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass,$sql_db_name);


// if ($sqlConnect) {
//     echo "connected";
// } else {
//     echo "Not connected";
// }
?>