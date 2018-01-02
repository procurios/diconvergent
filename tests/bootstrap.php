<?php
spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    if ('meetinc' !== $parts[0]) {
        return;
    }
    require_once __DIR__ . '/../src/' . implode('/', array_slice($parts, 1)) . '.php';
});
require_once __DIR__ . '/../vendor/autoload.php';
