<?php
$users = [];
$users["1"] = ["name" => "Name1", "lang" => "ru", "email" => "name1@test.com"];
$users["2"] = ["name" => "Name2", "lang" => "en", "email" => "name2@test.com"];
$users["3"] = ["name" => "Name3", "lang" => "fr", "email" => "name3@test.com"];
$users["4"] = ["name" => "Name4", "lang" => "ua", "email" => "name4@test.com"];
$users["5"] = ["name" => "Name5", "lang" => "en", "email" => "name5@test.com"];
$users["6"] = ["name" => "Name6", "lang" => "fr", "email" => "name6@test.com"];
$users["7"] = ["name" => "Name7", "lang" => "ua", "email" => "name7@test.com"];
$users["8"] = ["name" => "Name8", "lang" => "ua", "email" => "name8@test.com"];

// отримати користувача з мнімальним id
$minId = reset ($users);
//var_dump($minId);

//отримати користувача з максимальним id
$maxId = end($users);
//var_dump($maxId);

//виводимо значення по ключу "lang" для першого користувача
$languageMinId = $minId ["lang"];
//var_dump($languageMinId) ;

//виводимо значення по ключу "lang" для останнього користувача
$languageMaxId = $maxId ["lang"];
//var_dump($languageMaxId) ;

//порівнюємо значення по ключу "lang" та записуємо у змінні
if ($languageMinId === $languageMaxId) {
    $language1 = $languageMinId;
    $language2 = "";
}
else {
    $language1 = $languageMinId;
    $language2 = $languageMaxId;
}

//виводимо привітання для кожного значення змінної $language1, та нічого не виводимо у разі порожнього значення
switch ($language1) {
    case "en":
        echo "Hello, user!";
        break;

    case "ru":
        echo "Привет, пользователь!";
        break;

    case "ua":
        echo "Привіт, користувач!";
        break;

    case "fr":
        echo "Bonjour l'utilisateur!";
        break;

    default:
        break;
}


//виводимо привітання для кожного значення змінної $language2, та нічого не виводимо у разі порожнього значення
switch ($language2) {
    case "en":
        echo "Hello, user!";
        break;

    case "ru":
        echo "Привет, пользователь!";
        break;

    case "ua":
        echo "Привіт, користувач!";
        break;

    case "fr":
        echo "Bonjour l'utilisateur!";
        break;

    default:
        break;
}
