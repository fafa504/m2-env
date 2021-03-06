<?php
return array (
    'backend' =>
        array (
            'frontName' => 'admin',
        ),
    'crypt' =>
        array (
            'key' => '9af38453afda96c7862c7d10eb493ba4',
        ),
    'session' =>
        array (
            'save' => 'files',
        ),
    'db' =>
        array (
            'table_prefix' => '',
            'connection' =>
                array (
                    'default' =>
                        array (
                            'host' => '127.0.0.1',
                            'dbname' => 'magento2',
                            'username' => 'magento2',
                            'password' => 'magento2',
                            'model' => 'mysql4',
                            'engine' => 'innodb',
                            'initStatements' => 'SET NAMES utf8;',
                            'active' => '1',
                        ),
                ),
        ),
    'resource' =>
        array (
            'default_setup' =>
                array (
                    'connection' => 'default',
                ),
        ),
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'cache_types' =>
        array (
            'config' => 1,
            'layout' => 1,
            'block_html' => 1,
            'collections' => 1,
            'reflection' => 1,
            'db_ddl' => 1,
            'eav' => 1,
            'customer_notification' => 1,
            'full_page' => 1,
            'config_integration' => 1,
            'config_integration_api' => 1,
            'translate' => 1,
            'config_webservice' => 1,
        ),
    'install' =>
        array (
            'date' => 'Tue, 16 May 2017 09:13:48 +0000',
        ),
);
