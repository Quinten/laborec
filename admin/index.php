<html>
<head><title>LaboBackdoor</title>
<script type="text/javascript" src="_js/swfobject.js"></script>
<script type="text/javascript" src="_js/jquery.js"></script>
<script type="text/javascript" src="_js/q_ui.js"></script>
<script type="text/javascript" src="_js/qforms.js"></script> 
<style type="text/css">
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

.ui-dialog-container {
	background-color:#FFFFFF;
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 10pt;
	color: #000000;
	text-align:center;
}
.ui-dialog-titlebar {
	background-color:#FFFFFF;
}
.ui-dialog-content {
	background-color:#DDDDDD;
	padding-top: 20px;
}
.ui-dialog-titlebar-close {
	display: none
}
.ui-dialog-titlebar-close-hover {
	display: none
}
.ui-dialog-buttonpane {
}
</style>
</head>
<body>
<center>
<img src="../labobanner.jpg"></img>
<?php
session_start();
if ((!isset($_SESSION['message'])) || ($_SESSION['message'] == $_SESSION['lastmessage'])) {
	$_SESSION['message'] = "With this page you can alter the different Labo-pages.";
}else{
	echo "<SCRIPT LANGUAGE=\"javascript\" TYPE=\"text/javascript\">alert(\"{$_SESSION['message']}\");</SCRIPT>\n";
}
echo "<p>" . $_SESSION['message'] . "</p>";
$_SESSION['lastmessage'] = $_SESSION['message'];
?>
	<table cellpadding="0" cellspacing="16" border="0">
		<tr>
			<td width="500">
	<form action="addnews.php" method="post" accept-charset="iso-8859-1"> 
			<p> 
			<h3>Add a newsitem to the newspage!</h3>
			Title:<BR><input name="title" type="text" size="40" tabindex="100"><BR>
			Author:<BR><input name="author" type="text" size="40" tabindex="30"><BR>  
			Newsitem:<BR><textarea name="body" rows="7" cols="40" tabindex="2000"></textarea><BR>
			Link:<BR><input name="link" type="text" size="40" value="http://" tabindex="300"><BR><br> 
			<input type="submit" name="submit" value="Add news" title="addthenews" tabindex="1005"> 
			</p> 
		</form>
		<br><br>
		<form enctype="multipart/form-data" action="loaduptracks.php" method="POST" onSubmit="confirm('U R about to upload some stuff to the labosite, this can take several minutes. R U SURE?')">
			<p>
			<h3>Add a track (mp3) to the trackspage!</h3>
			Title of the track:<BR><input name="title" type="text" size="40" tabindex="100"><BR>
			Name of the artist:<BR><input name="artist" type="text" size="40" tabindex="100"><BR>
			<input type="hidden" name="MAX_FILE_SIZE" value="20000000">
			Select a file:<br><input name= "upfile" type="file"><br><br>
			<input type="submit" value="Upload" onclick="showLoadMsg('Uploading!')" />
		</p>
		</form>
		<br><br>
		<form enctype="multipart/form-data" action="loadupsamples.php" method="POST" onSubmit="confirm('U R about to upload some stuff to the labosite, this can take several minutes. R U SURE?')">
			<p>
			<h3>Add a samplespackage(zipped) to the samplespage!</h3>
			Title of the samples-package:<BR><input name="title" type="text" size="40" tabindex="100"><BR>
			<input type="hidden" name="MAX_FILE_SIZE" value="20000000">
			Select a file:<br><input name= "upfile" type="file"><br><br>
			<input type="submit" value="Upload" onclick="showLoadMsg('Uploading!')" />
		</p>
		</form>
		<br><br>
		<form action="addlink.php" method="post" accept-charset="iso-8859-1"> 
			<p> 
			<h3>Add a link to the linkpage!</h3>
			Link:<BR><input name="link" type="text" size="40" value="http://" tabindex="300"><BR>
			Comment:<BR><textarea name="comment" rows="3" cols="40" tabindex="2000"></textarea><BR><br> 
			<input type="submit" name="submit" value="Add link" title="addlink" tabindex="1005"> 
			</p> 
		</form>
		<br><br>
		</td>
		</tr>
	</table>
	<div id="loaddialogbox">&nbsp;</div>
<script type="text/javascript">
		// <![CDATA[			
				var so = new SWFObject("swf/loaderani.swf?"+Math.random(), "swf", "200", "20", "8", "#000000");
				so.addParam("scale", "noscale");
				so.write("loaddialogbox");
						
		// ]]>
</script>  
		</center>
</body>
</html>