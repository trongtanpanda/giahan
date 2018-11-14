<?php
$fileurl=$_GET['rs'];
$folder =basename(dirname(dirname(dirname(__FILE__))));
$source = $_SERVER["DOCUMENT_ROOT"].$fileurl;
if (strpos($source, $folder) === false) {
    $source = $_SERVER["DOCUMENT_ROOT"]."/".$folder.$fileurl;
}
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
