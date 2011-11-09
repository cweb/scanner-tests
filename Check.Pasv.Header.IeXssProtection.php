<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');
// Test case
header('X-XSS-Protection: 0');

?> 

<html>
<head>
	<title>Watcher test page for HTTP Header X-XSS-Protection </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.Header.IeXssProtection.cs</h1>
<p>1 alert, 1 issue</p>

<ol>
<li><strong>X-XSS-Protection </strong> Alert when IE's XSS protection was disabled by the site.</li>
</ol>




</body>
</html>
