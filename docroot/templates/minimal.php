<!DOCTYPE html>
<html>
<head>
<title>TODAY-NOW</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Glen Campbell: http://glenc.co/">
<meta name="description" content="Calendar and clock: a single-function site">
<meta name="keywords" content="calendar,clock,date,time">
<!-- <?php echo basename(__FILE__); ?> -->
<!-- Timezone is <?php echo $TZ;?> -->
<style type="text/css">
body {
font-family: Helvetica, Arial, cursive;
font-size: 12pt;
margin: 0;
text-align: center;
background-color: white;
height: 90%;
}
#content {
height: 100%;
}
#box {
position: relative;
top: 50%;
transform: translateY(-100%);
}
#copyright {
font-family: helvetica, arial, serif;
font-size: 9pt;
padding-bottom: 12pt;
color: silver;
position: relative;
top: 100%;
transform: translateY(-200%);
}
#date {
font-size: 14px;
display: block;
color: gray;
text-transform: uppercase;
letter-spacing: 3px;
}
#clock {
display: block;
font-weight: bold;
color: black;
font-size: 50px;
}
a, a:hover, a:link, a:visited {
color: silver;
text-decoration: underline;
}
a:hover {
text-decoration: none;
color: gray;
}
</style>
</head>
<body onload="ajax(page,'clock')">
<div id="content">
  <div id="box">
  	<span id="date"><?php echo date('F j, Y');?></span>
  	<span id="clock"><? php echo date($TF);?></span>
  </div>
<p id="copyright">&copy;<?php echo date('Y');?>
 <a href="http://glenc.io/"
 title="Perhaps the most amazing site on the Internet. Perhaps not.">Glen Campbell</a>
&bull; <a href="/help" title="Click here if you need assistance">Help</a>
&bull; <a href="/settings" title="Click here to change your time zone, format, and other settings">Settings</a></p>
</div><!-- #content -->
</body>
</html>
