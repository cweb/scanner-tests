<?php
header('Content-Type: text/html; charset=utf-8');

// Redirect to www.nottrusted.com
$host = $_SERVER['HTTP_HOST'];
if(stristr($host, 'www') === FALSE) {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: http://www.nottrusted.com".$_SERVER['REQUEST_URI']);
   exit();
   }
?> 

<html>
<head>
	<title>Landing test page - Watcher security plugin for Fiddler</title>
	<script>
	function runall()
	{
		for (var i = 0; i < document.links.length; i++)
		{
		    if (document.links[i])
		    if (document.links[i].id == "check") 
		    {
		    	window.open(document.links[i]);
		    }
		}
	}
	</script>
</head>
<body>
<!-- The following string simulates text that a DocLib would contain: SharePoint.OpenDocuments.3 -->
<h2 style="color: green">Configuration</h2>
<p>Must have Watcher enabled and have origin domain set to www.nottrusted.com</p>

<h2>Run all tests</h2>
<a href="#" onclick="runall()">Main test page</a><br />

<h2>Individual test pages</h2>

<ol>
	<?php 
		if ($handle = opendir('.'))
		{
			while (($file = readdir($handle)) !== false)
			{
				// echo("<li><a href='$file' id='check'><strong>$file</strong></a><br /></li>\r\n");
			}
		} 
	?>
</ol>

