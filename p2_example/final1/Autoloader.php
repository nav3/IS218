<?php
// Autoloading files
	class Autoloader{
		public static function loader($className){
			$className = ltrim($className, '\\');
			$fileName = '';
			$namespace = '';
			if($lastNsPos = strrpos($className, '\\')){
				$namespace = substr($className, 0, $lastNsPos);
				$className = substr($className, $lastNsPos + 1);
				$fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
			}

			$fileName .= $className . '.php';
			require $fileName;
		}
	}

	spl_autoload_register('Autoloader::loader');
?>