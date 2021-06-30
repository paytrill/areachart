<?php
$curl = curl_init();
  $coin_name ='Name of coin you wish to retrieve from pathash blockchain, must be written in lowercase e.g paytrill';
  $rowdata ='The total number of rows you wish to retrieve and render on the areachart template e.g 50';
  curl_setopt_array($curl, array(
	CURLOPT_URL => "https://paytrill.com/api/charts/template/areachart/five_min/?coin_name=$coin_name&row=$rowdata",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>
