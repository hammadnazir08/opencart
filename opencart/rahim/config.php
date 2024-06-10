<?php
session_start();
// APPLICATION
define('APPLICATION', 'Catalog');

// HTTP
define('HTTP_SERVER', 'http://localhost/opencart/upload/');

// DIR
define('DIR_OPENCART', 'C:/xamp PHP8/htdocs/opencart/upload/');
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1); // Set to 1 if you want to display errors on screen
ini_set('log_errors', 1);
ini_set('error_log', DIR_LOGS . 'error.log');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
