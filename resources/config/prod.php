<?php
$app['log.level'] = Monolog\Logger::ERROR;
$app['api.version'] = "v1";
$app['api.endpoint'] = "/api";
$app['db.options'] = array(
  "driver" => "pdo_mysql",
  "user" => "studia",
  "password" => "put@2016a",
  "dbname" => "studia_iwoz",
  "host" => "localhost",
);
