<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.corfu-hotel.gr/wp-json/wp/v2/posts/1881',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YWRtaW46Vk85cSBhYzhPIERXS3cgdzR6UyBIeTNEIGw4d1k='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>