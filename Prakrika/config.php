<?php
// HTTP
define('HTTP_SERVER', 'http://prakrika/');

// HTTPS
define('HTTPS_SERVER', 'http://prakrika/');

// DIR
define('DIR_APPLICATION', 'W:/domains/Prakrika/catalog/');
define('DIR_SYSTEM', 'W:/domains/Prakrika/system/');
define('DIR_IMAGE', 'W:/domains/Prakrika/image/');
define('DIR_STORAGE', 'W:/domains/Prakrika/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'praktika');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');