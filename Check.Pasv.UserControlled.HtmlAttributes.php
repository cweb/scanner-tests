<?php
/* Watcher test findings */

// parse the query string values
parse_str($_SERVER['QUERY_STRING']);
header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for user-controlled HTML</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pasv.UserControlled.HtmlAttributes.cs</h1>
<p>1  alert, 4 issues.</p>
<h2 style="color: red">query string must included url=http://www.lookout.net for these checks to fire</h2>

<ol>
<li><strong>User-controllable HTML attribute values </strong> </li>
</ol>
<br />


<!-- 1 should trigger the user-controlled cross-domain script -->
<script src="<?php echo $url ?>" ></script>
<!-- 2 should trigger the user-controlled cross-domain stylesheet inclusion -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url ?>" />

<!-- 3 should trigger the user-controlled form submit -->
<form action="<?php echo $url ?>/test" ></form>

<!-- 5 should trigger the user-controlled href -->
<a href="<?php echo $url ?>/test?andStuff" >here's a user-controlled link</a>

<a href=<?php echo $url ?> id=myid name=name>attributes without quotes</a>


</body>
</html>