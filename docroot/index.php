<?php
/**
 * (c)2012 Glen Campbell. All rights reserved.
 */
require('cookie.inc');
if (!isset($TZ))	$TZ = 'UTC';
if (!$TZ) 			$TZ = 'UTC';
date_default_timezone_set($TZ);
?><!DOCTYPE html>
<html>
<head>
<title>TODAY-NOW</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="generator" content="Glen Campbell: http://glenc.co/"/>
<meta name="description" content="Calendar and clock: a single-function site"/>
<meta name="keywords" content="calendar,clock,date,time"/>
<!-- Timezone is <?php echo $TZ;?> -->
<style type="text/css">
<?php include('styles.css');?>
</style>
</head>
<body onload="ajax(page,'clock')">
<div id="content">
  <div id="box">
    <p id="top"><?php echo date('l');?> <span id="clock" title="Time not right? Click Settings, below, to choose your timezone."><?php echo date($TF);?></span></p>
    <p id="day"><?php echo date('j');?></p>
    <p id="bottom"><?php echo date('F Y');?></p>
  </div>
</div>
<?php require('footer.inc');?>
</body>
</html>
<?php require('ajax.js');
