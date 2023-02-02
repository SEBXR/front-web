<?php

    define('link',"https://spring-front-web-production.up.railway.app/");
    function fetchUrl($link){
        if(is_array(json_decode(file_get_contents($link))))
            return json_decode(file_get_contents($link));
        return file_get_contents($link);
    }
    
    function sendData($link){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
