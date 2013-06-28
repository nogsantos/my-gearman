<?php

/**
 *
 * Descrição:Factory
 *
 *
 * @author Fabricio Nogueira
 *
 * @since 28-Jun-2013
 *
 * @version 1.0.0
 *
 */
$config = new Zend_Config(
    array(
        'adapter' => '[adapter]',
        'params'  => array(
            'dbname'     => '[dbname]',
            'password'   => '[password]',
            'username'   => '[username]',
            'charset'    => '[charset]',
            'persistent' => '[persistent]',
        )
    )
);
$db = Zend_Db::factory($config);
Zend_Db_Table::setDefaultAdapter($db);


