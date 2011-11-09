<?php
/* Watcher test findings */

// force a redirect to SSL
// should flag the SSL cert validation and the v2 protocol checks
if($_SERVER['SERVER_PORT'] != 443) {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: https://www.nottrusted.com".$_SERVER['REQUEST_URI']);
   exit();
   }
   
header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for SSL protocol version</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pasv.SSL.Version.cs</h1>
<p>1 issue, 1 alert.</p>
<p>NOTE 2 issues might get flagged including the SSL cert validation failure.</p>

<ol>
<li><strong>Insecure protocol </strong> Flag if SSL v2 is allowed</li>
</ol>
<br />

</body>
</html>