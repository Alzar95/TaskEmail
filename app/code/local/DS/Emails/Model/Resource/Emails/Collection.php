<?php

class DS_Emails_Model_Resource_Emails_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('dsemails/emails');
    }

}