<?php
/* Watcher test findings */
   
header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Information Disclosure in comments</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.InformationDisclosure.Comments</h1>
<p>2 alerts, 7 issues</p>

<ol>
<li><strong>javascript file</strong> 3 suspicious comments in Javascript file</li>
<li><strong>javascript inline </strong> 1 suspicious comment in Javascript script inline</li>
<li><strong>HTML inline</strong> 2 suspicious comments in HTML file</li>
</ol>
<br />

<script src="CheckPasvInformationDisclosure.js"></script>

<!-- suspicious comment BUG should flag a check -->
<!-- suspicious multi-line BUG comment TODO 
should flag a BUG TODO check -->
<script type="text/javascript">
// this comment should flag BUG TODO XXX  

/* multiline inline javascript
*  comment XXX
   BUG
   TODO
*/
</script>


</body>
</html>