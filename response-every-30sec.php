<?php
ini_set('implicit_flush', 1);
ob_implicit_flush(true);

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
