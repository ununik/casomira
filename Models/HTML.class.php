<?php
class HTML
{
	private function _header()
	{
		return "<head>
				<!--<base href=\"".BASE_URL."\">-->
				<meta charset=\"UTF-8\">
				<meta name=\"author\" content=\"Martin Přibyl\">
				<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
				<link rel=\"stylesheet\" type=\"text/css\" href=\"css/portrait.css\">
				<link rel=\"stylesheet\" type=\"text/css\" href=\"css/landscape.css\">
				<link rel=\"stylesheet\" type=\"text/css\" href=\"css/all.css\">
				<script src=\"js/jquery-3.1.0.min.js\"></script>
				<script src=\"js/ajax.js\"></script>
				<script src=\"js/menu.js\"></script>
				<title>Měření mezičasů</title>
				</head>";
	}
	
	public function printHTML()
	{
		print '<!DOCTYPE html>';
		print '<html>';
		print $this->_header();
		print '<body>';
		print '</body>';
		print '</html>';
	}
}