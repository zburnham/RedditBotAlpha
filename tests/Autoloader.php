<?php

class AutoLoader {

    static private $classNames = array();

    /**
     * Store the filename (sans extension) & full path of all ".php" files found
     */
    public static function registerDirectory($dirName) {

        $di = new DirectoryIterator($dirName);
        foreach ($di as $file) {

            if ($file->isDir() && !$file->isLink() && !$file->isDot()) {
                // recurse into directories other than a few special ones
                //echo 'Trying to register directory ' . $file->getPathname() . PHP_EOL;
                self::registerDirectory($file->getPathname());
            } elseif (substr($file->getFilename(), -4) === '.php') {
                // save the class name / path of a .php file found
                $className = substr($file->getFilename(), 0, -4);
                //echo 'The class name is ' . $className . PHP_EOL ;
                //echo 'The path name is ' . $file->getPathname() . PHP_EOL;
                AutoLoader::registerClass($className, $file->getPathname());
            }
        }
    }

    public static function registerClass($className, $fileName) {
        AutoLoader::$classNames[$className] = $fileName;
    }

    public static function loadClass($className) {
        if (isset(AutoLoader::$classNames[$className])) {
            echo 'Trying to require ' . AutoLoader::$classNames[$className] . PHP_EOL;  
            require_once(AutoLoader::$classNames[$className]);
        }
    }
}

\spl_autoload_register('Autoloader::loadClass');
