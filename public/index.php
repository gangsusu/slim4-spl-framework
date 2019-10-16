<?php

use App\Facades\App;

ini_set('date.timezone', 'Asia/Shanghai');

define('storage_path', __DIR__.'/../storage/');
define('config_path', __DIR__.'/../config/');

require __DIR__.'/../bootstrap/autoload.php';

$dot_env = \Dotenv\Dotenv::create(__DIR__.'/../');
$dot_env->load();

$config = (new \App\Config())->getSetting();
require_once __DIR__.'/../bootstrap/app.php';

require __DIR__.'/../routers/web.php';
require __DIR__.'/../routers/api.php';

App::run();
