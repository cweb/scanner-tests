<?php
/* Watcher test findings */

// force a redirect to SSL
// force a redirect to www subdomain so cache-control check works
if($_SERVER['SERVER_PORT'] != 443) {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: https://www.nottrusted.com".$_SERVER['REQUEST_URI']);
   exit();
   }
   
header('Content-Type: text/html; charset=utf-8');
// Should flag since we're not using no-store with SSL
header('Cache-control: no-cache');

?> 

<html>
<head>
	<title>Watcher test page for HTTP Header cache-control </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.Header.CacheControl.cs</h1>
<p>1 issue, 1 alert.</p>
<p>Note: other SSL checks may be triggered</p>

<ol>
<li><strong>HTTP cache-control header not set/weak </strong> Flag when cache-control header is not set or is set to an insecure value</li>
</ol>




</body>
</html>
