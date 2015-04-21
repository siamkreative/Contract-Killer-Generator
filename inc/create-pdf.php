 <?php

// Set parameters
$apikey = '54bc59e6-948c-4b14-b6df-94af5a8e3640';
$value = $_POST['html'];
 
// Note that by default all page margins are set to zero - so to make space in the bottom for the footer we set the bottom margin to a higher value
$result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value) . "&MarginLeft=30&MarginRight=30&MarginTop=30&MarginBottom=30&FooterUrl=" . urlencode("http://www.html2pdfrocket.com/Examples/footer.htm"));
 
// Output headers so that the file is downloaded rather than displayed
// Remember that header() must be called before any actual output is sent
// Make the file a downloadable attachment - comment this out to show it directly inside
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename=' . 'contract-killer.pdf' );
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($result));
 
echo $result;
	
?>