<?php

namespace Classes;

class Connect
{
    protected string $dsn;
    protected string $login;
    protected string $password;
    protected PDO $pdo;

    public function __construct($dsn, $login, $password)
    {
        $this->dsn = $dsn;
        $this->login = $login;
        $this->password = $password;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->pdo = new PDO($this->dsn, $this->login, $this->password, $options);
        } catch (Throwable $e) {
            print "Помилка підключення до бази даних: {$e->getMessage()} <br/>";
        }
    }


    public function getProductsList()
    {
        $smtp = $this->pdo->query('SELECT id, title, price, availableQuantity FROM products');
        return $smtp->fetchAll();
    }


    public function placeOrder()
    {
        $userID = $this->pdo->prepare('SELECT id FROM users WHERE username=:login');
        $userID->bindParam(':login', $_SESSION['login']);
        $userID->execute();
        $userID = $userID->fetch();
        foreach ($_POST as $orderedGood => $checked) {
            $tmp = $this->pdo->prepare('INSERT INTO `orders`(user_id, good_id, amount) VALUES (?, ?, 1)');
            $tmp->execute([$userID['id'], $orderedGood]);
        }
        echo "Ви успішно зробили замовлення!";
    }
}
