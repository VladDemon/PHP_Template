<?php
require __DIR__ . '/vendor/autoload.php';

use \OpenApi\Generator;

$openapi = Generator::scan(['\src\Controller\HomeController'],);


header('Content-Type: application/json');
echo $openapi->toJson();