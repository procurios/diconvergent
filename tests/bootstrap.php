<?php
spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    if ('diconvergence' !== $parts[0]) {
        return;
    }
    require_once __DIR__ . '/../src/' . implode('/', array_slice($parts, 3)) . '.php';
});
require_once __DIR__ . '/../vendor/autoload.php';
