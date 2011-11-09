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
	<title>Watcher test page for SSL certificate validation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.SSL.CertValidation.cs</h1>
<p>2 alerts, 2 issues.</p>

<ol>
<li><strong>Cert validation </strong> Flag if certificate fails validation checks</li>
</ol>
<br />

</body>
</html>