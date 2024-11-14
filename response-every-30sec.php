<?php
ob_implicit_flush(true);

header("Content-Type: text/plain");
header("Cache-Control: no-cache");
header("Connection: keep-alive");

// 無限ループで30秒ごとにレスポンス
// 2分経ったらタイムアウト
$time = 0;
while (true) {
    echo "response at " . $time . " seconds\n";
    ob_flush();
    flush();
    sleep(30);
    $time += 30;
    if ($time > 120) {
        break;
    }
}
?>
