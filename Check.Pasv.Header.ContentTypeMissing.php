<?php
/* Watcher test findings */

// Should flag missing Content-type and charset utf-8
header('Content-Type: ');

?> 

<html>
<head>
	<title>Watcher test page for HTTP Header Content-Type </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.Header.ContentTypeMissing.cs</h1>
<p>1 issue, 1 alert</p>
<p>Note: the Anti-MIME sniffing header may also be triggered</p>

<ol>
<li><strong>HTTP Response No Content-Type Header </strong> Flag responses that do not have Content-Type header set</li>
</ol>




</body>
</html>
