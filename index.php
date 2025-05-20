<?php

require_once('user.php');

$user = new User();

$users_list = $user->get_all_users();

echo "<pre>";
print_r($users_list);



