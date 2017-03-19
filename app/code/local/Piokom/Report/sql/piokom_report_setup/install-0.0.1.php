<?php

$installer = $this;
$installer->startSetup();

$installer->run("
    -- DROP TABLE IF EXISTS {$this->getTable('piokom_report')};
    CREATE TABLE `{$installer->getTable('piokom_report')}` (
      `id` bigint NOT NULL auto_increment,
      `ip` varchar(255) NOT NULL,
      `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
      `product_id` int NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('piokom_report')}` VALUES(1,'10.0.0.1',NOW(),'3');
    ");

$installer->endSetup();
