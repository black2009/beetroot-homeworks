<?php
$name = 'Oleh';
$surname = 'Smaha';
$language = array("English"=>"en", "Russian"=>"ru", "Ukrainian"=>"ua");
?>

<!DOCTYPE html>
<html>
<head>
<title>Homework 07. PHP Array </title>
    <style>
        .row {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div id="app">
        <form action="#"  method="post">
            <div class="row">
                <select size="1"">
                    <option value="English"><?php echo $language['English']; ?></option>
                    <option value="Russian"><?php echo $language['Russian']; ?></option>
                    <option value="Ukrainian"><?php echo $language['Ukrainian']; ?></option>
                </select
            </div>
        </form>
        <form action="#" method="get">
            <div class="row">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" autofocus value="<?php echo $name; ?>">
            </div>
            <div class="row">
                <label for="surname">Surname: </label>
                <input type="text" name="surname" id="surname" value="<?php echo $surname; ?>">
            </div>
        </form>
    </div>
</body>
</html>

