
<?php
$fileurl=$_GET['rs'];
$email=$_GET['us'];
$folder =basename(dirname(dirname(__FILE__)));
$source = $_SERVER["DOCUMENT_ROOT"].$fileurl;
if (strpos($source, $folder) === false) {
    $source = $_SERVER["DOCUMENT_ROOT"]."/".$folder.$fileurl;    
}
$str_post = "email=" . $email
        . "&casestudy_download=true";    
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

if (is_file($source)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($source).'"');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($source));
    ob_clean();
    flush();
    readfile($source);    
    exit;    
} else {
    echo "File not Found";
}
