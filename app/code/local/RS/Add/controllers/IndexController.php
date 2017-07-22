<?php

class RS_Add_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Task</title>
        </head>
        <body>
        <form method="post" action="IndexController.php">
            <input type="email" size="30" name="email_name">
            <input type="submit" name="add" value="Отправить">
        </form>

        <?php
        $connection = mysqli_connect("localhost", "root", "", "email");
        $db = mysqli_select_db($connection, "email");
        mysqli_query($connection," SET NAMES 'utf8'");

        if(!$connection || !$db) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            exit(mysqli_error($connection));
        }

        if(isset($_POST['add'])) {
            $email_name = strip_tags(trim($_POST['email_name']));

            mysqli_query($connection, "INSERT INTO `ds_emails_test` (`email_name`) VALUES ('$email_name')");

            mysqli_close($connection);
        }
        ?>
        </body>
        </html>
   <?php }
}