<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '<website>/wp-json/wp/v2/posts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('title' => $_POST['title'],'description' => $_POST['desc'], 'content' => $_POST['cont']),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YWRtaW46Vk85cSBhYzhPIERXS3cgdzR6UyBIeTNEIGw4d1k='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>

// <?php

// $url = "http://corfu-hotel.gr/wp-json/wp/v2/posts";

// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $headers = array(
   // "Content-Type: application/json",
   // "Authorization: Basic YWRtaW46Vk85cSBhYzhPIERXS3cgdzR6UyBIeTNEIGw4d1k=",
// );
// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
// curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($curl, CURLOPT_VERBOSE, 1);

// $data = '{"post_title":"demo-php","post_content":"filler content"}';

// $data = http_build_query(array('post_title' => 'demo-php', 'post_content' => 'filler content'));

// $postData = "";
// foreach( $data as $key => $val ) {
   // $postData .=$key."=".$val."&";
// }
// $postData = rtrim($postData, "&");

// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);


// $resp = curl_exec($curl);
// if (curl_errno($curl)) {
    // echo 'Error:' . curl_error($curl);
// }

// var_dump($resp);
// ?>
