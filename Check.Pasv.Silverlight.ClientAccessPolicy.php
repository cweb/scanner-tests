<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Silverlight clientaccesspolicy.xml</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- just a pseudo-request to get the clientaccesspolicy.xml to download -->
	<link rel="stylesheet" href="clientaccesspolicy.xml" />
</head>
<body>

<h1>Test  Check.Pasv.Silverlight.ClientAccessPolicy.cs</h1>
<p>1 issue, 1 alert</p>

<ol>
<li><strong>Silverlight clientaccesspolicy.xml (similar to Flash's crossdomain.xml)  domain uri="*" </strong> Check for  domain uri="*" wildcard domain references, and domain references outside of our trusted domain</li>
</ol>
<br />



</body>
</html>