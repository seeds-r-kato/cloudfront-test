<?php
$filePath = "/var/www/html/uploads/100MB.jpg";

if (!file_exists($filePath)) {
    die('File not found.');
}

$fileSize = filesize($filePath);

header('Content-Type: image/jpeg');
header('Content-Length: ' . $fileSize);

// 1秒ごとに1MBずつ出力
$handle = fopen($filePath, 'rb');
$chunkSize = 1024 * 1024;
while (!feof($handle)) {
    echo fread($handle, $chunkSize);
    flush();
    sleep(1); // 1秒遅延
}

fclose($handle);
exit;
?>
