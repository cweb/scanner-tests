<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');

?> 

<html>
<head>
	<title>Watcher test page for ASP.NET VIEWSTATE MAC protection</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pasv.Asp.Net.ViewState.Mac.cs</h1>
<p>1 alert, 1 issue.</p>

<ol>
<li><strong>VIEWSTATE has MAC protection disabled </strong> this allows for VIEWSTATE tampering and XSS.</li>
</ol>
<br />


<input alt="this VIEWSTATE has MAC protection disabled" type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTU1NzgwMDEyMWRk" />
<input alt="this VIEWSTATE has MAC protection enabled" type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTU1NzgwMDEyMWRkyXsYtX0YSjl1euSAzUgkQtEm+eY=" />

</body>
</html>
