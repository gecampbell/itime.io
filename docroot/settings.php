<?php
/**
 * (c)2012 Glen Campbell. All rights reserved.
 */
require('cookie.inc');
if (isset($TZ) && $TZ)
	date_default_timezone_set($TZ);
else
	date_default_timezone_set('UTC');
$formats = array(
  'g:ia' => '4:06pm',
  'h:ia' => '04:06pm',
  'g:iA' => '4:06PM',
  'h:iA' => '04:06PM',
  'G:i'  => '16:06 (24-hour)',
  'H:i'  => '16:06 (24-hour, leading zeros)',
  'B'    => 'Swatch Internet Time'
);
?><!DOCTYPE html>
<html>
<head>
<title>Settings</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="generator" content="Glen Campbell: http://glenc.co/">
<style type="text/css">
<?php include('styles.css');?>
#clock { display: none; }
</style>
</head>
<body>
  <div id="box">
    <p id="top">Settings</p>
    <form method="POST" action="/">
    <p>
    <label for="TZ">Time zone</label><br />
    <select name="TZ">
<?php
foreach(timezone_identifiers_list() as $timezone) {
	printf("\t<option%s>%s</option>\n", 
		(isset($TZ) && $timezone==$TZ) ? ' selected="selected"' : '', 
		$timezone);
}
?>
    </select>
    </p>
    <p>
    <label for="TF">Time format</label><br />
    <select name="TF">
<?php
foreach($formats as $format => $prompt) {
	printf("\t<option value=\"%s\"%s>%s</option>\n",
		$format,
		($TF==$format) ? ' selected="selected"' : '',
		$prompt);
}
?>
    </select>
    </p>
    <p>
    <label for="FG">Foreground color</label><br />
    <input type="color" name="FG" value="<?php echo $FG;?>" size="5"/>
    </p>
    <p>
    <label for="BG">Background color</label><br />
    <input type="color" name="BG" value="<?php echo $BG;?>" size="5"/>
    <input type="checkbox" name="KITTENS"<?php if ($BG=='kittens') echo ' checked="checked"'?>/> <label for="KITTENS">Kittens?</label>
    </p>
    <input type="submit" value="Save Settings" name="submit"/>
    </form>
    <form action="/" method="POST">
    <p class="note">The form above will set a cookie containing your preferences 
    so that they will be
    remembered each time you return to this site. Apart from regular log data, none of
    your personal information is tracked or maintained. Press the button below
    to clear your saved settings.</p>
    <input type="submit" name="clear" value="Clear my settings"/>
    </form>
  </div>
<?php require('footer.inc');?>
</body>
</html>
