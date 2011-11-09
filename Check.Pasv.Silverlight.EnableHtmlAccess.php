<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8 ');
header('Cache-control: no-store');

?> 

<html>
<head>
	<title>Watcher test page for Silverlight EnableHtmlAccess setting</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test Check.Pasv.Silverlight.EnableHtmlAccess.cs</h1>
<p>1 alert 2 issues.</p>

<ol>
<li><strong>Silverlight EnableHtmlAccess="true" </strong> in an embed tag.</li>
<li><strong>Silverlight EnableHtmlAccess="true" </strong> in an object tag.</li>
</ol>
<br />

<object id="SilverlightPlugin1" width="300" height="300"
   data="data:application/x-silverlight-2," 
   type="application/x-silverlight-2" >
   <param name="source" value="file.xap"></param>
   <param name="enablehtmlaccess" value="true"></param>
</object>

<embed type="x-silverlight" enablehtmlaccess="true"></embed>

</body>
</html>