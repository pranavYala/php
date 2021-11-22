<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '<website>/wp-json/wp/v2/posts/<id>',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('title' => 'Modern office design ideas NOT','description' => 'Nada'),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YWRtaW46Vk85cSBhYzhPIERXS3cgdzR6UyBIeTNEIGw4d1k='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
