<?php
return "
<!doctype>
<html>
    <head>
    	<title>{$html->getTitle()}</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width; initial-scale=1.0'>
        {$html->getCss()}
        {$html->getScript()}
    </head>
    <body>
    	<ul id='navigation_basic'>{$html->getNavigation()}</ul>
    	<div id='page'></div>
    	<div id='loading'></div>
    </body>
</html>";