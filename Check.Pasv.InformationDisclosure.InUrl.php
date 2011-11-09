<?php
/* Watcher test findings */
   
header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Information Disclosure in URL</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.InformationDisclosure.InUrl</h1>
<p>1 alert, 4 issues</p>

<ol>
<li><strong>Sensitive information leak in URL params</strong> Check URL params for cross-domain requests that leak sensitive information.</li>
<li><strong>Credit Card and SSN leak in URL params</strong> Check URL params for cross-domain requests that leak sensitive information.</li>
</ol>
<br />


</body>
</html>