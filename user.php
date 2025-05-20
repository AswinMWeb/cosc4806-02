<?php

require_once ('database.php');


Class User{
  
public function get_all_users(){

   $dbh = db_connect();
    $statement = $dbh->prepare ("select * from users");
    $statement->execute();
    $rows = $statement->fetchALL(PDO::FETCH_ASSOC);
    return $rows;
}

   public function create_user($username, $password){

     $dbh = db_connect();
     $statement = $dbh->prepare ("insert into users (username, password) values (:username, :password)");
     $statement->bindParam(':username', $username);
     $statement->bindParam(':password', $password);
     $statement->execute();
   
   }
  
}





?>