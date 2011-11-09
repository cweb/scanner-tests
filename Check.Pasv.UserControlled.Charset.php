<?php
/* Watcher test findings */

// parse the query string values
parse_str($_SERVER['QUERY_STRING']);

// Should flag Content-type text/html missing charset
header('Content-Type: text/html; charset=' . $charset);
header('Cache-control: no-store');


?> 

<html>
<head>
	<title>Watcher test page for User-controlled charset</title>
	
	<!-- 6 trigger the user-controlled meta tag charset-->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset ?>" />
</head>
<body>

<h1>Check.Pasv.UserControlled.Charset.cs</h1>
<h2 style="color: red">query string must included url=http://www.lookout.net for these checks to fire</h2>
<p>2 alerts, 3 issues</p>

<ol>
<li><strong>1 User-controllable Content-Type Header charset value. </strong> </li>
<li><strong>2 User-controllable Meta tag charset value. </strong> </li>
<li><strong>3 User-controllable charset value in XML document. </strong> </li>
</ol>

<iframe src="CheckPasvUserControlledCharset.xml?value=mycharset"></iframe>

</body>
</html>
