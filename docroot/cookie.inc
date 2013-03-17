<?php
/**
 * (c)2012 Glen Campbell. All rights reserved.
 */
$tzmap = array(
  '+0000' => 'Africa/Abidjan',
  '+0100' => 'Africa/Algiers',
  '+0200' => 'Africa/Blantyre',
  '+0300' => 'Africa/Addis_Ababa',
  '+0330' => 'Asia/Tehran',
  '+0400' => 'Asia/Baku',
  '+0430' => 'Asia/Kabul',
  '+0500' => 'Antarctica/Mawson',
  '+0530' => 'Asia/Colombo',
  '+0545' => 'Asia/Kathmandu',
  '+0600' => 'Antarctica/Vostok',
  '+0630' => 'Asia/Rangoon',
  '+0700' => 'Antarctica/Davis',
  '+0800' => 'Antarctica/Casey',
  '+0845' => 'Australia/Eucla',
  '+0900' => 'Asia/Dili',
  '+0930' => 'Australia/Darwin',
  '+1000' => 'Antarctica/DumontDUrville',
  '+1030' => 'Australia/Adelaide',
  '+1100' => 'Antarctica/Macquarie',
  '+1130' => 'Pacific/Norfolk',
  '+1200' => 'Asia/Anadyr',
  '+1300' => 'Antarctica/McMurdo',
  '+1345' => 'Pacific/Chatham',
  '+1400' => 'Pacific/Fakaofo',
  '-0100' => 'America/Scoresbysund',
  '-0200' => 'America/Bahia',
  '-0300' => 'America/Araguaina',
  '-0330' => 'America/St_Johns',
  '-0400' => 'America/Anguilla',
  '-0430' => 'America/Caracas',
  '-0500' => 'America/Atikokan',
  '-0600' => 'America/Bahia_Banderas',
  '-0700' => 'America/Boise',
  '-0800' => 'America/Dawson',
  '-0900' => 'America/Anchorage',
  '-0930' => 'Pacific/Marquesas',
  '-1000' => 'America/Adak',
  '-1100' => 'Pacific/Midway'
);
define('COOKIENAME', '_settings');
// check for POST settings
if (isset($_POST['clear'])) {
	setcookie(COOKIENAME); // clear the cookie
}
// we have a form submission; set the cookie
if (isset($_POST['TZ'])) {
	$TZ = $_POST['TZ'];
	$TF = $_POST['TF'];
	$BG = $_POST['BG'];
	$FG = $_POST['FG'];
	if (isset($_POST['KITTENS']) && $_POST['KITTENS']) $BG='kittens';
	$cookiestring = "$TZ;$TF;$BG;$FG";
	// cookie duration is 10 years
	// error_log(print_r($_POST,TRUE));
	setcookie(COOKIENAME, $cookiestring, time()+(60*60*24*365*10), '/');
}
// otherwise, check the cookie
elseif (isset($_COOKIE[COOKIENAME]) && $_COOKIE[COOKIENAME]) {
	//error_log(print_r($_COOKIE,TRUE));
	$settings = $_COOKIE[COOKIENAME];
	list($TZ, $TF, $BG, $FG) = split(';', $settings);
}
// otherwise, guess
// the _TZ={offset} is supplied by the Javascript in index.php
elseif (isset($_GET['_TZ'])) {
    $BG = $FB = '';
	$m = $_GET['_TZ'];
	$h = floor($m / 60);
	$offset = sprintf('%s%02d%02d',
		($h < 0) ? '-' : '+', abs($h), abs($m % 60));
	$TZ = $tzmap[$offset];
	//error_log(sprintf("_TZ=%s offset=%s TZ=%s\n", $_GET['_TZ'], $offset, $TZ));
}
if (!isset($FG)) $FG = '#000';
if (!isset($BG)) $BG = '#ddd';
if (!isset($TF)) $TF = 'g:ia';
//if (!isset($TZ)) $TZ = 'UTC';
