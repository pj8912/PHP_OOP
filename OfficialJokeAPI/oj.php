<?php



//    $curl = curl_init();
//     curl_setopt($curl, CURLOPT_GET,  1);

//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_HTTPHEADER, array(

//       'Content-Type: application/json',
//    ));


//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//    // EXECUTE:
//    $result = curl_exec($curl);
//    if(!$result){die("Connection Failure");}
//    curl_close($curl);
//    return $result;


$handle = curl_init();
$url = "https://official-joke-api.appspot.com/jokes/random";
curl_setopt($handle, CURLOPT_URL, $url);
// curl_setopt($handle, CURLOPT_HEADER, TRUE);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
$data = curl_exec($handle);
curl_close($handle);

// echo "<br>";
// working
// var_dump(json_decode($data, true));
$new = json_decode($data, true);
echo  $new["setup"]." : ".$new["punchline"];


