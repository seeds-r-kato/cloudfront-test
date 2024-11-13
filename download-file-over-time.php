<?php
// /var/html/uploads/1GB.jpgをダウンロード
$filePath = "/var/www/html/uploads/1GB.jpg";

if (!file_exists($filePath)) {
    die('File not found.');
}

$fileSize = filesize($filePath);
header('Content-Type: image/jpeg'); 
header('Content-Length: ' . $fileSize);

readfile($filePath);
exit;
?>
