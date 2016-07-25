<?php

$installer = $this;

$connection = $installer->getConnection();

$installer->startSetup();
$tableName = $installer->getTable('fk_user/user');
if ($installer->getConnection()->isTableExists($tableName) != true) {
    $table = $connection->newTable($tableName)
        ->addColumn(
            'id',
            Varien_Db_Ddl_Table::TYPE_SMALLINT,
            null,
            array(
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
            ),
            'Ambassador ID'
        )
        ->addColumn(
            'first_name',
            Varien_Db_Ddl_Table::TYPE_VARCHAR,
            255,
            array(
                'nullable' => false
            ),
            'Ambassador First Name'
        )
        ->addColumn(
            'last_name',
            Varien_Db_Ddl_Table::TYPE_VARCHAR,
            255,
            array(
                'nullable' => false
            ),
            'Ambassador Last Name'
        )
        ->addColumn(
            'status',
            Varien_Db_Ddl_Table::TYPE_BOOLEAN,
            null,
            array(
                'nullable' => false,
                'default' => 0,
                'comment' => 'Ambassadors status'
            )
        )
        ->setComment('Ambassador entity');
    $table = $connection->createTable($table);
}
