<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Adobe Flash setting</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test  Check.Pasv.Flash.AllowScriptAccess.cs</h1>
<p>1 alert, 1 issue.</p>

<ol>
<li><strong>Flash allowScriptAccess XSS </strong> Check param tag's name attribute for 'allowScriptAccess' + check value attribute for value (when Flash clsid is found 'nearby')</li>
</ol>


<!-- EMBED should cause a finding -->
<EMBED src="" AllowScriPtAccess="Always" ></EMBED>

<!-- OBJECT should cause a finding -->
<object type="application/x-shockwave-flash"
data=""
width="400" height="326">
<param name="allowScriptAccess" value="Always" />
<param name="movie" value="" />
</object>


	
</body>
</html>