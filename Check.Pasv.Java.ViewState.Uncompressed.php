<?php
/* Watcher test findings */

header('Content-Type: text/html; charset=utf-8');

?> 

<html>
<head>
	<title>Watcher test page for uncompressed JavaServer Faces ViewState</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Check.Pas.Java.ViewState.cs</h1>
<p>1 alert, 1 issue.</p>
<p>This is the second test for an uncompressed ViewState.</p>
<p>In the wild, you can find pages with ViewState by search for <strong>inurl:.jsf</strong> since many JSF pages produce this.</p>

<ol>
<li><strong>JavaServer Faces ViewState </strong> is uncompressed and insecure.</li>
</ol>
<br />

<input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="77+977+977+9BXVy77+9E1tMamF2YS5sYW5nLk9iamVjdDvvv73vv71Y77+9EHMpbALvv73vv714cO+/ve+/ve+/vQNzcu+/vUdvcmcuYXBhY2hlLm15ZmFjZXMuYXBwbGljYXRpb24uVHJlZVN0cnVjdHVyZU1hbmFnZXIkVHJlZVN0cnVjdENvbXBvbmVudEZZF9icSu+/ve+/vQLvv70EW++/vQlfY2hpbGRyZW5077+9SltMb3JnL2FwYWNoZS9teWZhY2VzL2FwcGxpY2F0aW9uL1RyZWVTdHJ1Y3R1cmVNYW5hZ2VyJFRyZWVTdHJ1Y3RDb21wb25lbnQ7TO+/vQ9fY29tcG9uZW50Q2xhc3N077+9EkxqYXZhL2xhbmcvU3RyaW5nO0zvv70MX2NvbXBvbmVudElkce+/vX7vv70EW++/vQdfZmFjZXRzdO+/vRNbTGphdmEvbGFuZy9PYmplY3Q7eHB1cu+/vUpbTG9yZy5hcGFjaGUubXlmYWNlcy5hcHBsaWNhdGlvbi5UcmVlU3RydWN0dXJlTWFuYWdlciRUcmVlU3RydWN0Q29tcG9uZW50O++/ve+/vSfvv70R77+977+977+9Au+/ve+/vXhw77+977+977+9CHNx77+9fu+/vQJwdO+/vS9vcmcuYXBhY2hlLm15ZmFjZXMuY3VzdG9tLnN0eWxlc2hlZXQuU3R5bGVzaGVldHTvv70HX2lkSnNwMHBzce+/vX7vv70CcHHvv71+77+9DQp077+9B19pZEpzcDFwc3Hvv71+77+9AnVx77+9fu+/vQfvv73vv73vv73vv71077+9J2phdmF4LmZhY2VzLmNvbXBvbmVudC5VSU5hbWluZ0NvbnRhaW5lcnTvv70NCmhlYWRlclZpZXdwc3Hvv71+77+9AnVx77+9fu+/vQfvv73vv73vv70Bc3Hvv71+77+9AnVx77+9fu+/vQfvv73vv73vv70Cc3Hvv71+77+9AnVx77+9fu+/vQfvv73vv73vv70Mc3Hvv71+77+9AnB077+9Nm9yZy5hcGFjaGUubXlmYWNlcy5jdXN0b20ubmF2bWVudS5VSU5hdmlnYXRpb25NZW51SXRlbXTvv70IaG9tZV9pZDFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9DQpzZWFyY2hfaWQxcHNx77+9fu+/vQJwce+/vX7vv70ZdO+/vQ0KZWRpdG9yX2lkMXBzce+/vX7vv70CcHHvv71+77+9GXTvv70NaW1wcmVzc3VtX2lkMXBzce+/vX7vv70CcHHvv71+77+9GXTvv70Oc3VibWlzc2lvbl9pZDFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9CWd1aWRlX2lkMXBzce+/vX7vv70CcHHvv71+77+9GXTvv70Ic2hvcF9pZDFwc3Hvv71+77+9AnVx77+9fu+/vQfvv73vv73vv70Ec3Hvv71+77+9AnBx77+9fu+/vRl077+9B2xpbmtfMTFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9B2xpbmtfMjFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9B2xpbmtfMzFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9B2xpbmtfNDFwce+/vX7vv70ZdO+/vQhsaW5rX2lkMXBzce+/vX7vv70CdXHvv71+77+9B++/ve+/ve+/vQdzce+/vX7vv70CcHHvv71+77+9GXTvv70IbGFuZ19lbjFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9CGxhbmdfZGUxcHNx77+9fu+/vQJwce+/vX7vv70ZdO+/vQhsYW5nX2VzMXBzce+/vX7vv70CcHHvv71+77+9GXTvv70IbGFuZ19ydTFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9CGxhbmdfamExcHNx77+9fu+/vQJwce+/vX7vv70ZdO+/vQhsYW5nX2NuMXBzce+/vX7vv70CcHHvv71+77+9GXTvv70IbGFuZ19hcjFwce+/vX7vv70ZdO+/vQlsYW5nX2FsbDFwc3Hvv71+77+9AnBx77+9fu+/vRl077+9CGNvbnRhY3QxcHNx77+9fu+/vQJwce+/vX7vv70ZdO+/vQ91c2VyX3Byb2ZpbGVfaWRwc3Hvv71+77+9AnBx77+9fu+/vRl077+9CWxvZ291dF9pZHB077+9Qm9yZy5hcGFjaGUubXlmYWNlcy5jdXN0b20ubmF2bWVudS5qc2Nvb2ttZW51Lkh0bWxDb21tYW5kSlNDb29rTWVudXTvv70GanNNZW51cHNx77+9fu+/vQJ1ce+/vX7vv70H77+977+977+9C3Nx77+9fu+/vQJwce+/vX7vv70ZdO+/vQhob21lX2lkMnBzce+/vX7vv70CcHHvv71+77+9GXTvv70NCnNlYXJjaF9pZDJwc3Hvv71+77+9AnBx77+9fu+/vRl077+9" />
</body>
</html>
