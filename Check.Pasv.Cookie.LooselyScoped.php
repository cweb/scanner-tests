<?php
/* Watcher test findings */
header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

// should flag cookie setting loosely scoped domain and missing httponly
setcookie('Name1', 'loosely scoped domain', 0, '/', '.nottrusted.com', FALSE, TRUE);
setcookie('Name2', 'another loosely scoped domain', 0, '/', '.nottrusted.com', FALSE, TRUE);
?> 

<html>
<head>
	<title>Watcher test page for loosely scoped cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<h1>Test Check.Pasv.Cookie.LooselyScoped.cs</h1>
<p>1 issue, 2 alerts should get flagged here.</p>
<p style="color: red; text-decoration: bold">Note that Watcher's Origin domain should be set to 'www.nottrusted.com' for these checks to fire.</p>

<ol>
<li><strong>Loosley scoped cookies </strong> Alert on Set-cookie w/ loosely-scoped domain</li>
</ol>




</body>
</html>
