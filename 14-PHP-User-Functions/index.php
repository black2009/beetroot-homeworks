<?php

$fileName = 'userdata.txt';
$usersArray = textfileread($fileName);
//print_r($usersArray);

//создать php файл, который будет две функции: одна будет принимать имя файла и возвращать массив с пользователями
function textfileread($fileName)
{
    $usersDataOnArray = file($fileName, FILE_IGNORE_NEW_LINES);
    $explodedUsersData = [];

    foreach ($usersDataOnArray as $key => $user) {
        $explodedUsersData[$key] = explode(", ", $user);
    }
    return $explodedUsersData;
}

$username = 'userfive';
$password = 'passworduser5';
$userData = [];
$userStatus = [];

//вторая — будет принимать логин, пароль и массив пользователей, и возвращать данные пользователя
// с указанным логином и паролем, или сообщение, если пользователь не найден.
function usersfilter($username, $password, $usersArray)
{
    foreach ($usersArray as $userData => $value) {
        if ($value[1] === $username && $value[2] === $password) {
            $userStatus = $value;
          //  var_dump($userStatus);
        }
    }
    return $userStatus;
}
$userStatment = usersfilter($username, $password, $usersArray);

var_dump($userStatment);


