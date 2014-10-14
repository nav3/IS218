<?php
// defines where my application is stored ../ means up one folder, if you put ./ then it's real path
define('APPLICATION_PATH', realpath('../'));

// echo out the Application path variable to see where my projects are being stored
//echo APPLICATION_PATH;

// After the echo path is: /afs/cad.njit.edu/u/n/a/nav3/public_html/IS218


$paths = array(
	APPLICATION_PATH,
	APPLICATION_PATH . '/com',
	get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $paths));

// autoload class
function __autoload($className){
	$filename = str_replace('\\', '/', $className) . '.php';
	require_once $filename;
	//return;

}

// instead of doing this, I could do save the long name in variable, and use it.
// called the base path
use \com\killerphp as kp;

$user = new kp\models\User();
echo $user->getName();

echo "<br/>";
new kp\controllers\test();


?>