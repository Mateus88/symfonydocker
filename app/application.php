<?php

require __DIR__ . '/vendor/autoload.php';

use App\Command\CountryCommand;
use Symfony\Component\Console\Application;

$app = new Application();

$app->add(new CountryCommand());

$app->run();