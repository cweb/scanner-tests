<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Javascript eval checks</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.Javascript.Eval.cs</h1>
<p>1 alerts, 1 issue</p>

<ol>
<li><strong>Dangerous domain lowering  </strong> Check for document.domain=.parent.tld </li>
</ol>

<br />

<!-- should trigger the Javascript eval usage, setInterval, and setTimeout -->
<script>
document.domain = "nottrusted.com";
</script>



</body>
</html>
