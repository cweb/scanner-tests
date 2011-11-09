<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Adobe Flash cross domain settings</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- just a pseudo-request to get the crossdomain.xml to download -->
	<link rel="stylesheet" href="crossdomain.xml" />
</head>
<body>

<h1>Test  Check.Pasv.Flash.CrossDomain.cs</h1>
<p>1 alert, 2 issues.</p>

<ol>
<li><strong>Flash crossdomain.xml allow-access-from untrusted domain </strong> Check crossdomain.xml for untrusted domains in allow-access-from tag</li>
<li><strong>Flash crossdomain.xml allow-http-request-headers-from untrusted domain </strong> Check crossdomain.xml for untrusted domains in allow-access-from tag</li>
</ol>


	<!-- just a pseudo-request to get the crossdomain.xml to download -->
	<iframe src="crossdomain.xml" /></iframe>
	
</body>
</html>