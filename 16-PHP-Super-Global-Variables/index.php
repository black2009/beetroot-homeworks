<?php

require_once 'config.php';
require_once "productsToArray.php";
if (!isset($productsArray)) {
    echo 'Products database not found';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping cart</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="container">

    <div id="main">
        <h1>Product List</h1>
        <form action="#" method="POST">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php

                foreach ($productsArray as $element) {
                    ?>
                    <tr>
                        <td><?php
                            echo $element['name'] ?></td>
                        <td><?php
                            echo $element['description'] ?></td>
                        <td><?php
                            echo $element['price'] ?>$ </td>
                        <td>Add to cart <label>
                                <input type="checkbox" name="productsChart[]" value="<?php
                                echo $element['name'] ?> (<?php
                                echo $element['price'] ?>$)">
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


