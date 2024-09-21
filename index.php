<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/core/database.php';
require_once __DIR__ . '/core/sqlite.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/core/blade.php';
require_once __DIR__ . '/core/helpers.php';
require_once __DIR__ . '/core/autoload.php';
require_once __DIR__ . '/core/app.php';

$app = new App();
