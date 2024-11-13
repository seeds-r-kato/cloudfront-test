<?php
// データを60回、1秒ごとに送信
// curl https://your-cloudfront-domain.com/download-file-over-time.php -o downloaded_file
for ($i = 0; $i < 60; $i++) {
    echo str_repeat("x", 1024 * 10); // 10KBのデータを出力
    ob_flush();
    flush();
    sleep(1);
}
echo "Download completed after 60 seconds";
?>
