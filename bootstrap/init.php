<?php

/*
 * Start Session
 */
if (!isset($_SESSION)) session_start();

// load environment variables
require_once dirname(__DIR__, 1) . '/app/config/_env.php';

require_once dirname(__DIR__, 1) . '/app/routes/routes.php';
