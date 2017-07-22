<?php

class DS_Emails_Block_Emails extends Mage_Core_Block_Template
{

    public function getNewsCollection()
    {
        $newsCollection = Mage::getModel('dsemails/emails')->getCollection();
        $newsCollection->setOrder('created', 'DESC');
        return $newsCollection;
    }

}