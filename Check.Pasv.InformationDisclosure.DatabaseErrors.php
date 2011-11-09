<?php
/* Watcher test findings */
   
header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Information Disclosure with database errors</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.InformationDisclosure.DatabaseErrors.cs</h1>
<p>1 issue, 2 alerts</p>

<ol>
<li><strong>SQL error message detection </strong> Flag SQL error messages found in responses</li>
</ol>
<br />

<!-- database error should trigger a finding
microsoft ole db provider for odbc drivers error
-->



</body>
</html>