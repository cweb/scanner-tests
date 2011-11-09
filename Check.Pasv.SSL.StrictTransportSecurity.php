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
header('Strict-Transport-Security: max-age=500');


?> 

<html>
<head>
	<title>Watcher test page for Strict-Transport-Security header</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<h1>Test Check.Pasv.SSL.StrictTransportSecurity.cs</h1>
<p>1 alert, 1 issue.</p>

<ol>
<li><strong>Strict-Transport-Security </strong> Alert when the Strict-Transport-Security header is not set on an SSL page</li>
</ol>




</body>
</html>
