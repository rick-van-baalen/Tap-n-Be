<?php

// Database
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "tapnbe");

// App settings
define("APP_ROOT", dirname(dirname(__FILE__)));
define("URL_ROOT", "http://localhost/tap-n-be");
define("ADMIN_ROOT", "http://localhost/admin");
define("TEST_MODE", true);

// App information
define("SITE_NAME", "Tap 'n Be");
define("LOGO", URL_ROOT . "/images/logo.PNG");
define("MAIN_EMAIL", "info@tap-n-be.com");

// Modules
define("MODULE_QR", false);
define("MODULE_PAYMENT", true);
define("MODULE_PAYMENT_PROVIDER", "Mollie");

// API keys
define("MOLLIE_API_TEST", "XXXXXXXXXXXXXXXXXXXXXXXXXXX");
define("MOLLIE_API_LIVE", "");
