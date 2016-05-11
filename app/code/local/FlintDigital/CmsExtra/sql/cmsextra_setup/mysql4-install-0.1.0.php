<?php

$installer = $this;
$installer->startSetup();

$conn = $installer->getConnection();
$table = $installer->getTable('cms_page');

$conn->addColumn($table, 'alt_meta_title', 'varchar(255)');

$installer->endSetup();