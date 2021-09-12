<?php
$users = [];
$users["1"] = ["name" => "Name1", "email" => "name1@test.com"];
$users["2"] = ["name" => "Name2", "email" => "name2@test.com"];
$users["3"] = ["name" => "Name3", "email" => "name3@test.com"];
$users["4"] = ["name" => "Name4", "email" => "name4@test.com"];
$users["5"] = ["name" => "Name5", "email" => "name5@test.com"];
$users["6"] = ["name" => "Name6", "email" => "name6@test.com"];
$users["7"] = ["name" => "Name7", "email" => "name7@test.com"];
$users["8"] = ["name" => "Name8", "email" => "name8@test.com"];

//вивести загальну кількість користувачів сайту,
echo 'кількість користувачів сайту :' . count($users).PHP_EOL;


//впорядкувати користувачів в порядку убування id,
asort($users);
print_r($users);

//отримати користувача з максимальним id
$maxId = end($users);
var_dump($maxId);

//отримати користувача з айди попереднім максимальному
$almostMaxid = prev($users);
var_dump($almostMaxid);

// отримати користувача з мнімальним id
$minId = reset ($users);
var_dump($minId);

//отримати користувача з айди наступним за мінімальним
$almostMinid = next($users);
var_dump($almostMinid);

//var_export(compact('minId',  'almostMinid', 'maxId', 'almostMaxid'));
//echo PHP_EOL;

//видалити з масиву користувача з мінімальним айди
$delete = array_search($minId, $users);
unset($users[$delete]);
var_dump($users);
