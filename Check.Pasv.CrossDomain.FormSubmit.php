<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-cache');

?> 

<html>
<head>
	<title>Watcher test page for Cross-domain form submissions</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.CrossDomain.FormSubmit.cs</h1>
<p>1 cross-domain issue should get flagged here.</p>

<ol>
<li><strong>Third-party (cross-domain) form post </strong> Check each form tag action attribute for cross-domain reference.</li>
</ol>
<br />
<form name="cross-domain post" action="http://lookout.net/foo">


</body>
</html>