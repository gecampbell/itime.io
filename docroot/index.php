<?php
/**
 * (c)2012 Glen Campbell. All rights reserved.
 */
require('cookie.inc');
if (!isset($TZ))	$TZ = 'UTC';
if (!$TZ) 			$TZ = 'UTC';
date_default_timezone_set($TZ);

require('templates/default.php');

require('ajax.js');
require('ga.js');
