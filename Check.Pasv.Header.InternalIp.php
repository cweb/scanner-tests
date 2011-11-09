<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
// Test case
header('X-Arbitrary-Header: A private IP lurkes here 192.168.1.1 for you.');
header('X-Arbitrary-Header2: A private IP lurkes here 10.1.1.1 for you.');


?> 

<html>
<head>
	<title>Watcher test page for internal IP address disclosure. </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.Header.InternalIp.cs</h1>
<p>1 alert, 1 issue</p>

<ol>
<li><strong>Internal IP disclosure in HTTP header </strong> </li>
</ol>




</body>
</html>
