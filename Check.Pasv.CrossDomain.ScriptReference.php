<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-cache');

?> 

<html>
<head>
	<title>Watcher test page for cross-domain javascript inclusion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.CrossDomain.ScriptReference.cs</h1>
<p>1 third-party (cross-domain) script inclusion issue should get flagged here.</p>

<ol>

<li><strong>Third-party (cross-domain) script inclusion </strong> Check each script tag src attribute for cross-domain reference.</li>
</ol>
<br />

<script src="https://lookout.net/foo.js"></script>

</body>
</html>