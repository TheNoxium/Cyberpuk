<?php


define( 'ROOT', $_SERVER['DOCUMENT_ROOT'] );
define( 'CORE_DIR', ROOT . '/core' );
define( 'LIBS_DIR', ROOT . '/libs' );
define( 'TEMPLATE_DIR', ROOT . '/template' );


include_once( ROOT . '/config.php');
include_once( CORE_DIR . '/functions.php');
include_once( LIBS_DIR . '/smarty/smarty.class.php');
include_once( LIBS_DIR . '/redbean/rb-mysql.php');


$smarty = new Smarty();


$smarty->setTemplateDir( ROOT . '/template/');
$smarty->setCompileDir( ROOT . '/templates_c/');
$smarty->setConfigDir( ROOT . '/configs/');
$smarty->setCacheDir( ROOT . '/cache/');

?>