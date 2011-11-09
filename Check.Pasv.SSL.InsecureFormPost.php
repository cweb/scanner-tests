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
	<title>Watcher test page for SSL insecure form POST</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.SSL.InsecureFormPost.cs</h1>
<p>1 alert, 1 issue.</p>

<ol>
<li><strong>Insecure form post </strong> Flag if a form posts to HTTP from HTTPS page</li>
</ol>

<br />
<!-- should flag the insecure form post check -->
<form name="http post" action="http://www.nottrusted.com/foo">


</body>
</html>