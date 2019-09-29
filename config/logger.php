<?php
return [
    'logger' => [
        'name' => 'app_logger',
        'level' => Monolog\Logger::INFO,
        'path' => storage_path . 'logs/' . date("Y-m-d") . '.log',
    ],
];