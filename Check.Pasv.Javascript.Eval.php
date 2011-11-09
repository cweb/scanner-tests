<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Javascript eval checks</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="CheckPasvJavascript.js"></script>
</head>
<body>

<h1>Test Check.Pasv.Javascript.Eval.cs</h1>
<p>2 alerts, 4 issues</p>

<ol>
<li><strong>Dangerous inline Javascript - eval </strong> Check for javascript eval() usage</li>
<li><strong>Dangerous external Javascript - eval </strong> Check for javascript eval() usage in external javascript</li>
</ol>

<br />

<!-- should trigger the Javascript eval usage, setInterval, and setTimeout -->
<script>
eval(var a='b'; load());
setInterval(1,1);
setTimeout(1,1);
</script>



</body>
</html>