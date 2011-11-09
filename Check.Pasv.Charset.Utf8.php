<?php
/* Watcher test findings */

// Should flag Content-type text/html missing charset
header('Content-Type: text/html; charset=iso-8859-1');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Charset checks</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<body>

<h1>Test Check.Pasv.Charset.UTF8.cs</h1>
<p>2 issues get flagged here if UTF8 is not specified as the content-type.</p>

<ol>
<li><strong>HTML</strong> Flag if response does not have UTF-8 charset first in the content-type HTTP header then in the meta tag HTML document.</li>
<li><strong>XML </strong> Flag if response does not have UTF-8 charset first in the content-type HTTP header then in the XML encoding definition.</li>
</ol>


	<!-- just a pseudo-request to get the XML to download -->
	<iframe src="Check.Pasv.Charset.Utf8.xml" /></iframe>
	
</body>
</html>
