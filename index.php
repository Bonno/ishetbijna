<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

define('DOCROOT', __DIR__);

require_once DOCROOT . '/vendor/autoload.php';
require  DOCROOT . '/lib/medoo.php';
 
$database = new medoo(array(
	// required
	'database_type' => 'mysql',
	'database_name' => 'ishetbijna',
	'server' => 'localhost',
	'username' => 'ishetbijna',
	'password' => 'uWw%vy8F#MNdJ6W2ACX$',
	'charset' => 'utf8',
 
	// optional
	'port' => 3306,
	// driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => array(
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	)
));
if ($_SERVER['REQUEST_URI'] != '/') {
    $database->insert("suggestions", array(
        'request' => $_SERVER['REQUEST_URI']
    ));
}

$loader = new Twig_Loader_Filesystem(DOCROOT . '/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => DOCROOT . '/cache',
));
echo $twig->render('index.phtml', array('name' => 'Fabien'));
