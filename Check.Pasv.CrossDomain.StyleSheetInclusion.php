<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-cache');

?> 

<html>
<head>
	<title>Watcher test page for cross-domain stylesheet inclusion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="CheckPasvCrossDomain.css" />
	<link rel="stylesheet" type="text/css" href="http://lookout.net/foo.css" />
	<style>
		@import url('http://lookout.net/foobar.css');
	</style>
</head>
<body>

<h1>Test Check.Pasv.CrossDomain.StyleSheetInclusion.cs</h1>
<p>2 alerts, 3 total issues.</p>

<ol>
<li><strong>import directive inline</strong> Check each style block for 'import' directives with cross-domain reference.</li>
<li><strong>import directive in .css</strong> Check each .css file for 'import' directives with cross-domain reference.</li>
<li><strong>link rel</strong> Check each link tag href attribute for cross-domain reference.</li>
</ol>
<br />



</body>
</html>