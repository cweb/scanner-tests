<?php
/* Watcher test findings */

// parse the query string values
parse_str($_SERVER['QUERY_STRING']);
header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

// should flag cookie poisoning
setcookie('Poison', $url, 1, '/', 'HttpOnly');

// should NOT flag cookie poisoning - this would be a false positive,
// we don't want to flag stuff so loosely.
setcookie('Poison','xxx' . $url . 'xxx', 1, '/', 'HttpOnly');

?> 

<html>
<head>
	<title>Watcher test page for user-controlled cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pasv.UserControlled.Cookie.cs</h1>
<p>1 alert, 1 issue.</p>

<ol>
<li><strong>User-controllable cookie </strong> Check for cookie poisoning.</li>
</ol>
<br />

</body>
</html>