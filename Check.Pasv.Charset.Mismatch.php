<?php
/* Watcher test findings */

// Should flag Content-type text/html missing charset
header('Content-Type: text/html; charset=utf-8');

header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for charset mismatches</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<body>

<h1>Test Check.Pasv.Charset.Mismatch.cs</h1>
<p>2 issues get flagged here.</p>

<ol>
<li><strong>HTML </strong> Alert when a mismatch charset is defined between the HTTP header and HTML meta tag.</li>
<li><strong>XML </strong> Alert when a mismatch charset is defined between the HTTP header and XML  encoding definition.</li>
</ol>


	<!-- just a pseudo-request to get the XML to download -->
	<iframe src="Check.Pasv.Charset.Utf8.xml" /></iframe>

</body>
</html>