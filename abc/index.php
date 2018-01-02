<?php

define('APP_PATH', __DIR__ . '/app/');

require "config/config.php";
require "helper.php";

echo "<pre style='color: red;'>";
require __DIR__ . '/tp5/start.php';
echo "</pre>";
