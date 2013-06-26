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
<style type="text/css">
body {
<?php if (strtoupper($BG) == 'KITTENS') { ?>
  background: #fff url('kittens.jpg') no-repeat fixed center;
  background-size: 100%;
<?php } elseif (isset($BG) && $BG) { ?>
  background: <?php echo $BG;?>;
<?php } else { ?>
  background: #ddd;
<?php } ?>
  color: gray;
  width: 6in;
  margin-left: auto;
  margin-right: auto;
  margin-top: 5%;
  margin-bottom: 5%;
  text-align: center;
  font-family: helvetica, arial, sans-serif;
}
#box {
  background: #fff;
  border: 3pt #aaa solid;
  padding: 2em;
  text-align: center;
  color: <?php if (isset($FG) && $FG) echo $FG; else echo 'black';?>;
}
#day {
  font-size: 4in;
  font-weight: bold;
  line-height: 1em;
  margin: 0;
  padding: 0;
}
#top, #bottom {
  font-size: 3em;
  line-height: 1em;
  margin: 0;
  padding: 0;
  font-weight: bold;
}
#copyright {
  font-size: 10pt;
}
a:link, a:visited { 
  color: gray; 
}
a:hover { 
  color: black; 
  text-decoration: underline; 
}
form {
  background: #ddd;
  color: black;
  margin: 1em;
  padding: 2em;
  text-align: left;
  line-height: 150%;
}
input, select {
  margin-bottom: 0 0 1em 0;
}
input[type="submit"] {
  float: right;
}
label {
  font-size: smaller;
  font-style: italic;
  padding: 0;
}
.note {
  padding: 0;
  margin: 0 0 1em 0;
  line-height: 150%;
  font-size: smaller;
  text-align: left;
}
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
<p id="copyright">&copy;<?php echo date('Y');?>
 <a href="http://glen-campbell.com/"
 title="Perhaps the most amazing site on the Internet. Perhaps not.">Glen Campbell</a>
&bull; <a href="/help" title="Click here if you need assistance">Help</a>
&bull; <a href="/settings" title="Click here to change your time zone, format, and other settings">Settings</a></p>
</body>
</html>