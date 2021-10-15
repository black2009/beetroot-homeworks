<?php

session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація та реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма реєстрації -->

<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>ФІП</label>
    <input type="text" name="full_name" placeholder="Введіть своє повнее ім’я">
    <label>Логін</label>
    <input type="text" name="login" placeholder="Введіть свій логін">
    <label>Пошта</label>
    <input type="email" name="email" placeholder="Введіть адресу своєї пошти">
    <label>Зображення профілю</label>
    <input type="file" name="avatar">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введіть пароль">
    <label>Підтвердження пароля</label>
    <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
    <button type="submit">Увйти</button>
    <p>
        У вас вже є аккаунт? - <a href="/">авторизируйтеся</a>!
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>

</body>
</html>