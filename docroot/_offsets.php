<?php
$tzmap = array();
foreach(timezone_identifiers_list() as $timezone) {
	$time = new dateTime(time(), new DateTimeZone($timezone));
	$offset = substr($time->format('O'), 0, 9);
	if (!isset($tzmap[$offset])) $tzmap[$offset] = $timezone;
}
foreach($tzmap as $offset => $timezone)
	printf("  '%s' => '%s',\n", $offset, $timezone);