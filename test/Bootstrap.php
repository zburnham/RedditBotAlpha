<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../src' . PATH_SEPARATOR . 
        __DIR__ . '/../../../vendor/zendframework/zendframework/library' . PATH_SEPARATOR . 
        __DIR__ . '/..');
spl_autoload_register('spl_autoload');