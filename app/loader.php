<?php

$loader = new \Phalcon\Loader();
$loader->registerNamespaces(array(
  'PhalconRestApi'        => 'app/library/',
  'PhalconRestApi\Models' => 'app/models/',
))->register();

// Use composer autoloader to load vendor classes
require_once __DIR__ . '/../vendor/autoload.php';