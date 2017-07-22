<?php

class DS_Emails_Model_Resource_Emails extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('dsemails/table_emails', 'id');
    }

}