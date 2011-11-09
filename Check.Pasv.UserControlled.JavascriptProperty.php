<?php
/* Watcher test findings */

// parse the query string values
parse_str($_SERVER['QUERY_STRING']);
header('Content-Type: text/html; charset=utf-8');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for user-controlled Javascript properties</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pasv.UserControlled.JavascriptProperty.cs</h1>
<p>1  alert, 2 issues.</p>
<h2 style="color: red">query string must included url=http://www.lookout.net for these checks to fire</h2>

<ol>
<li><strong>Javascript references </strong> Check javascript for .src or .href assignments that contain user input.</li>

</ol>
<br />


<!-- 6 should trigger the user-controlled javascript reference -->
<script>if (1 == 2) window.location.href = "<?php echo $url ?>";</script>

<!-- 7 should trigger the user-controlled javascript reference -->
<script>if (1 == 2) window.open("<?php echo $url ?>");</script>

<!-- 8 should trigger the user-controlled javascript reference -->
<!-- I've hardcoded it so that the query string for this page has to have url=http://lookout.net -->
<script src="CheckPasvUserControlled.js"></script>


</body>
</html>