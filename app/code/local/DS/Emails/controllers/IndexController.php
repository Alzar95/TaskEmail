<?php

class DS_Emails_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {

        $connection = mysqli_connect("localhost", "root", "", "email");
        $db = mysqli_select_db($connection, "email");
        mysqli_query($connection," SET NAMES 'utf8'");

        if(!$connection || !$db) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            exit(mysqli_error($connection));
        }

        $result = mysqli_query($connection, "SELECT email_name FROM ds_emails_test ORDER BY rand()");

            ?>
            <h1 style="text-align:  center;">Победитель:<?php
                echo '<br>';
                echo mysqli_fetch_assoc($result)['email_name'];
                ?>!</h1>
            <?php
    }

    public function viewAction()
    {
        $emailsId = Mage::app()->getRequest()->getParam('id', 0);
        $emails = Mage::getModel('dsemails/emails')->load($emailsId);

        if ($emails->getId() > 0) {
            $this->loadLayout();
            $this->getLayout()->getBlock('emails.content')->assign(array(
                "emailsItem" => $emails,
            ));
            $this->renderLayout();
        } else {
            $this->_forward('noRoute');
        }
    }

}