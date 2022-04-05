<?php
namespace Model;
//spl_autoload_register();
spl_autoload_register(function($class) {
	$filename = str_replace('\\', '/', $class) . '.php';
	require($filename);
});

use Model\Admin\Page;
use Model\Users\Page as Page2;


$adminPage = new Page;

$usersPage = new Page2;



echo $adminPage->name;

echo '<br>';

echo $usersPage->name;























?>