<?php
spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    if ('Diconvergent' !== $parts[0] && 'Meeting' !== $parts[1]) {
        return;
    }
    require_once __DIR__ . '/../meeting/src/' . implode('/', array_slice($parts, 2)) . '.php';
});
require_once __DIR__ . '/../vendor/autoload.php';
