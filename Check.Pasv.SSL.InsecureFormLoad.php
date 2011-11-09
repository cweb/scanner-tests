<?php
/* Watcher test findings */
   
header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for SSL insecure form load</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.SSL.InsecureFormLoad.cs</h1>
<p>1 alert 1 issue.</p>

<ol>
<li><strong>Insecure form load </strong> Flag if an insecure HTTP page hosts an HTTPS form.</li>
</ol>

<br />
<!-- should flag the insecure form post check -->
<form name="http post" action="https://www.nottrusted.com/foo">				
<label for="userNumber">User ID</label><input name="user" type="text" size="15" maxlength="32" /><br />
</form>


</body>
</html>