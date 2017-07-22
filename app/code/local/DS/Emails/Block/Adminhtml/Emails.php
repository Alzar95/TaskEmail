<?php

class DS_Emails_Block_Adminhtml_Emails extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('dsemails');
        $this->_blockGroup = 'dsemails';
        $this->_controller = 'adminhtml_emails';

        $this->_headerText = $helper->__('Emails');
        $this->_addButton('the_best', array(
            'label' => $helper->__('пусть выиграет случайный пользователь'),
            'onclick' => "setLocation('http://emails.com/emails')",
            'class' => 'go'
        ), 0, 100, 'header', 'header');
    }

}