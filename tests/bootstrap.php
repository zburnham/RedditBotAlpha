<?php
include_once('./SplClassLoader.php');
$autoloader = new SplClassLoader('RedditBotAlpha', __DIR__ . '/../src');
$autoloader->register();