<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'classes\\' => array($baseDir . '/OO/classes', $baseDir . '/CRUD/classes'),  
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
);
