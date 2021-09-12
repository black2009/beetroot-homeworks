<?php
$name = 'Oleh';
$surname = 'Smaha';
?>

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

       <div id="form_register">
           <h2>Форма реєстрації</h2>

           <form action="register.php" method="post" name="form_register">
               <table>
                   <tbody><tr>
                       <td> Ім’я: </td>
                       <td>
                           <label>
                               <input type="text" name="first_name" required="required">
                           </label>
                       </td>
                   </tr>

                   <tr>
                       <td> Призвище: </td>
                       <td>
                           <label>
                               <input type="text" name="last_name" required="required">
                           </label>
                       </td>
                   </tr>

                   <tr>
                       <td> Email: </td>
                       <td>
                           <label>
                               <input type="email" name="email" required="required" class="fbc-has-badge fbc-UID_1">
                           </label><br>
                           <span id="valid_email_message" class="mesage_error"></span>
                       </td>
                   </tr>

                   <tr>
                       <td> Пароль: </td>
                       <td>
                           <label>
                               <input type="password" name="password" placeholder="мінімум 6 символів" required="required">
                           </label><br>
                           <span id="valid_password_message" class="mesage_error"></span>
                       </td>
                   </tr>
                   <tr>
                       <td> Введіть капчу: </td>
                       <td>
                           <p>
                               <img src="captcha.php" alt="Капча" /> <br><br>
                               <label>
                                   <input type="text" name="captcha" placeholder="Перевірочний код" required="required">
                               </label>
                           </p>
                       </td>
                   </tr>
                   <tr>
                       <td colspan="2">
                           <input type="submit" name="btn_submit_register" value="Зареєструватися!">
                       </td>
                   </tr>
                   </tbody></table>
           </form>
       </div>




 <div id="footer">
            <h2>Підвал сайту</h2>
        </div>
    </body>
</html>