<?php
include_once('./SplClassLoader.php');
$autoloader = new SplClassLoader('RedditBotAlpha', __DIR__ . '/../src');
$autoloader->register();
$zendAutoloader = new SplClassLoader('Zend', __DIR__ . '/../../../vendor/zendframework/zendframework/library');
$zendAutoloader->register();
die (var_dump($autoloader) . PHP_EOL . var_dump($zendAutoloader));