<?php

// parse the query string values
parse_str($_SERVER['QUERY_STRING']);
// redirect to the url specified on the query string
Header( "HTTP/1.1 302 Moved Temporarily" ); 
header("Location: $url"); /* Redirect browser */
header('PHP-Version:' . PHP_VERSION);

/* Make sure that code below does not get executed when we redirect. */
exit;
?> 
