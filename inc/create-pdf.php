<?php

// Set parameters
$apikey = '54bc59e6-948c-4b14-b6df-94af5a8e3640';
$value = stripslashes( $_POST['html'] );

$postdata = http_build_query(
	array(
		'apikey' => $apikey,
		'value' => $value,
		'MarginLeft' => 30,
		'MarginRight' => 30,
		'MarginTop' => 30,
		'MarginBottom' => 30
		)
	);
$opts = array('http' =>
	array(
		'method'  => 'POST',
		'header'  => 'Content-type: application/x-www-form-urlencoded',
		'content' => $postdata
		)
	);
$context = stream_context_create($opts);

// Convert the HTML string to a PDF using those parameters
$result = file_get_contents('http://api.html2pdfrocket.com/pdf', false, $context);

// Output headers so that the file is downloaded rather than displayed
// Remember that header() must be called before any actual output is sent
// Make the file a downloadable attachment - comment this out to show it directly inside
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename=' . 'contract-' . strtolower($_POST['customername']) . '.pdf' );
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($result));

echo $result;

?>