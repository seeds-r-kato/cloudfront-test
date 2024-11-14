<?php
ob_implicit_flush(true);
// 出力バッファリングを無効にする
while (ob_get_level()) {
    ob_end_clean();
}

header("Content-Type: text/plain");


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
