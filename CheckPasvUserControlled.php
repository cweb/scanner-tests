<?php
/* Watcher test findings */

// Should flag Content-type text/html missing charset
header('Content-Type: text/html; charset=utf-8');

?> 

<html>
<head>
	<title>Watcher test page for User-controlled checks</title>
	
	<!-- 6 trigger the user-controlled meta tag -->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $url ?>" />
</head>
<body>

<h1>Test all User-controlled checks</h1>
<h2 style="color: red">query string must included url=http://www.lookout.net for these checks to fire</h2>
<p>11 User-controlled issue should get flagged here.  </p>

<ol>
<li><strong>4 User-controlled redirect </strong> Check Location header in 301 or 302 response for user-supplied path</li>
<li><strong>7 User-controlled redirect </strong> Check javascript window.location.href for user-supplied path. </li>
<li><strong>8 User-controlled redirect </strong> Check javascript window.open for user-supplied path.</li>
<li><strong>10 User-controllable charset </strong> Check the meta tag charset for user-controlled value.</li>

</ol>
<br />


<!-- 1 should trigger the user-controlled cross-domain script -->
<script src="<?php echo $url ?>" ></script>
<!-- 2 should trigger the user-controlled cross-domain stylesheet inclusion -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url ?>" />

<!-- 3 should trigger the user-controlled form submit -->
<form action="<?php echo $url ?>/test" ></form>

<!-- 4 should trigger the user-controlled cross-domain javascript reference -->
<script>window.open("CheckPasvUserControlledOpenRedirect.php?url=<?php echo $url ?>");</script>

<!-- 4 should trigger the user-controlled href -->
<a href="<?php echo $url ?>/test?andStuff" >here's a user-controlled link</a>

<!-- 7 should trigger the user-controlled javascript reference -->
<script>if (1 == 2) window.location.href = "<?php echo $url ?>";</script>

<!-- 8 should trigger the user-controlled javascript reference -->
<script>if (1 == 2) window.open("<?php echo $url ?>");</script>

<!-- 9 should trigger the user-controlled javascript reference -->
<!-- I've hardcoded it so that the query string for this page has to have url=http://lookout.net -->
<script src="CheckPasvUserControlled.js"></script>

<a href=<?php echo $url ?> id=myid name=name>attributes without quotes</a>



</body>
</html>
