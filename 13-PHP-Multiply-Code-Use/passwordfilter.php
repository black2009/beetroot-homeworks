<?php

$userPassword = [];
foreach ($explodedUsersData as $data) {
    $userPassword[$data['2']][] = $data;
}

//print_r($userPassword);

