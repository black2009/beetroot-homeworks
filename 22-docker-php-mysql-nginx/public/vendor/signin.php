<?php

session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE login = ? AND password = ?";
$stmt = $connect->prepare($sql);
$stmt->execute([$_POST['login'], $_POST['password']]);
$check_user = $stmt->fetchAll();

if (count($check_user) > 0) {
    $user = $check_user;

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];

    header('Location: ../profile.php');
} else {
    $_SESSION['message'] = 'Не вірний логін или пароль';
    header('Location: ../index.php');
}
?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>

