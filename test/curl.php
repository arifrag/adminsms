<?php
// $type = 'brdcst8329'; //unchanged
// $no_hp = 'contact_number1#contact_number2#contact_number3#contact_number4#contact_number5#contact_number6#contact_number7#contact_number8#contact_number9';
// $message = 'Type your message';
// $usr_api = 'your_usr_api';
// $pass_api = 'your_pass_api';
// $curl = curl_init();
// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://localhost/porto/arphi_json.php",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => "type=$type&no_hp=$no_hp&message=$message&usr_api=$usr_api&pass_api=$pass_api",
//   CURLOPT_HTTPHEADER => array(
//     "content-type: application/x-www-form-urlencoded",
//     "f: coba"
//   ),
// ));

// $response = curl_exec($curl);
// $error = curl_error($curl);

// curl_close($curl);

// if ($error) {
//   echo "cURL Error #:" . $error;
// } else {
//   echo $response;
// }


$type = 'schdle4565'; //unchanged
$no_hp = 'contact_number1';
$message = 'Type your message';
$schedule = '2016-12-30 10:41:10'; //Ex :2016-12-30 10:41:10
$usr_api = 'api1';
$pass_api = 'passapi1';
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/porto/arphisms.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "type=$type&no_hp=$no_hp&message=$message&schedule=$schedule&usr_api=$usr_api&pass_api=$pass_api",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "f: coba"
  ),
));

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
  echo "cURL Error #:" . $error;
} else {
  echo $response;
}
?>