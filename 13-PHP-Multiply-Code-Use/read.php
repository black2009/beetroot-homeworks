<?php

$usersDataOnArray = file('userdata.txt', FILE_IGNORE_NEW_LINES);

//var_dump($usersDataOnArray);
//print_r($usersDataOnArray);

$explodedUsersData = [];

foreach ($usersDataOnArray as $key => $user) {
    $explodedUsersData[$key] = explode(", ", $user);
}

//print_r($explodedUsersData);