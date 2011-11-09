<?php
/* Watcher test findings */
   
header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Information Disclosure in HTTP Referrer</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.InformationDisclosure.ReferrerLeak.cs</h1>
<p>1 alert, 4 issues</p>
<p>Note:  The information disclosure in URL will get triggered here as well.</p>

<ol>
<li><strong>HTTP referrer information leak </strong> Check HTTP referer header for cross-domain requests that leak sensitive information.</li>
<li><strong>HTTP referer header leak of Credit Card and SSN</strong> Check HTTP referer header for cross-domain requests that leak sensitive information.</li>
</ol>
<br />

<a href="http://www.lookout.net">Click here to trigger HTTP referrer leak</a><br />

</body>
</html>