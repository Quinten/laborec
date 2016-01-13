<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laborecordings</title>
<script type="text/javascript" src="swfobject.js"></script>
<style type="text/css">
	
	/* hide from ie on mac \*/
	html {
		height: 100%;
		overflow: hidden;
	}
	
	#flashcontent {
		height: 100%;
	}
	/* end hide */

	body {
		height: 100%;
		margin: 0;
		padding: 0;
		background-color: #ffffff;
	}
	
h3 {font-family: Tahoma, Arial, Helvetica, sans-serif; font-size:16pt;line-height:22pt;background-color:#000000; color: #ffffff;}

a, p, center {font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 10pt;color: #000000;}
b {font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 10pt;color: #000000;}

		a:active {color: #666666;text-decoration: none;}
		a:link   {color:#666666;text-decoration: none;}
		a:hover {color: #666666;text-decoration: underline;}
		a:visited {color: #666666;text-decoration: underline;}
</style>
</head>
<body>

	<div id="flashcontent">
<center>
<img src="labobanner.jpg"></img>
	<p>You are missing out on the dazzling flashcontent. You can get
		<a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">the latest Flash-player</a> if you wish.</p><br><br><br>
	
	<table cellpadding="0" cellspacing="16" border="0">
		<tr>
			<td width="500">
			<?php
			include ('txtequivalent.php');
			?>
			</td>
		</tr>
	</table>
		</center>
	</div>
	
	<script type="text/javascript">
		// <![CDATA[
		
		var so = new SWFObject("loadingsystem.swf", "laborecsystem", "100%", "100%", "8", "#ffffff");
		so.addVariable("flashVarText", "this is passed in via FlashVars for example only");
		so.addParam("scale", "noscale");
		so.write("flashcontent");
		
		// ]]>
	</script>
	
</body>

</html>