<?php

/**
 * @param $path
 *
 * @return bool|string
 */
$findParentPath = function ($path)
{
    $dir = __DIR__;
    $previousDir = '.';
    while (!is_dir($dir . '/' . $path)) {
        $dir = dirname($dir);
        if ($previousDir === $dir) {
            return false;
        }
        $previousDir = $dir;
    }
    return $dir . '/' . $path;
};

$vendorPath = $findParentPath('vendor');

/** @noinspection PhpIncludeInspection */
require_once $vendorPath . '/autoload.php';

$appConfig = require __DIR__ . '/../config/application.config.php';
$appConfig['module_listener_options']['module_paths'][] = $vendorPath;


Zend\Mvc\Application::init($appConfig)->run();

