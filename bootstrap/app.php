<?php

use App\Config;
use Slim\Factory\AppFactory;

$container = new \Illuminate\Container\Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($config['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$app->addRoutingMiddleware();
$app->add(new Zeuxisoo\Whoops\Slim\WhoopsMiddleware());

$callableResolver = $app->getCallableResolver();
$responseFactory = $app->getResponseFactory();
$errorHandler = new \App\Handlers\HttpErrorHandler($callableResolver, $responseFactory);

if ($config['settings']['debug'] == false) {
    $errorMiddleware = $app->addErrorMiddleware(true, true, true);
    $errorMiddleware->setDefaultErrorHandler($errorHandler);
}
$container->bind('config', function () {
    $config = New Config();
    $config->loadConfigFiles(__DIR__ . '/../config');
    return $config;
});

$container->bind('db', function () use ($capsule) {
    return $capsule;
});

$container->bind('logger', function () {
    $logger = new \Monolog\Logger(Config('logger.logger.name'));
    $logger->pushHandler(new \Monolog\Handler\StreamHandler(Config('logger.logger.path')));
    return $logger;
});

$container->bind('cache', function () {
    return (new \App\Cache(Config('cache')))->init();
});

\App\Facades\Facade::setFacadeApplication($app);