<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');

?> 

<html>
<head>
	<title>Watcher test page for Unicode string transformations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Test all Unicode string transformations</h1>
<p>1 Unicode issue should get flagged here.</p>

<ol>
<li><strong>Normalization Form C </strong> </li>
<li><strong>Normalization Form D </strong> </li>
<li><strong>Normalization Form KC </strong> </li>
<li><strong>Normalization Form KD </strong> </li>
<li><strong>Normalization Form ToUpper() </strong> </li>
<li><strong>Normalization Form ToLower() </strong> </li>
<li><strong>Normalization Form Best-fit </strong> </li>
</ol>
<br />

<h2>The following texts each contain the test cases.</h2>
<a href="http://www.nottrusted.com/watcher/CheckPasvUnicodeTransformations.php?test=≯﹤ﬁİḍ̇">Click here for the Normalization tests</a>
<p>≯﹤ﬁİḍ̇</p>
<a href="http://www.nottrusted.com/watcher/CheckPasvUnicodeTransformations.php?test=Ａ">Click here for the best-fit test</a>
<a href="http://www.nottrusted.com/watcher/CheckPasvUnicodeTransformations.php?test=UpperLower">Click here for the toUpper/toLower test</a>
<a href="≯﹤ﬁİḍ̇">NFD</a>
<a href="≯﹤ﬁİḍ̇">NFC</a>
<a href="≯<fiİḍ̇">NFKD</a>
<a href="≯<fiİḍ̇">NFKC</a>
<a href="A">Best fit</a>
<a href="upperlower">ToLower</a>
<a href="UPPERLOWER">ToUpper</a>
<div style="upperlower">ToLower</div>
<div style="UPPERLOWER">ToUpper</div>
<b foo="≯<fiİḍ̇">NFKD</b>
<c foo="≯<fiİḍ̇">NFKC</c>
<d foo="A">Best fit</d>



</body>
</html>�
