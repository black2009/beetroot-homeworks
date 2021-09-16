<?php

$users = [];
$users["1"] = ["name" => "Sashko", "lang" => "ru", "email" => "name1@test.com"];
$users["2"] = ["name" => "Mariya", "lang" => "en", "email" => "name2@test.com"];
$users["3"] = ["name" => "Dmytro", "lang" => "fr", "email" => "name3@test.com"];
$users["4"] = ["name" => "Mariya", "lang" => "ua", "email" => "name4@test.com"];
$users["5"] = ["name" => "Sashko", "lang" => "en", "email" => "name5@test.com"];
$users["6"] = ["name" => "Petro", "lang" => "fr", "email" => "name6@test.com"];
$users["7"] = ["name" => "Sashko", "lang" => "ua", "email" => "name7@test.com"];
$users["8"] = ["name" => "Petro", "lang" => "ua", "email" => "name8@test.com"];

//выведите на экран имена пользователей, которые встречаются более одного раза и количество повторений имени;
echo 'выведите на экран имена пользователей, которые встречаются более одного раза и количество повторений имени' . PHP_EOL;

$nameCountValues = array_count_values(array_column($users, 'name'));

foreach ($nameCountValues as $name => $value) {
    if ($value >= 2) {
        echo "$name — $value" . PHP_EOL;
    }
}

//разделите пользователей на массивы по языку, каждый массив будет содержать пользователей с одинаковым языком
echo 'разделите пользователей на массивы по языку, каждый массив будет содержать пользователей с одинаковым языком' . PHP_EOL;

$userLanguage = array();
foreach ($users as $data) {
    $userLanguage[$data['lang']][] = $data;
}

print_r($userLanguage);

//с помощью цикла сформируйте новый массив, содержащий пользователей в обратном порядке от исходного массива (первый пользователь станет последним, второй — предпоследним и т.д.)
echo 'с помощью цикла сформируйте новый массив, содержащий пользователей в обратном порядке от исходного массива (первый пользователь станет последним, второй — предпоследним и т.д.)' . PHP_EOL;

foreach (array_reverse($users) as $var) {
    print_r($var); // Will show in reversed order
}
