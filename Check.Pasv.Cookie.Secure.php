<?php
/* Watcher test findings */
header('Content-Type: text/html; charset=utf-8');

// force a redirect to SSL
// force a redirect to www subdomain so loosely scoped cookie works
if($_SERVER['SERVER_PORT'] != 443) {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: https://www.nottrusted.com".$_SERVER['REQUEST_URI']);
   exit();
   }
   
header('Cache-control: no-store');

// should flag cookie without the secure flag 
setcookie('Name1', 'weak cookie', null, null, null, false, true);
?> 

<html>
<head>
	<title>Watcher test page for secure cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<h1>Test Check.Pasv.Cookie.Secure.cs</h1>
<p>1 alert, 1 issue.</p>

<ol>
<li><strong>Secure  flag </strong> Alert on Set-cookie if 'secure' not present for SSL page</li>
</ol>




</body>
</html>
