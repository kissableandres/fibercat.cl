<?php
//	Select order to write the html.
function html_ini(){
	return '<!doctype html>
<html>';
}

function html_head($default=''){
	return "
	<head>
		<meta charset=\"utf-8\">
		<title>$default</title>
	</head>";
}

function html($params){

	ob_start();
	echo html_ini().html_head($params['title']);
}
?>