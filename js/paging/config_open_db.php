<?php
     $dbhost = "localhost";
     $dbuser = "rgb7-ar";
     $dbpass = "*sql-arra*";
     $dbname = "db_ar";

     $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
     mysql_select_db($dbname) or die ('Unable to select database!');
?>