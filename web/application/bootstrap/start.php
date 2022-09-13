<?php

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Application\Application;

$app = new Application();

$app->detectEnvironment([]);

return $app;
