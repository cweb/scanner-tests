<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

// should flag cookie without httponly 
setcookie('Name1', 'weak cookie');
?> 

<html>
<head>
	<title>Watcher test page for HttpOnly cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<h1>Test Check.Pasv.Cookie.HttpOnly.cs</h1>
<p>1 issue should get flagged here.</p>

<ol>
<li><strong>HttpOnly flag </strong> Alert on Set-Cookie if HTTPOnly is not set in the cookie</li>
</ol>




</body>
</html>
