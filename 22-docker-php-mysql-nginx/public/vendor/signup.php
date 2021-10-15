<?php

session_start();
require_once 'connect.php';


$id = null;
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Помилка при завантаженні повідомлення';
        header('Location: ../register.php');
    }

    $password = md5($password);

//        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
    $data = $connect->prepare('INSERT INTO users  VALUES(:id)');
    $data->bindParam(':id', $id);

    $data = $connect->prepare('INSERT INTO users  VALUES(:full_name)');
    $data->bindParam(':full_name', $full_name);

    $data = $connect->prepare('INSERT INTO users  VALUES(:login)');
    $data->bindParam(':login', $login);

    $data = $connect->prepare('INSERT INTO users  VALUES(:email');
    $data->bindParam(':email', $email);

    $data = $connect->prepare('INSERT INTO users  VALUES(:password)');
    $data->bindParam(':password', $password);

    $data = $connect->prepare('INSERT INTO users  VALUES(:avatar)');
    $data->bindParam(':avatar', $avatar);

    $_SESSION['message'] = 'Реєстрация пройшла успішно!';
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Паролі не співпадають';
    header('Location: ../register.php');
}

?>
