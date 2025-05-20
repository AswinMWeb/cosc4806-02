<?php

Class User{
public function get_all_users(){

   $dbh = db_connect();
    $statement = $db->prepare ("select * from users");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
  
}





?>