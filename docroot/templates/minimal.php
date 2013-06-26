<!DOCTYPE html>
<html>
<head>
<title>TODAY-NOW</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="generator" content="Glen Campbell: http://glenc.co/"/>
<meta name="description" content="Calendar and clock: a single-function site"/>
<meta name="keywords" content="calendar,clock,date,time"/>
<!-- <?php echo basename(__FILE__); ?> -->
<!-- Timezone is <?php echo $TZ;?> -->
<link href='http://fonts.googleapis.com/css?family=Life+Savers' rel='stylesheet' type='text/css'>
<style type="text/css">
body { 
font-family: 'Life Savers', Helvetica, cursive; 
margin: 5em 0 5em 40px;
}
#box { 
font-size: 2em; 
line-height: 1em;
border-bottom: 1px silver dotted;
}
#copyright { 
font-family: helvetica, arial, serif;
font-size: 80%; 
position: absolute;
bottom: 0;
margin-bottom: 10px;
color: gray;
}
a, a:hover, a:link, a:visited {
color: gray;
text-decoration: underline;
}
a:hover {
text-decoration: none;
font-style: italic;
}
</style>
</head>
<body onload="ajax(page,'clock')">
<div id="content">
  <div id="box">
  	<span id="date"><?php echo date('F j, Y');?></span>
  	<span id="clock"><? php echo date($TF);?></span>
  </div>
</div>
<p id="copyright">&copy;<?php echo date('Y');?>
 <a href="http://glen-campbell.com/"
 title="Perhaps the most amazing site on the Internet. Perhaps not.">Glen Campbell</a>
&bull; <a href="/help" title="Click here if you need assistance">Help</a>
&bull; <a href="/settings" title="Click here to change your time zone, format, and other settings">Settings</a></p>
</body>
</html>