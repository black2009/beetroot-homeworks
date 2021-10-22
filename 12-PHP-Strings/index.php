<?php

// в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'.

$date = '31-12-2020';

echo date("Y.m.j", strtotime($date)) . PHP_EOL;


// дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'

$string = 'london is the capital of great britain';

echo ucwords($string) . PHP_EOL;

// дана переменная $password, в которой хранится пароль пользователя.
// Если количество символов пароля больше 7 и меньше 12,
// то выведите пользователю сообщение о том, что пароль подходит, иначе: сообщение о том,
// что нужно придумать другой пароль.

$password = 'a234a678c10';

$passwordLength = strlen($password);
if ($passwordLength > 7 && $passwordLength < 12) {
    echo 'Password is good enough' . PHP_EOL;
} else {
    echo 'You must choose a new password' . PHP_EOL;
}

// дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
// Удалите из нее все цифры. В нашем случае должна получится строка 'abcbdefgh'

$newString = '1a2b3c4b5d6e7f8g9h0';
echo preg_replace("/\d+/", "", $newString) . PHP_EOL;