<ol>
<li><a href="Check.Pasv.Asp.Net.ViewState.Mac.php" id="check">
<strong>Check.Pasv.Asp.Net.ViewState.Mac.cs</strong> 
</a>tests if ASP.NET VIEWSTATE has MAC protection disabled.<br /></li>
<li><a href="Check.Pasv.Charset.Mismatch.php" id="check">
<strong>Check.Pasv.Charset.Mismatch.cs</strong> 
</a>tests charset mismatches.<br /></li>
<li><a href="Check.Pasv.Charset.Utf8.php" id="check">
<strong>Check.Pasv.Charset.Utf.cs</strong> 
</a>test that UTF8 is set as the charset.<br /></li>
<li><a href="Check.Pasv.Cookie.HttpOnly.php" id="check">
<strong>Check.Pasv.Cookie.HttpOnly.cs</strong> 
</a>tests that HttpOnly flag is set on cookies.<br /></li>
<li><a href="Check.Pasv.Cookie.LooselyScoped.php" id="check">
<strong>Check.Pasv.Cookie.LooselyScoped.cs</strong> 
</a>checks for loosely scoped cookies.<br /></li>
<li><a href="Check.Pasv.Cookie.Secure.php" id="check">
<strong>Check.Pasv.Cookie.Secure.cs</strong> 
</a>test that the 'secure' flag is set on cookies over SSL.<br /></li>
<li><a href="Check.Pasv.CrossDomain.FormSubmit.php" id="check">
<strong>Check.Pasv.CrossDomain.FormSubmit.cs</strong> 
</a>checks for cross-domain form post.<br /></li>
<li><a href="Check.Pasv.CrossDomain.JavascriptReference.php" id="check">
<strong>Check.Pasv.CrossDomain.JavascriptReference.cs</strong> 
</a>checks for cross-domain javascript references.<br /></li>
<li><a href="Check.Pasv.CrossDomain.ScriptReference.php" id="check">
<strong>Check.Pasv.CrossDomain.ScriptReference.cs</strong> 
</a>checks for cross-domain javascript files inclusion.<br /></li>
<li><a href="Check.Pasv.CrossDomain.StyleSheetInclusion.php" id="check">
<strong>Check.Pasv.CrossDomain.StyleSheetInclusion.cs</strong> 
</a>checks for cross-domain stylesheets.<br /></li>
<li><a href="Check.Pasv.Flash.AllowScriptAccess.php" id="check">
<strong>Check.Pasv.Flash.AllowScriptAccess.cs</strong> 
</a>checks Flash instantiation for the AllowScriptAccess setting.<br /></li>
<li><a href="Check.Pasv.Flash.CrossDomain.php" id="check">
<strong>Check.Pasv.Flash.CrossDomain.cs</strong> 
</a>checks Flash crossdomain.xml file for insecure settings.<br /></li>
<li><a href="Check.Pasv.Header.CacheControl.php" id="check">
<strong>Check.Pasv.Header.CacheControl.cs</strong> 
</a>checks HTTP cache-control header on SSL pages.<br /></li>
<li><a href="Check.Pasv.Header.ContentTypeMissing.php" id="check">
<strong>Check.Pasv.Header.ContentTypeMissing.cs</strong> 
</a>that the Content-Type HTTP header is not missing.<br /></li>
<li><a href="Check.Pasv.Header.FrameOptions.php" id="check">
<strong>Check.Pasv.Header.FrameOptions.cs</strong> 
</a>checks that the X-FRAME-OPTIONS is not missing or insecurely set.<br /></li>
<li><a href="Check.Pasv.Header.InternalIp.php" id="check">
<strong>Check.Pasv.Header.InternalIp.cs</strong> 
</a>checks HTTP headers for internal IP address disclosure<br /></li>
<li><a href="Check.Pasv.Header.IeXssProtection.php" id="check">
<strong>Check.Pasv.Header.IeXssProtection.cs</strong> 
</a>checks that the X-XSS-Protection has not been set to disable IE's XSS protection.<br /></li>
<li><a href="Check.Pasv.Header.MimeSniff.php" id="check">
<strong>Check.Pasv.Header.MimeSniff.cs</strong> 
</a>checks that the X-CONTENT-TYPE-OPTIONS has been set.<br /></li>
<li><a href="Check.Pasv.Header.WeakAuth.php" id="check">
<strong>Check.Pasv.Header.WeakAuth.cs</strong> 
</a>alerts when weak HTTP authentication protocols like Basic or Digest are used.<br /></li>
<li><a href="Check.Pasv.InformationDisclosure.Comments.php" id="check">
<strong>Check.Pasv.InformationDisclosure.Comments.cs</strong> 
</a>checks for suspicious comments.<br /></li>
<li><a href="Check.Pasv.InformationDisclosure.DatabaseErrors.php" id="check">
<strong>Check.Pasv.InformationDisclosure.DatabaseErrors.cs</strong> 
</a>checks for database error messages.<br /></li>
<li><a href="Check.Pasv.InformationDisclosure.DebugErrors.php" id="check">
<strong>Check.Pasv.InformationDisclosure.DebugErrors.cs</strong> 
</a>checks for debugging error messages.<br /></li>
<li><a href="Check.Pasv.InformationDisclosure.InUrl.php?url=user@nottrusted.com&sessionid=12345&cc=4444111122223333&SSN=222-22-2222" id="check">
<strong>Check.Pasv.InformationDisclosure.InUrl.cs</strong> 
</a>checks for information disclosure in URL parameters.<br /></li>
<li><a href="Check.Pasv.InformationDisclosure.ReferrerLeak.php?url=user@nottrusted.com&sessionid=12345&cc=4444111122223333&SSN=222-22-2222" id="check">
<strong>Check.Pasv.InformationDisclosure.ReferrerLeak.cs</strong> 
</a>checks HTTP Referer header for information disclosure.<br /></li>
<li><a href="Check.Pasv.Java.ViewState.php" id="check">
<strong>Check.Pasv.Java.ViewState.cs</strong> 
</a>checks JavaServer Faces for insecure ViewState.<br /></li>
<li><a href="Check.Pasv.Javascript.DomainLowering.php" id="check">
<strong>Check.Pasv.Javascript.DomainLowering.cs</strong> 
</a>checks JavaScript for domain lowering operations.<br /></li>
<li><a href="Check.Pasv.Javascript.Eval.php" id="check">
<strong>Check.Pasv.Javascript.Eval.cs</strong> 
</a>checks JavaScript for use of eval() type methods.<br /></li>
<li><a href="Check.Pasv.SharePoint.DocLib.php" id="check">
<strong>Check.Pasv.SharePoint.DocLib.cs</strong> 
</a>checks for insecure SharePoint document libraries.<br /></li>
<li><a href="Check.Pasv.Silverlight.ClientAccessPolicy.php" id="check">
<strong>Check.Pasv.Silverlight.ClientAccessPolicy.cs</strong> 
</a>checks Silverlight clientaccesspolicy.xml for insecure settings.<br /></li>
<li><a href="Check.Pasv.Silverlight.EnableHtmlAccess.php" id="check">
<strong>Check.Pasv.Silverlight.EnableHtmlAccess.cs</strong> 
</a>checks Silverlight instantiation for insecure EnableHtmlAcess setting.<br /></li>
<li><a href="Check.Pasv.SSL.CertValidation.php" id="check">
<strong>Check.Pasv.SSL.CertValidation.cs</strong> 
</a>check for SSL certification validation errors.<br /></li>
<li><a href="Check.Pasv.SSL.InsecureFormLoad.php" id="check">
<strong>Check.Pasv.SSL.InsecureFormLoad.cs</strong> 
</a>checks for SSL forms loaded on insecure pages.<br /></li>
<li><a href="Check.Pasv.SSL.InsecureFormPost.php" id="check">
<strong>Check.Pasv.SSL.InsecureFormPost.cs</strong> 
</a>checks for SSL pages with form post to insecure page.<br /></li>
<li><a href="Check.Pasv.SSL.Version.php" id="check">
<strong>Check.Pasv.SSL.Version.cs</strong> 
</a>tests if insecure versions of the SSL protocol are allowed.<br /></li>
<li><a href="Check.Pasv.SSL.StrictTransportSecurity.php" id="check">
<strong>Check.Pasv.SSL.StrictTransportSecurity.cs</strong> 
</a>checks that the Strict-Transport-Security HTTP header is set on SSL pages.<br /></li>
<li><a href="Check.Pasv.Unicode.InvalidUTF8.php" id="check">
<strong>Check.Pasv.Unicode.InvalidUTF8.cs</strong> 
</a>checks inspects content bytes for invalid UTF8 sequences.<br /></li>
<li><a href="Check.Pasv.UserControlled.Charset.php?charset=myCharset" id="check">
<strong>Check.Pasv.UserControlled.Charset.cs</strong> 
</a>checks for user-controlled charset values.<br /></li>
<li><a href="Check.Pasv.UserControlled.Cookie.php?url=http://lookout.net" id="check">
<strong>Check.Pasv.UserControlled.Cookie.cs</strong> 
</a>checks for user-controlled cookie values.<br /></li>
<li><a href="Check.Pasv.UserControlled.HtmlAttributes.php?url=myTestValue" id="check">
<strong>Check.Pasv.UserControlled.HtmlAttributes.cs</strong> 
</a>checks for user-controlled HTML attribute values.<br /></li>
<li><a href="Check.Pasv.UserControlled.JavascriptEvent.php?url=myTestValue" id="check">
<strong>Check.Pasv.UserControlled.JavascriptEvent.cs</strong> 
</a>checks for user-controlled javascript event values.<br /></li>
<li><a href="Check.Pasv.UserControlled.JavascriptProperty.php?url=myTestValue" id="check">
<strong>Check.Pasv.UserControlled.JavascriptProperty.cs</strong> 
</a>checks for user-controlled javascript property values.<br /></li>
<li><a href="Check.Pasv.UserControlled.OpenRedirect.php?url=http://lookout.net" id="check">
<strong>Check.Pasv.UserControlled.OpenRedirect.cs</strong> 
</a>checks for user-controlled Open Redirects.<br /></li>
</ol>


</a><br />
<br />
<br />
<br />


</body>
</html>
