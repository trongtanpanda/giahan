<?php
if ($_POST) {
    $firstName  = $_POST['data']['firstName'];
    $lastName   = $_POST['data']['lastName'];
    $email      = $_POST['data']['email'];
    $company    = $_POST['data']['company'];
    $phone      = $_POST['data']['phone'];
    $ClientID      = $_POST['data']['ClientID'];
    $service    = explode(",", $_POST['data']['ic']);
    $comment    = $_POST['data']['message'];
    $country    = $_POST['data']['country'];
        
    $str_post = "firstname=" . urlencode($firstName)
        . "&lastname=" . urlencode($lastName)
        . "&email=" . urlencode($email)
        . "&phone=" . urlencode($phone)
        . "&company=" . urlencode($company)
        . "&comment=" . urlencode($comment)
        . "&ClientID=" . urlencode($ClientID)
        . "&country=" . urlencode($country);
    foreach ($service as $value) {
        if ($value!=" ") {
            $str_post .= "&product_and_service=".$value;
        }
    }
    $endpoint = 'http://go.logigear.com/l/63982/2018-08-13/cr6mhj';

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
