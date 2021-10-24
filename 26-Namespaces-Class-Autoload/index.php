<?php
require_once "config.php";
$cart = new Cart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Корзина завмовлень</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="container">

    <div id="main">
        <h1>Перелік продуктів</h1>
        <form action="#" method="POST">
            <table>
                <tr>
                    <th>Назва</th>
                    <th>Опис</th>
                    <th>Ціна</th>
                    <th>Дія</th>
                </tr>
                <?php

                foreach ($cart->getProductsList() as $product) {
                    ?>
                    <tr>
                        <td><?php
                            echo $product['title']  ?></td>
                        <td><?php
                            echo $product['description'] ?></td>
                        <td><?php
                            echo $product['price'] ?>$ </td>
                        <td><?php
                            echo $product['quantity'] ?>$ </td>
                        <td>Add to cart <label>
                                <input type="checkbox" name="productsChart[]" value="<?php
                                echo $product['name'] ?> (<?php
                                echo $product['price'] ?>$)">
                            </label></td>
                    </tr>
                    <?php
                }

                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

    </div><!--end main-->
    <div id="sidebar">
        <h1>Chart</h1>
        <?php
        if (!empty($_POST)) {
            $_SESSION['productsChart'] = $_POST['productsChart'];
        }

        if (isset($_SESSION['productsChart'])) {
            echo '<p>' . implode("<br />", $_SESSION['productsChart']) . '</p>';
        } ?>
    </div><!--end of sidebar-->
</div><!--end container-->
</body>
</html>


