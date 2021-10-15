<?php
try {
    $connection = new PDO('mysql:host=db;port=3306;dbname=laravel', 'root', 'root');
    $connection->query('select 1');
    echo 'mysql: pong';
} catch (Throwable $e) {
    print "Error!: {$e->getMessage()} <br/>";
}