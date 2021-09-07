<!DOCTYPE html>
<html lang="ua">
<head>
    <title>Назва нашого сайту</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="header">

    <h2>Хедер сайту</h2>

    <a href="index.php">Головна</a> | <a href="time.php">Дата і час</a>

</div>

<div class="clear"></div>


<h1>
<?php
$date_today = date("d.m.y");
$today[1] = date("H:i:s");
echo("Сьогодні: $date_today")  ;
echo(" Поточний час: $today[1]");
?>
</h1>


<div id="footer">
                 <h2>Підвал сайту</h2>
            </div>
      </body>
</html>