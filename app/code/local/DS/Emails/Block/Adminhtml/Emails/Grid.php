<?php

class DS_Emails_Block_Adminhtml_Emails_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('dsemails/emails')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('dsemails');

        $this->addColumn('id', array(
            'header' => $helper->__('Emails ID'),
            'index' => 'id'
        ));

        $this->addColumn('email_name', array(
            'header' => $helper->__('Email name'),
            'index' => 'email_name',
            'type' => 'text',
        ));

        return parent::_prepareColumns();
    }
}