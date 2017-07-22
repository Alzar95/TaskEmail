<?php

$installer = $this;
$tableEmails = $installer->getTable('dsemails/table_emails');

$installer->startSetup();

$installer->getConnection()->dropTable($tableEmails);
$table = $installer->getConnection()
    ->newTable($tableEmails)
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ))
    ->addColumn('email_name', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
        ));
$installer->getConnection()->createTable($table);

$installer->endSetup();