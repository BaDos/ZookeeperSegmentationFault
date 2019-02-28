<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$handler = new App\ErrorHandler();
set_error_handler([$handler, 'handler']);

$application = new Application();
$application->add(new \App\TestCommand());
$application->run();
