<?php
function db_connect() {
   #connect with database
   $mysqli = new mysqli('localhost', 'root', '', 'niroshmedia');
   if ($mysqli->connect_error) {
    die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
   }

   $mysqli->query("SET NAMES utf8");
   $mysqli->query("SET CHARACTER SET utf8");
   $mysqli->set_charset('utf8');

   return $mysqli;
}

?>