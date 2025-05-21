<?php

use Concrete\Core\Application\Application;

defined('C5_EXECUTE') or die('Access Denied.');

try {
    Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../')->load();
} catch (Throwable $e) {
}

$app = new Application();

$app->detectEnvironment(static function() {
    return empty($_ENV['CCM_ENVIRONMENT']) ? 'production' : $_ENV['CCM_ENVIRONMENT'];
});

return $app;
