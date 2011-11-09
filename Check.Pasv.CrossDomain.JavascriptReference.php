<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-cache');

?> 

<html>
<head>
	<title>Watcher test page for Cross-domain javascript references</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.CrossDomain.JavascriptReference.cs</h1>
<p>2 Third-party (cross-domain) script inclusion issues should get flagged here.</p>

<ol>

<li><strong>script blocks</strong> Check each script tag body  for .src or .href cross-domain references.</li>
<li><strong>javascript files </strong> Check each  javascript file for .src or .href cross-domain references.</li>
</ol>
<br />

<script src="CheckPasvCrossDomain.js"></script>
<script>
var addScriptElement = document.createElement("script");
addScriptElement.language = "JavaScript";
addScriptElement.type = "text/javascript";
addScriptElement.src = "http://www.lookout.net/foo.js";
</script>

</body>
</html>