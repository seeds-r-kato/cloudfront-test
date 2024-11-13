<?php
// 無限ループで30秒ごとにレスポンス
// curl https://your-cloudfront-domain.com/response-every-30sec.php
while (true) {
    echo "response at " . date("H:i:s") . "\n";
    ob_flush();
    flush();
    sleep(30);
}
?>
