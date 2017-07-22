<?php

class DS_Emails_Adminhtml_EmailsController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout()->_setActiveMenu('dsemails');
        $this->_addContent($this->getLayout()->createBlock('dsemails/adminhtml_emails'));
        $this->renderLayout();
    }
}