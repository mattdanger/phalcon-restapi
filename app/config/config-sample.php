<?php

return new \Phalcon\Config(array(
  'database' => array(
    'adapter'     => 'Mysql',
    'host'        => 'localhost',
    'username'    => '',
    'password'    => '',
    'dbname'      => '',
    'charset'     => 'utf8',
  ),
  'allowed_origins' => array(
    'http://url.local',
  ),
  'debug_mode' => TRUE,
));
