<?php
if ($_POST) {
    $firstName  = $_POST['data']['firstName'];
    $lastName   = $_POST['data']['lastName'];
    $email      = $_POST['data']['email'];   
    $ClientID      = $_POST['data']['ClientID'];
        
    $str_post = "firstname=" . urlencode($firstName)
        . "&lastname=" . urlencode($lastName)
        . "&email=" . urlencode($email)
        . "&ClientID=" . urlencode($ClientID);    
    $endpoint = 'http://go.logigear.com/l/63982/2018-10-30/f3z4y2';

    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response    = @curl_exec($ch);
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
    @curl_close($ch);
    echo $response;
}
