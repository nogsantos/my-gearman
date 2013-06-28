<?php

/**
 *
 * Descrição:load
 *
 *
 * @author Fabricio Nogueira
 *
 * @since 28-Jun-2013
 *
 * @version 1.0.0
 *
 */
set_include_path(".".PATH_SEPARATOR.realpath(dirname(__FILE__)).'/library/');
require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();
$loader->setFallbackAutoloader(true);