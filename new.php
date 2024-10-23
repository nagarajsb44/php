<?php
    $incoming = file_get_contents('php://input');
    $incoming = json_decode($incoming,true);
    $headers = getallheaders();
    if($incoming['uid'] == '124564' && $headers['Authorization'] == 'Bearer YzJsdGNHeGxJSFJ2YTJWdQ=='){
      $response = '{
        "status": 200,
        "validity":1,
        "points":5400
      }';
      echo $response;
    }else{
      echo 'You are on a browser, aren't you ?';
?>
