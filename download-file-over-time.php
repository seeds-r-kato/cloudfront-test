<?php
// /var/html/uploads/100MB.jpgをダウンロード
$filePath = "/var/www/html/uploads/100MB.jpg";

if (!file_exists($filePath)) {
    die('File not found.');
}

$fileSize = filesize($filePath);
header('Content-Type: image/jpeg'); 
header('Content-Length: ' . $fileSize);

readfile($filePath);
exit;
?>
