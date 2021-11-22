<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://corfu-hotel.gr/wp-json/wp/v2/posts');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$headers = array(
   "Accept: application/json",
   "Authorization: Basic YWRtaW46Vk85cSBhYzhPIERXS3cgdzR6UyBIeTNEIGw4d1k=",
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

   curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
   curl_setopt($ch, CURLOPT_AUTOREFERER, true); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_VERBOSE, 1);
   
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

print_r($result);

curl_close($ch);
?>



