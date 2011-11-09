<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

// parse the query string values
parse_str($_SERVER['QUERY_STRING']);

?> 

<html>
<head>
	<title>Watcher test page for User-controlled Javascript Events</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<!-- 1 should trigger the user-controlled js event -->
<body onload="<?php echo $url ?>">

<h1>Check.Pasv.UserControlled.JavascriptEvent.cs</h1>
<h2 style="color: red">query string must included url=myuserinput for these checks to fire</h2>
<p>1 alert, 6 issues.  </p>

<ol>
<li><strong>User-controllable javascript events </strong> Check each html element's javascript events for user input.</li>
</ol>
<br />


<!-- 2 should trigger the user-controlled js event -->
<a href="" onmouseover="<?php echo $url ?>" ></a>

<!-- 3 should trigger the user-controlled js event -->
<img srcf="" onerror="<?php echo $url ?>" />

<!-- 4 should trigger the user-controlled js event -->
<form src="" onsubmit="<?php echo $url ?>" ></form>

<!-- 5 should NOT trigger the user-controlled js event -->
<a href="" onblahblah="<?php echo $url ?>" ></a>

<!-- 6 should trigger the user-controlled js event -->
<a href="" onmouseover="<?php echo $url ?>" ></a>

<!-- 7 should trigger the user-controlled js event -->
<div style="" onmousemove="<?php echo $url ?>" ></div>

<!-- 8 should trigger the user-controlled js event -->
<p style="" onexit="<?php echo $url ?>" ></p>



</body>
</html>
