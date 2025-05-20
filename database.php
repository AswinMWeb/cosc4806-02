<?php

require_once ('config.php');

function db_connect(){
  try{
    $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATABASE.';port='.DB_PORT, DB_USER, DB_PASS);
    return $dbh;
  }
    catch(PDOException $e){
      echo $e->getMessage("Error connecting to database");
    }
}



?>