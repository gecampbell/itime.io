<?php
/**
 * (c)2012 Glen Campbell. All rights reserved.
 */
require('cookie.inc');
if (!isset($TZ)) $TZ = 'UTC';
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
#plain { 
  margin-top: 2em;
  text-align: left; 
  line-height: 150%;
  font-size: 11pt;
}
</style>
</head>
<body onload="ajax(page,'clock')">
<div id="content">
  <div id="box">
  <p id="top">Help</p>
  <div id="plain">
  <p>This website displays the current date and time.</p>
  <p>And, that's pretty much about it. Sorry if you were looking for more.</p>
  <p>It tries to detect your timezone from your browser; if your browser has
  Javascript disabled or does not support the proper functions, it will fall
  back to UTC. Click on <a href="/settings">Settings</a> to change your time 
  zone and your preferences for how the time is displayed. You can also change
  the various colors used.</p> 
  <p>Hint: try changing the background color to "kittens." (Note: will not work
  on modern browsers that support the color picker option.)</p>
  <p><i>Acknowledgements:</i> Thanks very much to my friends at 
  <a href="http://friendfeed.com">FriendFeed</a> who actively gave suggestions
  and pointers as to how the site could be improved. Without you, this would have
  been nothing more than a site that displayed the date. Special thanks to
  Stephen, Laura, Jennifer, Kelli, Alex, Tinfoil, Joe, Eivind,
  Higlet, Curdys, and Betsy, who played with it and offered comments. You're
  the greatest, and I will share the first year's profits from the site with
  you.</p>
  <p>If you'd like to see what new features are being tested, you can
  try out the <a href="http://alpha.today-now.com">alpha version of the site</a>.</p>
  </div>
  </div>
</div>
<?php require('footer.inc');?>
</body>
</html>
<?php require('ajax.js');
