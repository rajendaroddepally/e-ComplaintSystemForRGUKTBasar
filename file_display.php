<?php
 include("dbConfig1.php");
 error_reporting(E_ALL);
     $sql = "SELECT image FROM test_image WHERE id=3;";

     $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
     header("Content-type: image/jpg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
 

?>
