<?php

$connect = new PDO('mysql:host=db;port=3306;dbname=laravel', 'root', 'root');

if (!$connect) {
    die('Error connect to DataBase');
}