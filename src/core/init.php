<?php
/**
 * Initializing of framework
 */

// For authorization etc
session_start();

// Main constants
define('CORE_PATH', realpath(__DIR__));
define('SITE_PATH', realpath(CORE_PATH.'/../site'));
define('PUBLIC_PATH', realpath(CORE_PATH.'/../../web'));

// Defaults
define('MVC_DEFAULT_CONTROLLER', 'user'); // Default request will be /main/index
define('MVC_DEFAULT_ACTION', 'list'); // Default request will be /main/index

// Include libraries and framework parts
require_once CORE_PATH.'/core.func.php';
require_once CORE_PATH.'/common.func.php';
require_once CORE_PATH.'/db.func.php';
require_once SITE_PATH.'/models.func.php';