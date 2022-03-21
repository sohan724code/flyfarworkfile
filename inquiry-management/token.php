<?php

//Fly Far Z01K
$client_id= base64_encode("V1:735082:Z01K:AA");
//$client_secret = base64_encode("f280537f");
$client_secret = base64_encode("280ff537");



$token = base64_encode($client_id.":".$client_secret);

$data='grant_type=client_credentials';


    $headers = array(
        'Authorization: Basic '.$token,
        'Accept: /',
        'Content-Type: application/x-www-form-urlencoded'
    );

$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://api.havail.sabre.com/v2/auth/token");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    var_dump($resf = json_decode($res,1));
    $access_token = $resf['access_token']; // token provided from sabre
    $token_type = $resf['token_type'];
    $expires_in_seconds = $resf['expires_in'];

    
    //echo $access_token;
        if(file_exists("token.txt")){
        unlink("token.txt");
    }
    
    $authtoken = fopen("token.txt", "w") or die ("Unable to open file!");;
    fwrite($authtoken, $access_token);
    fclose($authtoken);
    
?>
